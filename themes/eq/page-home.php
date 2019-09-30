<div class="home-hero" style="background-image: url('<?php echo the_field('home_hero_image'); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-2"></div>
      <div class="col-lg-6 col-md-8">
        <h2><?php echo the_field('home_hero_title'); ?></h2>
        <p><?php echo the_field('home_hero_text'); ?></p>
        <?php if( have_rows('home_hero_buttons') ): ?>

          <ul class="list-inline list-unstyled buttons">

          <?php while( have_rows('home_hero_buttons') ): the_row(); 

            // vars
            $text = get_sub_field('button_text');
            $link = get_sub_field('button_link');

            ?>

            <li class="slide">

              <a href="<?php echo $link; ?>" class="btn btn-primary"><?php echo $text; ?></a>

            </li>

          <?php endwhile; ?>

          </ul>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class="security-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <div class="fonticon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h2><?php the_field('section_one_title'); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <?php the_field('section_one_left_content'); ?>
      </div>
      <div class="col-md-5">
        <?php the_field('section_one_right_content'); ?>
      </div>
    </div>
  </div>
</div>

<div class="image-container" style="background-image: url('https://images.unsplash.com/photo-1529101091764-c3526daf38fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2091&q=80');"></div>

<div class="content-split">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h2><span class="icon"><?php the_field('section_two_left_icon'); ?></span>&nbsp;&nbsp;<?php the_field('section_two_left_title'); ?></h2>
        <p><?php the_field('section_two_left_text'); ?></p>
        <a href="<?php the_field('section_two_left_link'); ?>" class="btn btn-primary">Read more</a>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-5">
        <h2><span class="icon"><?php the_field('section_two_right_icon'); ?></span>&nbsp;&nbsp;<?php the_field('section_two_right_title'); ?></h2>
        <p><?php the_field('section_two_right_text'); ?></p>
        <a href="<?php the_field('section_two_right_link'); ?>" class="btn btn-primary">Read more</a>
      </div>
    </div>
  </div>
</div>

<div class="solutions-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <h2>Prevent Cyberattacks with Real-Time Threat Intelligence</h2>
        <div class="row">
          <?php if( have_rows('spamhaus_boxes') ): ?>

          <?php while( have_rows('spamhaus_boxes') ): the_row(); 

          // vars
          $icon = get_sub_field('icon');
          $title = get_sub_field('title');
          $subtitle = get_sub_field('subtitle');
          $content = get_sub_field('content');
          $button = get_sub_field('button');

          ?>

          <div class="col-md-4">
            <a class="solutions-single" href="<?php echo $button; ?>">
              <?php echo $icon; ?>
              <h2><?php echo $title; ?></h2>
              <h3><?php echo $subtitle; ?></h3>
              <p class="column"><?php echo $content; ?></p>
              <div class="btn btn-primary">Read more</div>
            </a>
          </div>

          <?php endwhile; ?>

          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('templates/email', 'capture'); ?>