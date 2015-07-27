<?php
//値を取得
$s = $_GET["s"];
//リフォーム部位
if($_GET["renovation"] == null){
	$renovation = $_COOKIE["renovation"];
}else{
	$renovation = $_GET["renovation"];
	if(is_array($renovation)){
		$renovation = implode(",",$renovation);
	}
	setcookie("renovation",$renovation);
}

//都道府県
	if($_COOKIE["home_select1"] != null){
		$prefectures1 = $_COOKIE["home_select1"];	
	}else{
		$prefectures1 = $_GET["prefectures1"];	
	setcookie("renovation",$renovation);
	}
	if($_COOKIE["home_select2"] != null){
		$prefectures2 = $_COOKIE["home_select2"];	
	}else{
		$prefectures2 = $_GET["prefectures2"];	
	}
	if($_COOKIE["home_select3"] != null){
		$prefectures3 = $_COOKIE["home_select3"];	
	}else{
		$prefectures3 = $_GET["prefectures3"];	
	}

	if($_COOKIE["home_sub_select1"] != null){
		$home1 = $_COOKIE["home_sub_select1"];	
	}else{
		$home1 = $_GET["home1"];	
	}
	if($_COOKIE["home_sub_select2"] != null){
		$home2 = $_COOKIE["home_sub_select2"];	
	}else{
		$home2 = $_GET["home2"];	
	}
	if($_COOKIE["home_sub_select3"] != null){
		$home3 = $_COOKIE["home_sub_select3"];	
	}else{
		$home3 = $_GET["home3"];	
	}

$item_name = $_GET["item_name"];
//都道府県にソート用
global $prefectures_sort;

//リフォームurl判別
$url = $_SERVER['HTTP_REFERER'];
$url_check = substr($url, 0, 28);
if($url_check == "http://s-zaiko.com/products/"){
setcookie("url",$url);
setcookie("item_name",$item_name);
}
//都道府県の値を整理
if($prefectures1 != null && $prefectures1 != ""){
	$prefectures[1]["prefecture"] = $prefectures1;
		if($home1 != null){
		$prefectures[1]["home"] = $home1;
	}
}
if($prefectures2 != null && $prefectures2 != ""){
	$prefectures[2]["prefecture"] = $prefectures2;
		if($home2 != null){
		$prefectures[2]["home"] = $home2;
	}
}
if($prefectures3 != null && $prefectures3 != ""){
	$prefectures[3]["prefecture"] = $prefectures3;
		if($home3 != null){
		$prefectures[3]["home"] = $home3;
	}
}

if ($prefectures != null){
	foreach ($prefectures as $key => $value) {
		if(count($prefectures) != $key){
			$prefectures_sel .= $value["prefecture"];
			if($value["home"] != null){
				$prefectures_sel .= $value["home"];
			}
			$prefectures_sel .= ",";
		}else{
			$prefectures_sel .= $value["prefecture"];
			if($value["home"] != null){
			$prefectures_sel .= $value["home"];
			}
		}
	}
}

if(mb_substr($prefectures_sel, -1,1, "UTF-8") == ","){
	$prefectures_sel = substr($prefectures_sel, 0, -1);
}

//リフォーム部のSQLを構築
if($renovation != null && preg_match("/,/",$renovation) == 0){
	if($prefectures != null){
	$sql .= ' (main.meta_key = "wpcf-renovation" AND main.meta_value LIKE "%%'. $renovation .'%%") AND';
	}else{
	$sql .= ' (main.meta_key = "wpcf-renovation" AND main.meta_value LIKE "%%'. $renovation .'%%") AND sub_home.meta_key = "wpcf-prefectures"';
	}
}else if(preg_match("/,/",$renovation) == 1){
	$renovation_array = explode(",", $renovation);
	$renovation_result = "";
	$renovation_result .= "(";
		foreach ($renovation_array as $key => $value) {
			if(count($renovation_array)-1 == $key){
				$renovation_result .= 'main.meta_value LIKE "%%'. $value .'%%")';
			}else{
				$renovation_result .= 'main.meta_value LIKE "%%'. $value .'%%" OR ';
			}
		}
	$renovation_result .= ") ";
	if($prefectures != null){
	$sql .= ' (main.meta_key = "wpcf-renovation" AND ' . $renovation_result . 'AND';
	}else{
	$sql .= ' (main.meta_key = "wpcf-renovation" AND ' . $renovation_result . 'AND sub_home.meta_key = "wpcf-prefectures"';
	}
}

