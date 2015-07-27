<?php get_header(); ?>
<?php
  // 現在の投稿のカスタムフィールド情報を全て取得
  $custom_fields = get_post_custom();

  // []内はカスタムフィールドのスラグ、フィールドの値を変数に格納する
  $image = $custom_fields['wpcf-image'];

  $company_name = $custom_fields['wpcf-company_name'];

  $prefectures = $custom_fields['wpcf-prefectures'];

  $home = $custom_fields['wpcf-home'];

  $delegate = $custom_fields['wpcf-delegate'];

  $telephone = $custom_fields['wpcf-telephone'];

  $url = $custom_fields['wpcf-url'];

  $mail = $custom_fields['wpcf-mail'];

  $rep = $custom_fields['wpcf-rep'];

  $company_profile = $custom_fields['wpcf-company_profile'];

  $delegate_image = $custom_fields['wpcf-delegate_image'];

  $delegate_main = $custom_fields['wpcf-delegate_main'];

  $map = $custom_fields['wpcf-map'];

  $execution_sum = $custom_fields['wpcf-execution_sum'];

  $renovations = get_post_meta($post->ID, 'wpcf-renovation', true);

//施工事例の画像一覧
  $reference_image1 = $custom_fields['wpcf-reference_image1'];

  $reference_image2 = $custom_fields['wpcf-reference_image2'];

  $reference_image3 = $custom_fields['wpcf-reference_image3'];

  $reference_image4 = $custom_fields['wpcf-reference_image4'];

  $reference_image5 = $custom_fields['wpcf-reference_image5'];

  if(isset($reference_image1[0])){
    $reference_images[] = $reference_image1[0];
  }
  if(isset($reference_image2[0])){
    $reference_images[] = $reference_image2[0];
  }
  if(isset($reference_image3[0])){
    $reference_images[] = $reference_image3[0];
  }
  if(isset($reference_image4[0])){
    $reference_images[] = $reference_image4[0];
  }
  if(isset($reference_image5[0])){
    $reference_images[] = $reference_image5[0];
  }
?>
<?php get_template_part('bread');?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div id="main">
<div class="detailBox">
<h2><?php the_title(); ?></h2>
<div class="detailLeft">
  <?php if(isset($image[0])): ?>
<div class="detailImg">
<img src="<?php echo $image[0]; ?>" alt="">
</div>
  <?php endif; ?>
<div class="iconBoxArea">
<ul>
<?php foreach($renovations as $key => $renovation){ ?>
<li><?php echo $renovation[0] ?></li>
<?php };?>
</ul>
</div>
<?php if($reference_images == null): ?>

<?php else: ?>
<div id="slideArea" class="clearfix">
<div class="title_jirei">
<img src="<?php echo get_template_directory_uri(); ?>/common/images/title_jirei.png" alt="施行事例"></div>
<div class="flexslider carousel">
          <ul class="slides">
            <?php foreach($reference_images as $reference_image): ?>
            <li data-thumb="<?php echo $reference_image?>">
              <a data-lightbox="imgs" href="<?php echo $reference_image?>"><img src="<?php echo $reference_image?>"></a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
</div><!--#slideArea end-->
<p class="searchComment">画像クリックで拡大表示</p>
<?php endif; ?>
</div><!--detail Left end-->

<div class="detailRight">
<div class="detailTableArea">
<table class="detailTable">
<tr>
<th id="aaa">会社名</th><td><?php echo $company_name[0]; ?></td>
</tr>
<tr>
<th>住所</th><td><?php echo $prefectures[0]; ?><?php echo $home[0]; ?></td>
</tr>
<?php if(isset($rep[0])): ?>
<tr>
<th>担当者名</th><td><?php echo $rep[0]; ?></td>
</tr>
<?php endif; ?>
<tr>
<th>電話番号</th><td><?php echo $telephone[0]; ?></td>
</tr>
<?php if(isset($url[0])): ?>
<tr>
<th>URL</th><td><?php echo $url[0]; ?></td>
</tr>
<?php endif; ?>
<?php if(isset($mail[0])): ?>
<tr>
<th class="last">Mail</th><td class="last"><?php echo $mail[0]; ?></td>
</tr>
<?php endif; ?>
</table>
</div>
<div class="commentArea">
<h3>一言コメント</h3>
<div class="commentBox">
<p><?php echo my_excerpt(200); ?>
</p>
</div>

<?php if(isset($company_profile[0]) || isset($delegate_image[0]) || isset($delegate_main[0]) || isset($delegate[0])|| isset($map[0])|| isset($execution_sum[0])):?>
<div class="detailTableArea">
<table class="detailTable">
  <?php if(isset($company_profile[0])): ?>
<tr>
<th>会社案内</th><td >
<ul>
<li><?php echo $company_profile[0]; ?></li>
</ul>
</td>
</tr>
  <?php endif; ?>
<tr>
  <?php if(isset($delegate_image[0])): ?>
<th>代表者</th><td><div class="imgArea"><img src="<?php echo $delegate_image[0]; ?>" alt="">
  <?php endif; ?>
</div>
<div class="profArea">
  <?php if(isset($delegate[0])): ?>
<p class="name"><?php echo $delegate[0]; ?></p>
  <?php endif; ?>
  <?php if(isset($delegate_main[0])): ?>
<p><?php echo $delegate_main[0]; ?></p>
  <?php endif; ?>
</div>
</td>
</tr>
<?php if(isset($map[0])): ?>
<tr>
<th>地図</th><td>
<div class="googleMap">
<?php echo $map[0]; ?>
</div></td>
</tr>
<?php endif;?>
<?php if(isset($execution_sum[0])): ?>
<tr>
<th>施工金額</th><td >
<ul>
<li><?php echo $execution_sum[0]; ?></li>
</ul>
</td>
</tr>
<?php endif; ?>
</table>
</div>
<?php endif;?>
</div>

</div>
</div><!--detailBox end-->
<?php endwhile;endif; ?>
<?php get_template_part('footer_sub'); ?>
</div><!--main end-->
<?php get_footer(); ?>