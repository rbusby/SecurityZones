<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="entry-content">
      <?php
        if ( has_post_thumbnail() ) :
            the_post_thumbnail('blog');
        else : 

        endif;
      ?>
      <br>
      <br>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <!--   -->
  </article>
<?php endwhile; ?>
