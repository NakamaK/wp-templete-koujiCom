<?php
  // 現在の投稿のカスタムフィールド情報を全て取得
  $custom_fields = get_post_custom();
  //ID取得
  $id = get_the_ID();
?>

<div class="ctaArea">
<p class="times">平日9:00~19:00</p>
<p class="telnum">03-6379-8088</p>
<a href="http://s-zaiko.com/kouji/contactform?selectCheck[]=<?php echo $id ?>" class="inquiryBtn"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_inquiry.png" alt="この施工業者に問い合わせる"></a>
</div>

<div id="mainCrm">

<div class="titleH2 mt_0">
<h2>リフォーム業者を探す</h2>

</div>
<form method="get" id="searchform" action="http://s-zaiko.com/kouji/">
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


</div><!--#mainCrm end-->







<div id="sunCrm">
<div class="bn"><a href="http://s-zaiko.com/kouji/about/#guide"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_side_hajimete.png" alt="初めてのお客様へ"></a></div>



<div class="bn"><a href="http://s-zaiko.com/kouji/kameiten"><img src="<?php echo get_template_directory_uri(); ?>/common/images/bn_side_kamei.png" alt="加盟店登録はコチラ"></a></div>

</div><!--#subCrm end-->


