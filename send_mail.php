<?php
/*
Template Name: 送信完了メール
*/
?>

<?php get_header(); ?>

<?
$name_text = $_POST["name_text"];
$email = $_POST["email"];
$num = $_POST["num"];
$item = $_POST["item"];
$syubetsu = $_POST["syubetsu"];
$reform_part = $_POST["reform_part"];
$reform_data = $_POST["reform_data"];
$hope_time = $_POST["hope_time"];
$reform_budget = $_POST["reform_budget"];
$post_num = $_POST["post_num"];
$home = $_POST["home"];
$home_sub = $_POST["home_sub"];
$year = $_POST["year"];
?>

<?php
$to = 'yamanaka@designic.jp';
$subject = 'タイトル';
$headers[] = 'From: 送信元名前 <yamanaka@designic.jp>';
$headers[] = 'Cc: nakamura.makoto365@gmail.com';
$headers[] = 'Bcc: nakamura.makoto365@gmail.com';
$message = <<< DOC
お名前:$name_text
メールアドレス:$email
お電話番号:$num
ご相談商品:$item
リフォームを希望する物件の種別:$syubetsu
リフォーム箇所:$reform_part
リフォーム内容:$reform_data
ご希望の工事時期:$hope_time
リフォームのご予算:$reform_budget
リフォームを希望する物件の所在地:$post_num $home $home_sub
リフォームを希望する物件の築年数:$year
DOC;
wp_mail($to,$subject,$message,$headers);
?>

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
    <div class="post">
        <p>送信完了致しました</p>
    </div>
</div><!--formArea-->
</div><!--w990 end-->
</div><!--main end-->
<?php get_footer(); ?>