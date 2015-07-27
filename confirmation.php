<?php
/*
Template Name: コンタクトフォーム確認専用
*/
?>

<?php get_header(); ?>
<div id="pan">
<ul>
<li class="home"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/images/pan_home.png" alt="ホーム"></a></li>
<li><a href="#">下層ページタイトル</a></li>
</ul>

</div><!--#pan end-->
<div id="main">
<div id="w990">
<div class="titleGreen">
<h2><span>全面リフォーム</span>対応施工業者への一括見積もりフォーム</h2>
<span class="icon-arrow-green">arrow></span></div>

<div class="flowIconArea"><img src="<?php echo get_template_directory_uri(); ?>/common/images/flow01.png" alt="見積依頼の流れstep1" width="609" height="69"></div>

<div id="formArea">


<p class="text_c">確認画面</p>
<ul class="mitumoriList">
<?php
	if(isset($_COOKIE["renovation"])){
	$category = $_COOKIE["renovation"];
	$url = $_COOKIE["url"];
	$item_name = $_COOKIE["item_name"];
	}else{
	$category = "未定";
	}
	$cf_checkbox = $_POST["cf_checkbox"];
	$cf_checkbox_echo = implode(" ", $cf_checkbox);
	$page_ids = $_GET["selectCheck"];
	if(isset($page_ids)){
	foreach($page_ids as $value):
?>
<?php
	$custom_fields = get_post_custom($page_ids);

// []内はカスタムフィールドのスラグ、フィールドの値を変数に格納する
	$image = $custom_fields['wpcf-image'];

	$company_name = $custom_fields['wpcf-company_name'];

	$prefectures = $custom_fields['wpcf-prefectures'];

	$home = $custom_fields['wpcf-home'];

	$renovations = $custom_fields['wpcf-renovation'];
?>

<li class="even">
<div class="imgArea"><img src="<?php echo $image[0]; ?>"></div>
<div class="mitumoriListRight"><h3><?php echo $company_name[0]; ?></h3>
<p class="address"><?php echo $prefectures[0]; ?><?php echo $home[0]; ?></p>
</div>
<div class="clearBtn">×削除</div>
</li>
<?php endforeach;
};
?>
</ul>
<div id="w850">


<table id="formTable">
<tr>
<td class="titleTD"><h4>お客様情報</h4></td>
</tr>
<tr>
<td class="inputAreaTD">
<form action="http://s-zaiko.com/reform/?page_id=100" method="post">
<table>
<tr>
<th><div>お名前</div></th>
<td class="name"><?php echo $_POST["name_text"] ?></td>
	<input type="hidden" name="name_text" id="name_text" value="<?php echo $_POST["name_text"] ?>" />
</tr>
<tr>
<th><div>メールアドレス</div></th>
<td class="email"><?php echo $_POST["email"] ?></td>
	<input type="hidden" name="email" id="email" value="<?php echo $_POST["email"] ?>" />
</tr>
<tr>
<th><div>お電話番号</div></th>
<td class="telNumber"><?php echo $_POST["num"] ?></td>
	<input type="hidden" name="num" id="num" value="<?php echo $_POST["num"] ?>" />
</tr>
<tr>
<th><div>ご相談商品</div></th>
<td class="items"><a href="<?php echo $url ?>" target="_blank"><?php echo $item_name ?></a></td>
	<input type="hidden" name="item" id="item" value="<?php echo $category ?>" />
</tr>
<tr>
<th><div>リフォームを希望する物件の種別</div></th>
<td class="syubetsu">
<?php echo $_POST["syubetsu"] ?></td>
	<input type="hidden" name="syubetsu" id="syubetsu" value="<?php echo $_POST["syubetsu"] ?>" />
</tr>
<tr>
<th><div>リフォーム箇所</div></th>
<td class="kasho"><?php echo $cf_checkbox_echo ?></td>
	<input type="hidden" name="reform_part" id="reform_part" value="<?php echo $cf_checkbox_echo ?>" />
</tr>
<tr>
<th><div>リフォーム内容（最大1000文字）</div></th>
<td class="naiyou"><?php echo $_POST["reform_data"] ?></td>
	<input type="hidden" name="reform_data" id="reform_data" value="<?php echo $_POST["reform_data"] ?>" />
</tr>
<tr>
<th><div>ご希望の工事時期</div></th>
<td class="jiki"><?php echo $_POST["hope_time"] ?></td>
	<input type="hidden" name="hope_time" id="hope_time" value="<?php echo $_POST["hope_time"] ?>" />
</tr>
<tr>
<th><div>リフォームのご予算</div></th>
<td class="yosan"><?php echo $_POST["reform_budget"] ?>円</td>
	<input type="hidden" name="reform_budget" id="reform_budget" value="<?php echo $_POST["reform_budget"] ?>" />
</tr>
<tr>
<th><div>リフォームを希望する物件の所在地</div></th>
<td class="shozaichi">
〒<?php echo $_POST["post_num"] ?>
<p>都道府県、市区町村</p><?php echo $_POST["home"] ?>
<p>番地、建物名、部屋番号</p><?php echo $_POST["home_sub"] ?></td>
	<input type="hidden" name="post_num" id="post_num" value="<?php echo $_POST["post_num"] ?>" />
	<input type="hidden" name="home" id="home" value="<?php echo $_POST["home"] ?>" />
	<input type="hidden" name="home_sub" id="home_sub" value="<?php echo $_POST["home_sub"] ?>" />
</tr>
<tr>
<th class="lastCell"><div>リフォームを希望する物件の築年数</div></th>
<td class="lastCell chikunen">
<?php echo $_POST["year"] ?></td>
	<input type="hidden" name="year" id="year" value="<?php echo $_POST["year"] ?>" />
</tr>
</table>
</td>
</tr>
</table>

<p class="text_c mt_20">ご登録の情報はお客様の同意無く、第３者へ開示・提供はいたしません。上記内容を送信することにより、<br>
<a href="#">利用規約</a>及び<a href="#">個人情報のお取り扱い</a>に同意されたこととなりますのでご承諾の上ご登録ください。</p>

<input type="image" src="<?php echo get_template_directory_uri(); ?>/common/images/btn_kakunin.png" class="kakuninBtn overimg">
</form>
</div><!--w850 end-->
</div><!--formArea-->
</div><!--w990 end-->
</div><!--main end-->
<?php get_footer(); ?>