//都道府県のSQLを構築
if($prefectures != null){
	if(count($prefectures) == 1){
		foreach ($prefectures as $value) {
			if($value["home"] == null){
				$sql .= ' (sub.meta_key = "wpcf-prefectures" AND sub.meta_value = "' . $value["prefecture"] . '")';
			}else{
				$sql .= ' (sub.meta_key = "wpcf-prefectures" AND (sub.meta_value = "' . $value["prefecture"] . '" AND sub_home.meta_value LIKE "%%' . $value["home"] . '%%"))';
			}
		}
	}else{
		$sql .= " (";
		foreach ($prefectures as $key => $value) {
			if($value["home"] == null){
				if(count($prefectures) != $key){
					$sql .= '(sub.meta_key = "wpcf-prefectures" AND sub.meta_value = "' . $value["prefecture"] . '") OR ';
				}else{
					$sql .= '(sub.meta_key = "wpcf-prefectures" AND sub.meta_value = "' . $value["prefecture"] . '")';
				}
			}else{
				if(count($prefectures) != $key){
					$sql .= '(sub.meta_key = "wpcf-prefectures" AND (sub.meta_value = "' . $value["prefecture"] . '" AND sub_home.meta_value LIKE "%%' . $value["home"] . '%%")) OR ';
				}else{
					$sql .= '(sub.meta_key = "wpcf-prefectures" AND (sub.meta_value = "' . $value["prefecture"] . '" AND sub_home.meta_value LIKE "%%' . $value["home"] . '%%"))';
				}
			}
		}
		$sql .= ")";
	}
}

