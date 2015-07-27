<?php
/*
Template Name: 加盟店登録
*/
?>

<?php get_header(); ?>
<?php get_template_part('bread');?>

<div id="main">
	<div id="mainCrm">
	
		<div class="titleH2 greenType mt_0">
			<h2>リフォーム業者登録</h2>
			<span class="icon-arrow-green"></span> </div>
		
		<p>リフォーム業者登録についてのお問い合わせは、こちらのフォームからお願い致します。</p>
<p>必要事項、お問い合わせ内容をご入力の上、送信ボタンをクリックしてください。</p>
<p>※ご記入漏れがありますと、連絡が取れず対応できない場合がございますのでご注意ください。</p>
<p>※フリガナは全角カタカナで入力ください。</p>
		
		<form id="mailformpro" action="<?php echo get_template_directory_uri(); ?>/common/cgi-bin/mailformpro/mailformpro_kamei.cgi" method="POST">
		<div class="companyTable inquiryForm">
		<table class="detailTable">
<tr>

<th>貴店名<span class="must">必須</span></th><td class="name"><input type="text" name="貴店名" data-kana="貴店名(フリガナ)" size="45" maxlength="500" required /></td>
</tr>
<tr>

<th>貴店名(フリガナ)<span class="must">必須</span></th><td class="name"><input type="text" name="貴店名(フリガナ)" size="45" data-charcheck="kana" maxlength="500" required /></td>
</tr>

<tr>

<th>対応可能施工内容</th>
<td>
<label><input type="checkbox" name="対応可能施工内容" value="全面リフォーム" /> 全面リフォーム</label>
<label><input type="checkbox" name="対応可能施工内容" value="間取り変更" /> 間取り変更</label>
<label><input type="checkbox" name="対応可能施工内容" value="基礎工事" /> 基礎工事</label>
<label><input type="checkbox" name="対応可能施工内容" value="浴室" /> 浴室</label>
<label><input type="checkbox" name="対応可能施工内容" value="トイレ" /> トイレ</label>
<label><input type="checkbox" name="対応可能施工内容" value="洗面" /> 洗面</label>
<label><input type="checkbox" name="対応可能施工内容" value="キッチン" /> キッチン</label>
<label><input type="checkbox" name="対応可能施工内容" value="外壁" /> 外壁</label>
<label><input type="checkbox" name="対応可能施工内容" value="屋根" /> 屋根</label>
<label><input type="checkbox" name="対応可能施工内容" value="エクステリア" /> エクステリア</label>
<label><input type="checkbox" name="対応可能施工内容" value="駐車場" /> 駐車場</label>
<label><input type="checkbox" name="対応可能施工内容" value="バルコニー・ベランダ" /> バルコニー・ベランダ</label>
<label><input type="checkbox" name="対応可能施工内容" value="庭・ガーデニング" /> 庭・ガーデニング</label>
<label><input type="checkbox" name="対応可能施工内容" value="ダイニング" /> ダイニング</label>
<label><input type="checkbox" name="対応可能施工内容" value="LDK" /> LDK</label>
<label><input type="checkbox" name="対応可能施工内容" value="浴室" /> 浴室</label>
<label><input type="checkbox" name="対応可能施工内容" value="和室" /> 和室</label>
<label><input type="checkbox" name="対応可能施工内容" value="収納" /> 収納</label>
<label><input type="checkbox" name="対応可能施工内容" value="窓・さっし" /> 窓・さっし</label>
<label><input type="checkbox" name="対応可能施工内容" value="玄関" /> 玄関</label>
<label><input type="checkbox" name="対応可能施工内容" value="廊下" /> 廊下</label>
<label><input type="checkbox" name="対応可能施工内容" value="階段" /> 階段</label>
<label><input type="checkbox" name="対応可能施工内容" value="その他" /> その他</label>
</td>
</tr>


<tr>
<th>お名前<span class="must">必須</span></th><td class="name"><input type="text" name="お名前" data-kana="フリガナ" size="35" maxlength="500" required /></td>
</tr>
<tr>
<th>フリガナ<span class="must">必須</span></th><td class="name"><input type="text" name="フリガナ" size="35" data-charcheck="kana" maxlength="500" required /></td>
</tr>

