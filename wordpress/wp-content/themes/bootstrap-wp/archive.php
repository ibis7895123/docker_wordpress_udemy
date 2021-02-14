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
            <h1>Category</h1>
            <span class="subheading"><?php wp_title(''); ?></span>
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
            on <?php echo the_time(get_option('date_format')); ?>
          </p>
        </div>
        <hr>
        <?php endwhile; ?>

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
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