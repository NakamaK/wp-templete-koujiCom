<?php
/*
Template Name: コンタクトフォーム専用
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


<p class="text_c">一括見積もりする業者をご確認ください。削除される場合は、「削除する」ボタンをクリックしてください。</p>
<ul class="mitumoriList">
<?php
	if(isset($_COOKIE["renovation"])){
	$category = $_COOKIE["renovation"];
	$url = $_COOKIE["url"];
	$item_name = $_COOKIE["item_name"];
	}else{
	$category = "未定";
	}
	$page_ids = $_GET["selectCheck"];
	if(isset($page_ids)){
	foreach($page_ids as $value):
?>
<?php
	$custom_fields = get_post_custom($value);
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
<div class="clearBtn kakuninBtn overimg">×削除</div>
</li>
<?php endforeach;
};
?>
</ul>

<p style="margin-left:70px; margin-bottom:20px;">業者からの訪問や電話でのセールスは一切ありません。<br>
リフォームを予定されている建物の種類や箇所などをご入力ください。ご希望の条件や地域に該当するリフォーム会社から回答がございます。</p>
<div id="w850">


<table id="formTable">
<tr>
<td class="titleTD"><h4>お客様情報</h4></td>
</tr>
<tr>
<td class="inputAreaTD">

<form action="http://s-zaiko.com/reform/?page_id=98" method="post" id="contactform">

<table>
<tr>
<th><div>お名前<span class="must">必須</span></div></th>
<td class="name"><input type="text" name="name_text" class="validate[required]"></td>
</tr>
<tr>
<th><div>メールアドレス<span class="must">必須</span></div></th>
<td class="email"><input type="email" name="email" class="validate[required,custom[email]]"></td>
</tr>
<tr>
<th><div>お電話番号<span class="must">必須</span></div></th>
<td class="telNumber"><input type="tel" name="num" class="validate[required,custom[phone]]"></td>
</tr>
<tr>
<th><div>ご相談商品</div></th>
<td class="items" value="<?php echo $category ?>" name="items"><a href="<?php echo $url ?>" target="_blank"><?php echo $item_name ?></a></td>
</tr>
<tr>
<th><div>リフォームを希望する物件の種別<span class="must">必須</span></div></th>
<td class="syubetsu">
<select name="syubetsu" class="validate[required]">
<option value="">選択してください</option>
<option value="マンション">マンション</option>
<option value="一戸建て">一戸建て</option>
<option value="店舗">店舗</option>
<option value="その他">その他</option>

</select></td>
</tr>
<tr>
<th><div>リフォーム箇所<span class="must">必須</span></div></th>
<td>
<ul>
<?php 
global $reform_parts;
foreach ($reform_parts as $reform_part):
?>
<li style="float:left;padding-right:3px">
	<input type="checkbox" name="cf_checkbox[]" value="<?php echo $reform_part ?>" class="validate[minCheckbox[1]]">
	<label><?php echo $reform_part ?></label>
</li>
<?php endforeach;?>
</ul>
</td>
</tr>
<tr>
<th><div>リフォーム内容（最大1000文字）<span class="must">必須</span></div></th>
<td class="naiyou"><textarea name="reform_data" cols="50" rows="10" class="validate[required]"></textarea></td>
</tr>
<tr>
<th><div>ご希望の工事時期</div></th>
<td class="jiki"><input type="text" name="hope_time"></td>
</tr>
<tr>
<th><div>リフォームのご予算</div></th>
<td class="yosan"><input type="text" name="reform_budget">円</td>
</tr>
<tr>
<th><div>リフォームを希望する物件の所在地<span class="must">必須</span></div></th>
<td class="shozaichi">
〒<input type="tel" name="post_num" class="zip validate[required,custom[number],maxSize[6]]">
<p>都道府県、市区町村</p><input type="text" name="home" class="validate[required]">
<p>番地、建物名、部屋番号</p><input type="text" name="home_sub" class="validate[required]"></td>
</tr>
<tr>
<th class="lastCell"><div>リフォームを希望する物件の築年数</div></th>
<td class="lastCell chikunen">
<select name="year">
<option value="3年未満">3年未満</option>
<option value="3年以上〜5年未満">3年以上〜5年未満</option>
<option value="5年以上〜10年未満">5年以上〜10年未満</option>
<option value="10年以上〜15年未満">10年以上〜15年未満</option>
<option value="15年以上〜20年未満">15年以上〜20年未満</option>
<option value="20年以上〜25年未満">20年以上〜25年未満</option>
<option value="25年以上〜30年未満">25年以上〜30年未満</option>
<option value="35年以上〜40年未満">35年以上〜40年未満</option>
<option value="40年以上〜50年未満">40年以上〜50年未満</option>
<option value="50年以上">50年以上</option>
</select></td>
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