<tr>
<th>会社住所<span class="must">必須</span></th><td class="jusho">
<ul>
<li>
<input type="hidden" name="ご住所" data-join="〒+郵便番号+\n+都道府県+市区町村+丁目番地" value="" />
								〒<input type="text" name="郵便番号" size="10" maxlength="500" required data-address="都道府県,市区町村,市区町村" />
								<a href="http://www.post.japanpost.jp/zipcode/" target="_blank">郵便番号を調べる</a></li>
								
								
									<li>
										<span>都道府県</span>
										<select name="都道府県" required="required">
											<option value="" selected="selected">【選択して下さい】</option>
											<optgroup label="北海道・東北地方">
												<option value="北海道">北海道</option>
												<option value="青森県">青森県</option>
												<option value="岩手県">岩手県</option>
												<option value="秋田県">秋田県</option>
												<option value="宮城県">宮城県</option>
												<option value="山形県">山形県</option>
												<option value="福島県">福島県</option>
											</optgroup>
											<optgroup label="関東地方">
												<option value="栃木県">栃木県</option>
												<option value="群馬県">群馬県</option>
												<option value="茨城県">茨城県</option>
												<option value="埼玉県">埼玉県</option>
												<option value="東京都">東京都</option>
												<option value="千葉県">千葉県</option>
												<option value="神奈川県">神奈川県</option>
											</optgroup>
											<optgroup label="中部地方">
												<option value="山梨県">山梨県</option>
												<option value="長野県">長野県</option>
												<option value="新潟県">新潟県</option>
												<option value="富山県">富山県</option>
												<option value="石川県">石川県</option>
												<option value="福井県">福井県</option>
												<option value="静岡県">静岡県</option>
												<option value="岐阜県">岐阜県</option>
												<option value="愛知県">愛知県</option>
											</optgroup>
											<optgroup label="近畿地方">
												<option value="三重県">三重県</option>
												<option value="滋賀県">滋賀県</option>
												<option value="京都府">京都府</option>
												<option value="大阪府">大阪府</option>
												<option value="兵庫県">兵庫県</option>
												<option value="奈良県">奈良県</option>
												<option value="和歌山県">和歌山県</option>
											</optgroup>
											<optgroup label="四国地方">
												<option value="徳島県">徳島県</option>
												<option value="香川県">香川県</option>
												<option value="愛媛県">愛媛県</option>
												<option value="高知県">高知県</option>
											</optgroup>
											<optgroup label="中国地方">
												<option value="鳥取県">鳥取県</option>
												<option value="島根県">島根県</option>
												<option value="岡山県">岡山県</option>
												<option value="広島県">広島県</option>
												<option value="山口県">山口県</option>
											</optgroup>
											<optgroup label="九州・沖縄地方">
												<option value="福岡県">福岡県</option>
												<option value="佐賀県">佐賀県</option>
												<option value="長崎県">長崎県</option>
												<option value="大分県">大分県</option>
												<option value="熊本県">熊本県</option>
												<option value="宮崎県">宮崎県</option>
												<option value="鹿児島県">鹿児島県</option>
												<option value="沖縄県">沖縄県</option>
											</optgroup>
										</select>
									</li>
									<li><span>市区町村</span> <input type="text" name="市区町村" class="test" maxlength="500" required size="70" /></li>
									<li><span>丁目番地</span> <input type="text" name="丁目番地" maxlength="500" required size="70" /></li>
								</ul>
								</td>
</tr>
<tr>
<th>お電話番号<span class="must">必須</span></th><td class="mailArea"><input type="tel" data-type="tel" name="電話番号" size="35" data-min="9" maxlength="500" required />

</td>
</tr>
<tr>
<th>メールアドレス<span class="must">必須</span></th><td class="mailArea"><input type="email" data-type="email" name="email" size="70" maxlength="500" required /></td>
</tr>
<tr>
<th class="last">お問い合わせ内容やご希望条件の詳細を出来るだけ詳しくお書きください。(1000文字以内)<span class="must">必須</span></th><td class="last naiyou"><textarea name="内容" class="change_textarea" rows="20" cols="74" wrap="hard" maxlength="3000" required></textarea></td>
</tr>
</table>

</div>
<button type="submit" class="sendBtn overimg"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_contactsend.gif" alt=""></button>

</form>
<script type="text/javascript" id="mfpjs" src="<?php echo get_template_directory_uri(); ?>/common/cgi-bin/mailformpro/mailformpro_kamei.cgi" charset="UTF-8"></script>

		<div class="bnMain mt_40"><a href="http://s-zaiko.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/bn_index01.png" alt="インターネット見積りお試しキャンペーン"></a></div>
	</div>
	<!--#mainCrm end-->

<?php get_sidebar("left"); ?>
		
</div><!--main end-->
<?php get_footer(); ?>