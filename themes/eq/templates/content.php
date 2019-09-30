<div class="row">
	<div class="col-md-11">
		<div class="single-blog-container">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
		</div>
	</div>
</div>