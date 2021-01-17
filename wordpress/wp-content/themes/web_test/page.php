<?php get_header(); ?>

<div id="contents">
  <div id="conL">
    <h2><?php the_title(); ?></h2>

    <?php if (have_posts()): while (have_posts()): the_post();?>

    <?php the_content(); ?>

    <?php endwhile; endif; ?>


    <a href="<?php home_url(); ?>/contact"><button class="btn1">お問い合わせ</button></a>
  </div><!-- /#conL -->

  <div id="conR">
    <div class="submenu">
        <h3>事業内容</h3>
        <h4>ネット事業</h4>
        <ul>
            <li><a href="<?php home_url(); ?>/service#s1">ホームページ制作</a></li>
            <li><a href="<?php home_url(); ?>/service#s2">広告代理</a></li>

        </ul>
    </div><!-- /.submenu -->

    <div class="bnrR">
      <ul>
          <li><a href="<?php home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bnr_r.jpg" alt="" /></a></li>
          <li><a href="<?php home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bnr_r.jpg" alt="" /></a></li>
      </ul>
    </div><!-- /.bnrR -->
  </div><!-- /#conR -->
</div><!-- /#contents -->

<?php get_footer();
