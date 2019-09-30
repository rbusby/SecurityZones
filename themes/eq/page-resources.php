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
				<h2>Download our Resources</h2>
	            <?php
	                $args = array( 'post_type' => 'resources', 'posts_per_page' => -1  );
	                $loop = new WP_Query( $args );
	                while ( $loop->have_posts() ) : $loop->the_post(); ?>
	                    <div class="resource-container">
	                    	<div class="row">
	                    		<div class="col-md-8">
	                    			<div class="title"><?php the_title(); ?></div>
	                    		</div>
	                    		<div class="col-md-4">
	                    			<a href="<?php the_field('file'); ?>" class="btn btn-primary" download>Download File</a>
	                    		</div>
	                    	</div>
	                    </div>
	                <?php endwhile;
	                wp_reset_postdata();
	            ?>
			</div>

		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar('sidebar-primary'); ?>
		</div>
	</div>
</div>

<?php get_template_part('templates/email', 'capture'); ?>