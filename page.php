<?php get_header(); ?>
<div id="main">
<div id="key">
<div id="keyInner">
<img src="<?php echo get_template_directory_uri(); ?>/common/images/key01.jpg" alt="キービジュアル" id="mainImg">

<div class="keyRight">
<div class="keyRightBox">
<img src="<?php echo get_template_directory_uri(); ?>/common/images/key_img01.jpg" alt="">
<p><a href="http://s-zaiko.com/kouji/?s=">施工業者を選ぶ</a></p>
<span>リフォーム箇所・住所から検索</span>
</div>

<div class="keyRightBox">
<img src="<?php echo get_template_directory_uri(); ?>/common/images/key_img02.jpg" alt="">
<p><a href="http://s-zaiko.com/kouji/kameiten">加盟店募集</a></p>
<span>ご登録はこちらから</span>
</div>

<div class="keyRightBox mb_0">
<img src="<?php echo get_template_directory_uri(); ?>/common/images/key_img03.jpg" alt="">
<p><a href="http://s-zaiko.com/" target="_blank">財庫.com</a></p>
<span>リフォーム建材の総合検索サイト</span>
</div>

</div><!--#keyRight end-->

</div>
</div><!--#key end-->

<div id="mainCrm">

<div class="titleH2 mt_0">
<h2>リフォーム業者を探す</h2>
</div>
<form method="get" id="searchform" action="">
    <input type="hidden" name="s" id="s" value="" />
<div class="searchBoxOuter">
<table class="searchBox">
<tr>
<td>地域から選ぶ</td>
<td>
<select name="prefectures1" id="prefectures">
<option value="" checked>選択してください</option>
            	<?php 
            	global $prefs;
            	foreach ($prefs as $pref):
				?>
                <option value="<?php echo $pref ?>"><?php echo $pref ?></option>
                <?php endforeach;?>
</select>
</td>
<td>リフォーム部位から選ぶ</td>
<td>
<select name="renovation" id="renovation">
<option value="" checked>選択してください</option>
<option value="全面リフォーム">全面リフォーム</option>
<option value="間取り変更">間取り変更</option>
<option value="基礎工事">基礎工事</option>
<option value="浴室">浴室</option>
<option value="トイレ">トイレ</option>
<option value="洗面">洗面</option>
<option value="キッチン">キッチン</option>
<option value="外壁">外壁</option>
<option value="屋根">屋根</option>
<option value="エクステリア">エクステリア</option>
<option value="駐車場">駐車場</option>
<option value="バルコニー・ベランダ">バルコニー・ベランダ</option>
<option value="庭・ガーデニング">庭・ガーデニング</option>
<option value="リビング">リビング</option>
<option value="ダイニング">ダイニング</option>
<option value="LDK">LDK</option>
<option value="洋室">洋室</option>
<option value="和室">和室</option>
<option value="収納">収納</option>
<option value="窓・サッシ">窓・サッシ</option>
<option value="玄関">玄関</option>
<option value="廊下">廊下</option>
<option value="階段">階段</option>
<option value="その他">その他</option>
</select>

</td>
<td><input type="image" src="<?php echo get_template_directory_uri(); ?>/common/images/btn_kensaku.png" class="submitBtn"></td>
</tr>
</table>

</div>

</form>

<div class="bnMain"><a href="http://s-zaiko.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/bn_index01.png" alt="インターネット見積りお試しキャンペーン"></a></div>


<div class="titleH2">
<h2>地域（都道府県・市区町村）から探す</h2>
</div>

<div class="textArea">
<p>まずは都道府県をお選びください。各都道府県に店舗・事務所がある会社の一覧画面へリンクします。<br>
その後、市区町村をお選び頂くこともできます。ご自宅の近くの会社を探してみましょう。</p>
</div>

