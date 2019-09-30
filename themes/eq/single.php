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
		<div class="col-md-8">
			<?php get_template_part('templates/content-single', get_post_type()); ?>
		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar('sidebar-primary'); ?>
		</div>
	</div>
</div>