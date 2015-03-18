<?php use Roots\Sage\Nav; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if(!is_front_page()): ?>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="/wordpress/wp-content/themes/roots-and-vines-wp-theme/dist/images/logo-sm.png" alt="Roots and Vines Fest Logo" class="img-responsive mainlogo"></a>
      <?php endif; ?>
    </div>

    <nav class="collapse navbar-collapse <?php if(is_front_page()){echo "navbar-center";} ?>" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
