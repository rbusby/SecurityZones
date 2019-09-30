<div class="keywords">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php the_title(); ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8" style="padding-top: 1.45em;padding-bottom: 1.45em;">

			<div class="page-content-container">
				<?php if (get_field('content_image')): ?>
					<img src="<?php the_field('content-image'); ?>" alt="">
				<?php else : ?>
				
				<?php endif ?>

				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('templates/content', 'page'); ?>
				<?php endwhile; ?>
			</div>

		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar('sidebar-primary'); ?>
		</div>
	</div>
</div>

<?php get_template_part('templates/email', 'capture'); ?>