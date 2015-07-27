<?php while (have_posts()) : the_post(); ?>
    <?php
        // ポスト情報の取得
        $ID = $post->ID; // 投稿ID
        $title = $post->post_title; // タイトル
        $content = $post->post_content; // 投稿内容
        $slug = $post->post_name; // スラッグ
        $parent = $post->post_parent; // 親投稿の有無
        $uri = get_page_uri($ID);
    ?>
<?php endwhile; ?>
<div id="pan">
<ul>
<li class="home"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/common/images/pan_home.png" alt="ホーム"></a></li>
<li><a href="<?php print($_SERVER["REQUEST_URI"]); ?>"><p><?php echo $title ?></p></a></li>
</ul>
</div><!--#pan end-->