<div id="mapArea">
<p class="mapTitle">地域を選択してください</p>
<div class="preArea">
            	<?php 
            	global $prefs;
            	foreach ($prefs as $pref):
				?>
                <a href="<?php echo home_url();?>/?s=&prefectures1=<?php echo $pref;?>" value="<?php echo $pref;?>" class="map_textlink"><?php echo $pref;?></a>
                <?php endforeach;?>
</div>

<div id="mapImg">
<img alt="map" id="japan" width="486" height="410" usemap="#map" src="<?php echo get_template_directory_uri(); ?>/common/images/map_white.png">
<map name="map" id="map">
        <area shape="poly" alt="北海道" coords="319,0,482,0,479,89,367,90,318,37 " id="map_hokkaido" data-target="con1" class="modal-open"/>
				<area shape="poly" alt="東北" coords="367,97,417,105,486,120,486,148,424,223,373,222" id="map_tohoku" data-target="con2" class="modal-open"/>
				
				<area shape="poly" alt="関東" coords="353,225,486,223,486,252,429,298,367,297,363,265" id="map_kantou" data-target="con3" class="modal-open"/>
				
				<area shape="poly" alt="北陸" coords="268,184,369,185,369,223,352,224,351,265,363,290,319,290,318,243,268,211" id="map_hokuriku"  data-target="con4" class="modal-open"/>
				<area shape="poly" alt="東海" coords="298,242,319,241,321,290,363,291,373,310,413,311,412,338,275,338,275,292,295,291" id="map_tokai" data-target="con5" class="modal-open"/>
				
				<area shape="poly" alt="関西" coords="205,228,293,228,292,291,274,292,272,338,240,337,239,299,207,298" id="map_kansai" data-target="con6" class="modal-open"/>
				
				<area shape="poly" alt="中国" coords="100,233,190,233,205,266,207,298,134,298,100,261" data-target="con7" class="modal-open" id="map_chugoku" />
				
				<area shape="poly" alt="四国" coords="145,309,227,310,223,352,283,352,283,379,193,378,144,356" data-target="con8" class="modal-open" id="map_shikoku" />
				<area shape="poly" alt="九州" coords="0,265,90,264,127,286,128,369,110,377,79,371,64,320,0,289" data-target="con9" class="modal-open" id="map_kyushu" />
				<area shape="poly" alt="沖縄" coords="26,340,49,341,50,382,112,383,112,410,21,410" data-target="con10" class="modal-open" id="map_okinawa" />
        
    </map>
		
</div>





</div><!--#mapArea-->
<div class="postListOuter">

<div class="postList">
<div class="postListTitle"><span class="icon_title cat01"></span>
<h2>全面（全面リフォーム、間取り変更、基礎工事）</h2><span class="title-arrow"></span>

</div>
<h3>都心リフォームを中心とした豊富な実績と高品質の仕上がり</h3>

<div class="imgBox"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sample_img01.jpg" alt=""></div>

<div class="postListText">
<p>水まわりリフォームをご希望の方は、都心リフォームの実績が豊富なアセットフォームへお任せください！<br>
都心特有の狭い空間や複雑な構造でも、お客様のご要望を親身にうかがった上で、コンパクトで開放感のあるこだわりのリフォームプランをご提案します。<br>
例えば奥様の利用が多いキッチンでは、女性店長の女性独自の視点よるご提案も可能です。</p></div>
<a href="<?php echo home_url();?>/?s=&renovation[]=全面リフォーム&renovation[]=間取り変更&renovation[]=基礎工事" class="moreBtn">詳しくはこちら→</a>
</div><!--postList end-->

<div class="postList">
<div class="postListTitle"><span class="icon_title cat02"></span>
<h2>水まわり（浴室、トイレ、洗面、キッチン）</h2><span class="title-arrow"></span>
</div>
<h3>都心リフォームを中心とした豊富な実績と高品質の仕上がり</h3>

<div class="imgBox"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sample_img01.jpg" alt=""></div>

