<?php wp_body_open(); ?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>

    <?php
    // メニューオブジェクトを取得
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    // メニューのitemsを取得
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php foreach ($menu_items as $menu_item): ?>
        <li class="nav-item">
          <a class="nav-link"
            href="<?php echo esc_url($menu_item->url); ?>">
            <?php echo esc_html($menu_item->title); ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>