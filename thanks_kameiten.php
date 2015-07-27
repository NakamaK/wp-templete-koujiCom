<?php
/*
Template Name: 送信完了ページ(加盟店登録)
*/
?>

<?php get_header(); ?>
<?php get_template_part('bread');?>
<div id="main">
	<div id="mainCrm">
		
		<div class="titleH2 greenType mt_0">
			<h2>加盟店登録</h2>
			<span class="icon-arrow-green"></span> </div>
		
		<p>この度は加盟店登録へお申し込みいただきありがとうございます。</p>
		
		<div class="bnMain mt_40"><a href="http://s-zaiko.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/bn_index01.png" alt="インターネット見積りお試しキャンペーン"></a></div>
	</div>
	<!--#mainCrm end-->

<?php get_sidebar("left"); ?>
		
</div><!--main end-->
<?php get_footer(); ?>