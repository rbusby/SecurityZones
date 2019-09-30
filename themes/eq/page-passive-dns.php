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
				
				<h2>People who use Passive DNS</h2>
				<div class="title-content">

					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php if( have_rows('title_content') ): ?>
					<?php $acc = 0; ?>
					<?php while( have_rows('title_content') ): the_row(); 

					// vars
					$title = get_sub_field('title');
					$content = get_sub_field('content');

					?>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<div class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $acc; ?>" aria-expanded="true" aria-controls="collapse<?php echo $acc; ?>">
									<?php echo $title; ?>
								</a>
							</div>
						</div>
						<div id="collapse<?php echo $acc; ?>" class="panel-collapse collapse <?php if ($acc == 0): ?>in<?php endif ?>" role="tabpanel" aria-labelledby="heading<?php echo $acc; ?>">
							<div class="panel-body">
								<?php echo $content; ?>
							</div>
						</div>
					</div>

					<?php $acc++; ?>
					<?php endwhile; ?>

					<?php endif; ?>
					</div>
				</div>

				<?php the_field('additional_content'); ?>
			</div>

		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar('sidebar-primary'); ?>
		</div>
	</div>
</div>

<?php get_template_part('templates/email', 'capture'); ?>