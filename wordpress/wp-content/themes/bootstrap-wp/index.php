<!DOCTYPE html>
<html <?php language_attributes(); ?>

<head>
  <?php get_header(); ?>
</head>

<body>
  <!-- Navigation -->
  <?php get_template_part('template-parts/header-nav'); ?>

  <!-- Page Header -->
  <header class="masthead"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>
              <?php bloginfo('name'); ?>
            </h1>
            <span class="subheading"><?php bloginfo('description'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
        <div class="post-preview">
          <a href="<?php the_permalink(); ?>">
            <h2 class="post-title">
              <?php the_title(); ?>
            </h2>
            <h3 class="post-subtitle">
              <?php the_excerpt() ?>
            </h3>
          </a>
          <p class="post-meta">Posted by
            <?php the_author(); ?>
            on <?php echo esc_html(the_time(get_option('date_format'))); ?>
          </p>
        </div>
        <hr>
        <?php endwhile; ?>

        <!-- Pager -->
        <div class="clearfix">
          <?php
            $link_previous_html = get_previous_posts_link('&larr; Newer Posts');
            // get_previous_posts_linkで取得できるaタグにはclassがないので付与する
            $link_previous_html = str_replace('<a', '<a class="btn btn-primary float-left"', $link_previous_html);
            echo $link_previous_html;
          ?>

          <?php
            $link_next_html = get_next_posts_link('Older Posts &rarr;');
            // get_next_posts_linkで取得できるaタグにはclassがないので付与する
            $link_next_html = str_replace('<a', '<a class="btn btn-primary float-right"', $link_next_html);
            echo $link_next_html;
          ?>
        </div>

        <?php else: ?>
        <p>Not Found Articles.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <?php get_template_part('template-parts/footer-buttons'); ?>

  <?php get_footer(); ?>
</body>

</html>