<div class="postListText">
<p>水まわりリフォームをご希望の方は、都心リフォームの実績が豊富なアセットフォームへお任せください！<br>
都心特有の狭い空間や複雑な構造でも、お客様のご要望を親身にうかがった上で、コンパクトで開放感のあるこだわりのリフォームプランをご提案します。<br>
例えば奥様の利用が多いキッチンでは、女性店長の女性独自の視点よるご提案も可能です。</p></div>
<a href="<?php echo home_url();?>/?s=&renovation[]=浴室&renovation[]=トイレ&renovation[]=洗面&renovation[]=キッチン" class="moreBtn">詳しくはこちら→</a>
</div><!--postList end-->

<div class="postList">
<div class="postListTitle"><span class="icon_title cat04"></span>
<h2>外まわり（外壁、屋根、エクステリア、駐車場、バルコニー・ベランダ、庭・ガーデニング）</h2><span class="title-arrow"></span>
</div>
<h3>個性的で長持ちな施工</h3>
<div class="imgBox"><img src="<?php echo get_template_directory_uri(); ?>/common/sample-img/fotolia_55001356.jpg" alt=""></div>
<div class="postListText">
<p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p></div>
<a href="<?php echo home_url();?>/?s=&renovation[]=外壁&renovation[]=屋根&renovation[]=エクステリア&renovation[]=駐車場&renovation[]=バルコニー・ベランダ&renovation[]=庭・ガーデニング" class="moreBtn">詳しくはこちら→</a>
</div><!--postList end-->

<div class="postList">
<div class="postListTitle"><span class="icon_title cat03"></span>
<h2>居室（リビング、ダイニング、LDK、洋室、和室）</h2><span class="title-arrow"></span>
</div>
<h3>新築の様な仕上がり</h3>
<div class="imgBox"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sample_img01.jpg" alt=""></div>
<div class="postListText">
<p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p></div>
<a href="<?php echo home_url();?>/?s=&renovation[]=リビング&renovation[]=ダイニング&renovation[]=LDK&renovation[]=洋室&renovation[]=和室" class="moreBtn">詳しくはこちら→</a>
</div><!--postList end-->

<div class="postList">
<div class="postListTitle"><span class="icon_title cat03"></span>
<h2>その他（収納、窓・サッシ、玄関、廊下、階段、その他）</h2><span class="title-arrow"></span>
</div>
<h3>個性的で長持ちな施工</h3>
<div class="imgBox"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sample_img01.jpg" alt=""></div>
<div class="postListText">
<p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p></div>
<a href="<?php echo home_url();?>/?s=&renovation[]=収納&renovation[]=窓・さっし&renovation[]=玄関&renovation[]=廊下&renovation[]=階段&renovation[]=その他" class="moreBtn">詳しくはこちら→</a>
</div><!--postList end-->

</div><!--postListOuter end-->



<div id="newsArea">
<h2>新着情報</h2>

<div id="viewArea">
<table class="newsTable">
<tr>
<th>2014/12/24</th><td><span class="orange">お知らせ</span></td><td><a href="#">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</a></td>
</tr>
<tr>
<th>2014/12/24</th><td><span class="orange">お知らせ</span></td><td><a href="#">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</a></td>
</tr>
<tr>
<th>2014/12/24</th><td><span class="orange">お知らせ</span></td><td><a href="#">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</a></td>
</tr>
<tr>
<th>2014/12/24</th><td><span class="orange">お知らせ</span></td><td><a href="#">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</a></td>
</tr>
<tr>
<th>2014/12/24</th><td><span class="orange">お知らせ</span></td><td><a href="#">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</a></td>
</tr>



</table>

</div>


</div><!-- #newsArea end -->





</div><!--#mainCrm end-->

<?php get_sidebar("left"); ?>
</div><!--main end-->
<?php get_template_part('map_window');?>
<?php get_footer(); ?>