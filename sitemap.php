<?php
/*
Template Name: サイトマップ
*/
?>

<?php get_header(); ?>
<?php get_template_part('bread');?>
<div id="main">
	<div id="mainCrm">
	
	
	<div class="titleH2 greenType mt_0" >
			<h2>サイトマップ</h2>
			<span class="icon-arrow-green"></span> </div>
			
			<ul class="sitemapList mt_40">
			<li><a href="http://s-zaiko.com/kouji">ホーム</a></li>
				<li><a href="http://s-zaiko.com/kouji/about/#about">当サイトについて</a></li>
				<li><a href="http://s-zaiko.com/kouji/?s=">施工業者一覧</a></li>
				<li><a href="http://s-zaiko.com/kouji/case">施工事例</a></li>
				<li><a href="http://s-zaiko.com/kouji/about/#qa">よくある質問</a></li>
				<li><a href="http://s-zaiko.com/kouji/about/#guide">ご利用ガイド</a></li>
				<li><a href="http://s-zaiko.com/kouji/about/#company">運営会社情報</a></li>
				<li><a href="http://s-zaiko.com/kouji/inquiry">お問い合わせ</a></li>
				<li><a href="http://s-zaiko.com/kouji/kameiten">加盟店登録</a></li>
				<li><a href="http://s-zaiko.com/kouji/kiyaku">利用規約</a></li>
				<li><a href="http://s-zaiko.com/kouji/privacy">プライバシーポリシー</a></li>
			
			</ul>
			
			<p>■リフォーム個所から探す</p>
			<ul class="sitemapList">
			<li><a href="<?php echo home_url(); ?>/?s=&renovation[]=全面リフォーム&renovation[]=間取り変更&renovation[]=基礎工事">全面</a></li>
			<li><a href="<?php echo home_url(); ?>/?s=&renovation=浴室&renovation[]=トイレ&renovation[]=洗面&renovation[]=キッチン">水まわり</a></li>
			<li><a href="<?php echo home_url(); ?>/?s=&renovation=外壁&renovation[]=屋根&renovation[]=エクステリア&renovation[]=駐車場&renovation[]=バルコニー・ベランダ&renovation[]=庭・ガーデニング">外まわり</a></li>
			<li><a href="<?php echo home_url(); ?>/?s=&renovation[]=リビング&renovation[]=ダイニング&renovation[]=LDK&renovation[]=洋室&renovation[]=和室">居室</a></li>
			<li><a href="<?php echo home_url(); ?>/?s=&renovation[]=収納&renovation[]=窓・サッシ&renovation[]=玄関&renovation[]=廊下&renovation[]=階段&renovation[]=その他">その他</a></li>
			
			</ul>
		<div class="bnMain mt_40"><a href="http://s-zaiko.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/bn_index01.png" alt="インターネット見積りお試しキャンペーン"></a></div>
	</div>
	<!--#mainCrm end-->

<?php get_sidebar("left"); ?>
		
</div><!--main end-->
<?php get_footer(); ?>