<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_deregister_script('jquery'); ?>
	<!-- WordPressのjQueryを読み込ませない -->

<!-- メインコンテンツ -->

<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1070px,initial-scale=1.0, user-scalable=yes">
<title>施工業者一覧 / リフォーム業者検索の工事.com</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<?php
wp_enqueue_style('validationEngine', get_stylesheet_directory_uri() . '/common/css/validationEngine.jquery.css', array(), '1.0');
wp_enqueue_style('mailformpro', get_stylesheet_directory_uri() . '/common/mfp.statics/mailformpro.css', array(), '1.0');
wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/common/css/reset.css', array(), '1.0');
wp_enqueue_style('style', get_stylesheet_uri(), array("reset"), '1.0'); ?>
<?php
wp_enqueue_script('rollover', get_template_directory_uri() . '/common/js/rollover.js',array(),'0.1.0');
wp_enqueue_script('scroll',get_template_directory_uri() . '/common/js/scroll.js',array(),'0.1.0');
wp_enqueue_script('respond',get_template_directory_uri() . '/common/js/respond.min.js',array(),'0.1.0');
wp_enqueue_script('com',get_template_directory_uri() . '/common/js/com.js',array(),'0.1.0');
wp_enqueue_script('cookie',get_template_directory_uri() . '/common/js/jquery.cookie.js',array(),'0.1.0');

//必須フォーム処理
wp_enqueue_script('scroll',get_template_directory_uri() . '/common/js/scroll.js',array(),'0.1.0');
wp_enqueue_script('validationEngine-ja',get_template_directory_uri() . '/common/js/jquery.validationEngine-ja.js',array(),'0.1.0');
wp_enqueue_script('validationEngine_jq',get_template_directory_uri() . '/common/js/jquery.validationEngine.js',array(),'0.1.0');
wp_enqueue_script('function',get_template_directory_uri() . '/common/js/function.js',array(),'0.1.0');
?>

<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<script src="http://api.html5media.info/1.1.4/html5media.min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<!-- FlexSlider -->
<?php
wp_enqueue_style('slider', get_stylesheet_directory_uri() . '/common/slider/flexslider.css', array(), '1.0');
wp_enqueue_style('lightbox', get_stylesheet_directory_uri() . '/common/lightbox/lightbox.css', array(), '1.0');
wp_enqueue_script('slider', get_template_directory_uri() . '/common/slider/jquery.flexslider-min.js',array(),'0.1.0');
wp_enqueue_script('lightbox', get_template_directory_uri() . '/common/lightbox/lightbox-2.6.min.js',array(),'0.1.0');
?>

<?php
wp_enqueue_style('map_modal_window', get_stylesheet_directory_uri() . '/common/css/map_modal_window.css', array(), '1.0');
wp_enqueue_script('map_modal_window', get_template_directory_uri() . '/common/js/map_modal_window.js',array(),'0.1.0');
?>

<script>

$(window).load(function() {
              $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
              });
            });
</script>

</head>
<?php wp_head(); ?>
<body>
<div id="header">
<div class="wrap">
<h1>最適なリフォーム業者が見つかります。「工事.com」はリフォーム業者の検索サイトです。</h1>

<div id="siteLogo"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.png" alt="サイトタイトルロゴ"></a></div>

<div class="kameiten_btn"><a href="http://s-zaiko.com/kouji/kameiten"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_kamei.png" alt="加盟店登録" class="overimg"></a></div>

</div><!--wrap end-->
</div><!--#header end-->

<div id="gnavi" class="home_clear">
<ul>
<li><a href="http://s-zaiko.com/kouji"><img src="<?php echo get_template_directory_uri(); ?>/common/images/gnavi01_off.png" alt="ホーム"></a></li>
<li><a href="http://s-zaiko.com/kouji/about/#about_us"><img src="<?php echo get_template_directory_uri(); ?>/common/images/gnavi02_off.png" alt="サイトについて"></a></li>
<!--<li><a href="#"><img src="common/images/gnavi03_off.png" alt="ご利用について"></a></li>-->
<li><a href="http://s-zaiko.com/kouji/?s="><img src="<?php echo get_template_directory_uri(); ?>/common/images/gnavi04_off.png" alt="施工業者一覧"></a></li>
<li><a href="http://s-zaiko.com/kouji/case"><img src="<?php echo get_template_directory_uri(); ?>/common/images/gnavi05_off.png" alt="施工事例"></a></li>
<!--<li><a href="#"><img src="common/images/gnavi06_off.png" alt="無料見積"></a></li>-->
<li><a href="http://s-zaiko.com/kouji/about/#qa"><img src="<?php echo get_template_directory_uri(); ?>/common/images/gnavi07_off.png" alt="Q&amp;A"></a></li>
<li><a href="http://s-zaiko.com/kouji/about/#company"><img src="<?php echo get_template_directory_uri(); ?>/common/images/gnavi08_off.png" alt="運営会社情報"></a></li>
<li><a href="http://s-zaiko.com/kouji/inquiry"><img src="<?php echo get_template_directory_uri(); ?>/common/images/gnavi09_off.png" alt="お問い合わせ"></a></li>
</ul></div>