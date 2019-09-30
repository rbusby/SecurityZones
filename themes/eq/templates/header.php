<a href="#" data-toggle="collapse" data-target=".navbar-collapse" class="mobile-trigger"><i class="fas fa-bars"></i> </a>

<div class="mobile">
  <div class="navbar-collapse collapse">
    <nav class="nav-primary" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav']);
        endif;
      ?>
      <?php
              if (has_nav_menu('top_navigation')) :
                wp_nav_menu(['theme_location' => 'top_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav']);
              endif;
            ?>
    </nav>
  </div>
</div>

<div class="top-nav hidden-xs">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="clearfix">
          <div class="pull-left">
            <a href="mailto:info@securityzones.net">Email us <i class="fas fa-envelope"></i></a>
          </div>
          <div class="pull-right">
            <?php
              if (has_nav_menu('top_navigation')) :
                wp_nav_menu(['theme_location' => 'top_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'list-inline list-unstyled']);
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-3">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>"></a>
      </div>
      <div class="col-md-8 col-sm-9">
        <div class="menu-container">
          <nav class="nav-primary" role="navigation">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav list-unstyled']);
              endif;
            ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>