//DBに接続
if($renovation == null && $prefectures == null){
$search_postids=$wpdb->get_col('
SELECT main.post_id,sub.meta_value FROM wp_postmeta main INNER JOIN 
(wp_postmeta sub INNER JOIN wp_postmeta sub_home on sub.post_id = sub_home.post_id) ON main.post_id = sub.post_id 
WHERE sub_home.meta_key = "wpcf-prefectures" 
GROUP BY main.post_id');
}else{
$search_postids=$wpdb->get_col('
SELECT main.post_id,sub.meta_value FROM wp_postmeta main INNER JOIN 
(wp_postmeta sub INNER JOIN wp_postmeta sub_home on sub.post_id = sub_home.post_id) ON main.post_id = sub.post_id 
WHERE' . $sql . ' 
GROUP BY main.post_id');
}

//都道府県のソート
if($search_postids != null){
	foreach ($search_postids as $search_postid) {
		$match_target=$wpdb->get_var('
		SELECT meta_value FROM wp_postmeta 
		WHERE meta_key = "wpcf-prefectures" AND post_id = ' . $search_postid .' 
		GROUP BY post_id');
		if($sort != null){
			foreach ($sort as $value) {
				$match_value=$wpdb->get_var('
				SELECT meta_value FROM wp_postmeta 
				WHERE meta_key = "wpcf-prefectures" AND post_id = ' . $value .' 
				GROUP BY post_id');
				if(($prefectures_sort[$match_value] >= $prefectures_sort[$match_target]) and $flg != 1){
					$result[] = $search_postid;
					$result[] = $value;
					$flg = 1;
				}else{
					$result[] = $value;
				}
			}
				if($flg != 1){
					$result[] = $search_postid;
				}
			$sort = $result;
			$flg = 0;
			$result = array();
		}else{
			$sort[] = $search_postid;
		}
	}
$search_postids = $sort;
}
//合計
$search_postid_total = count($search_postids);

$postid_num = 0;

foreach ($search_postids as $key => $value) {
	if(($key % 5) == 0){
	$postid_num++;
	$post_ids[$postid_num][] = $value;
	}else{
	$post_ids[$postid_num][] = $value;
	}
}

if($_GET["pageid"] == null || $_GET["pageid"] == 1){
    $search_postids = $post_ids[1];
}else{
    $search_postids = $post_ids[$_GET["pageid"]];
}

?>
<?php get_template_part('head_search');?>

<div id="pan">
<ul>
<li class="home"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/common/images/pan_home.png" alt="ホーム"></a></li>
<li><a href="<?php print($_SERVER["REQUEST_URI"]); ?>"><p>施工会社一覧</p></a></li>
</ul>
</div><!--#pan end-->

<div id="main">
<div id="mainCrm">

<div class="titleH2 mt_0 greenType">
<h2>
<span>
	<?php if(isset($prefectures_sel) || isset($renovation)):?>
	<?php echo $prefectures_sel; ?><?php if(isset($prefectures_sel) && isset($renovation)){ echo ",";} ?><?php echo $renovation; ?>
</span>対応施工業者一覧：検索結果<?php echo $search_postid_total; ?>社</h2>
	<?php else: ?>
</span>全対応施工業者一覧：検索結果<?php echo $search_postid_total; ?>社</h2>
	<?php endif; ?>
<span class="icon-arrow-green"></span>
</div>

<form method="get" id="searchform" action="">
    <input type="hidden" name="s" id="s" value="" />
    <input type="hidden" name="checkbox" id="checkbox" value="" />

<p class="mt_20">絞り込み検索してください。</p>
<div class="searchBoxOuter three">
<table class="searchBox">
<tr>
<th>第一希望エリア</th>
<td>都道府県：
<select name="prefectures1" class="prefectures" id="home_select1">
<option value="" checked>選択してください</option>
            	<?php 
            	global $prefs;
            	foreach ($prefs as $pref):
				?>
                <option value="<?php echo $pref ?>"><?php echo $pref ?></option>
                <?php endforeach;?>
</select>
市区町村：
<select name="home1" id="home_sub_select1">
<option value="">選択してください</option>
</select>

</td>

</tr>
<tr>
<th>第二希望エリア</th>
<td>都道府県：
<select name="prefectures2" class="prefectures" id="home_select2">
<option value="" checked>選択してください</option>
            	<?php 
            	global $prefs;
            	foreach ($prefs as $pref):
				?>
                <option value="<?php echo $pref ?>"><?php echo $pref ?></option>
                <?php endforeach;?>
</select>
市区町村：
<select name="home2" id="home_sub_select2">
<option value="">選択してください</option>
</select>
</td>

</tr>
<tr>
<th>第三希望エリア</th>
<td>都道府県：
<select name="prefectures3" class="prefectures" id="home_select3">
	<option value="" checked>選択してください</option>
            	<?php 
            	global $prefs;
            	foreach ($prefs as $pref):
				?>
                <option value="<?php echo $pref ?>"><?php echo $pref ?></option>
                <?php endforeach;?>
</select>
市区町村：
<select name="home3" id="home_sub_select3">
<option value="">選択してください</option>
</select>
</td>
</tr>
</table>


</td>
<td><input type="image" src="<?php echo get_template_directory_uri(); ?>/common/images/btn_kensaku_long.png" class="submitBtnLong submit_cookie"></td>
</tr>
</table>

</div>
</form>

<?php if(isset($search_postids)): ?>
<div class="tablenav">
        <?php if($_GET["pageid"] != 1 && $_GET["pageid"] != null): ?>
            <a class="prev page-numbers" href="http://s-zaiko.com/kouji/?s=&pageid=<?php echo $_GET["pageid"] - 1?>">‹</a>
        <?php endif;?>
    <?php foreach($post_ids as $key => $value): ?>
            <?php if($_GET["pageid"] == $key || (($_GET["pageid"] == null) && ($key == 1))):?>
                <span class="page-numbers current"><?php echo $key ?></span>
            <?php else: ?>
                <a class="page-numbers" href="http://s-zaiko.com/kouji/?s=&pageid=<?php echo $key?>"><?php echo $key ?></a>
            <?php endif; ?>
    <?php endforeach; ?>
        <?php if($_GET["pageid"] != count($post_ids) && $_GET["pageid"] != null): ?>
            <a class="prev page-numbers" href="http://s-zaiko.com/kouji/?s=&pageid=<?php echo $_GET["pageid"] + 1?>">›</a>
        <?php elseif(count($post_ids) !=1 && $_GET["pageid"] == null):?>
            <a class="prev page-numbers" href="http://s-zaiko.com/kouji/?s=&pageid=<?php echo $_GET["pageid"] + 2?>">›</a>
        <?php endif;?>
</div>
<?php endif; ?>

<?php if(count($search_postids) != 0): ?>
<form action="<?php echo home_url();?>" name="" method="get">
	    <input type="hidden" name="page_id" id="page_id" value="95" />
<?php if(isset($_GET["checkbox"])): ?>
<table class="selectArea">
<tr>
<td class="allCheck"><div><label><input type="checkbox" onClick="AllChecked();" class="all" ></label></div></td><td class="allAdd" style="display:none"><input type="image" src="<?php echo get_template_directory_uri(); ?>/common/images/btn_mitumori.png" class="overimg"></td>
</tr>
</table>
<?php endif ?>
<div id="archiveListOuter" class="selectForm">
<?php foreach($search_postids as $search_postid): ?>
	<?php $custom_fields = get_post_custom($search_postid);
		$main_content = get_post($search_postid);
		$excerpt = $main_content->post_content;

		if(mb_strlen($excerpt) >= 80){
			$excerpt = mb_strimwidth($excerpt, 0, 160, "...");
		}

		$url = get_permalink($search_postid);
	// []内はカスタムフィールドのスラグ、フィールドの値を変数に格納する
		$image = $custom_fields['wpcf-image'];

		$company_name = $custom_fields['wpcf-company_name'];

  		$prefectures = $custom_fields['wpcf-prefectures'];

		$home = $custom_fields['wpcf-home'];

		$telephone = $custom_fields['wpcf-telephone'];

		$renovations = $custom_fields['wpcf-renovation'];
	?>
<div class="archiveList">
<a href="<?php echo $url; ?>">
	<?php if(isset($_GET["checkbox"])): ?>
	<label><input type="checkbox" class="selectCheck" name="selectCheck[]" value="<?php echo $search_postid ?>"></label>
	<?php endif; ?>
<div class="img100Area"><img src="<?php echo $image[0]; ?>" alt=""></div>
<div class="archiveListRight">
<h3><?php echo $company_name[0]; ?></h3>
<p class="address"><?php echo $prefectures[0]; ?><?php echo $home[0]; ?></p>
<h4>電話番号：<?php echo $telephone[0] ?></h4>
<p><?php echo $excerpt; ?></p>
</div></a>
</div><!--archiveList end-->
<?php endforeach; ?>

</div><!--#archiveListOuter end-->

<?php else: ?>
    <div class="post">
        <p>申し訳ございません。<br />登録店舗がございません。</p>
    </div>
<?php endif; ?>

<?php if(isset($_GET["checkbox"])): ?>
<table class="selectArea bottom">
<tr>
<td class="allCheck"><div><label><input type="checkbox" onClick="AllChecked();" class="all" ></label></div></td><td class="allAdd" style="display:none"><input type="image" src="<?php echo get_template_directory_uri(); ?>/common/images/btn_mitumori.png" class="overimg"></td>
</tr>
</table>
<?php endif; ?>
</form>
    
<?php if(isset($search_postids)): ?>
<div class="tablenav">
        <?php if($_GET["pageid"] != 1 && $_GET["pageid"] != null): ?>
            <a class="prev page-numbers" href="http://s-zaiko.com/kouji/?s=&pageid=<?php echo $_GET["pageid"] - 1?>">‹</a>
        <?php endif;?>
    <?php foreach($post_ids as $key => $value): ?>
            <?php if($_GET["pageid"] == $key || (($_GET["pageid"] == null) && ($key == 1))):?>
                <span class="page-numbers current"><?php echo $key ?></span>
            <?php else: ?>
                <a class="page-numbers" href="http://s-zaiko.com/kouji/?s=&pageid=<?php echo $key?>"><?php echo $key ?></a>
            <?php endif; ?>
    <?php endforeach; ?>
        <?php if($_GET["pageid"] != count($post_ids) && $_GET["pageid"] != null): ?>
            <a class="prev page-numbers" href="http://s-zaiko.com/kouji/?s=&pageid=<?php echo $_GET["pageid"] + 1?>">›</a>
        <?php elseif(count($post_ids) !=1 && $_GET["pageid"] == null):?>
            <a class="prev page-numbers" href="http://s-zaiko.com/kouji/?s=&pageid=<?php echo $_GET["pageid"] + 2?>">›</a>
        <?php endif;?>
</div>
<?php endif; ?>
    
<div class="bnMain mt_40"><a href="http://s-zaiko.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/bn_index01.png" alt="インターネット見積りお試しキャンペーン"></a></div>
</div><!--#mainCrm end-->
<?php get_sidebar("left"); ?>
</div><!--main end-->
<?php get_footer(); ?>