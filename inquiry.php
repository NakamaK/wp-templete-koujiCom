<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>
<?php get_template_part('bread');?>

<div id="main">
	<div id="mainCrm">
	
	
		<div class="titleH2 greenType mt_0">
			<h2>当サイトへのお問い合わせ</h2>
			<span class="icon-arrow-green"></span> </div>
		
		<p>こちらのフォームからメールで、お問い合わせできます。<br>必要事項、お問い合わせ内容をご入力の上、送信ボタンをクリックしてください。<br>※ご記入漏れがありますと、連絡が取れず対応できない場合がございますのでご注意ください。<br>※フリガナは全角カタカナで入力ください。</p>
		
		<form id="mailformpro" action="<?php echo get_template_directory_uri(); ?>/common/cgi-bin/mailformpro/mailformpro.cgi" method="POST">
		<div class="companyTable inquiryForm">
		<table class="detailTable">
<tr>

<th>お名前<span class="must">必須</span></th><td class="name"><input type="text" name="お名前" data-kana="フリガナ" size="35" maxlength="500" required/></td>
</tr>
<tr>
<th>フリガナ<span class="must">必須</span></th><td class="name"><input type="text" name="フリガナ" size="35" data-charcheck="kana" maxlength="500" required/></td>
</tr>

<tr>
<th>住所<span class="must">必須</span></th><td class="jusho">
<ul>
<li>
<input type="hidden" name="ご住所" data-join="〒+郵便番号+\n+都道府県+市区町村+丁目番地" value="" />
								〒<input type="text" name="郵便番号" size="10" required data-address="都道府県,市区町村,市区町村" maxlength="500"/>
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
									<li><span>市区町村</span> <input type="text" name="市区町村" class="test" required size="70" maxlength="500"/></li>
									<li><span>丁目番地</span> <input type="text" name="丁目番地" required size="70" maxlength="500" /></li>
								</ul>
								</td>
</tr>
<tr>
<th>メールアドレス<span class="must">必須</span></th><td class="mailArea"><input type="email" data-type="email" name="email" size="70" maxlength="500" required /></td>
</tr>
<tr>
<th class="last">お問い合わせ内容<span class="must">必須</span></th><td class="last naiyou"><textarea name="お問い合わせ内容" class="change_textarea" rows="20" cols="74" wrap="hard" maxlength="3000" required ></textarea></td>
</tr>
</table>

</div>
<button type="submit" class="sendBtn overimg"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_contactsend.gif" alt=""></button>

</form>
<script type="text/javascript" id="mfpjs" src="<?php echo get_template_directory_uri(); ?>/common/cgi-bin/mailformpro/mailformpro.cgi" charset="UTF-8"></script>
		<div class="bnMain mt_40"><a href="http://s-zaiko.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/bn_index01.png" alt="インターネット見積りお試しキャンペーン"></a></div>
	</div>
	<!--#mainCrm end-->

<?php get_sidebar("left"); ?>
		
</div><!--main end-->
<?php get_footer(); ?>