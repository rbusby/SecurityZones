<?php

if ( !function_exists('gw_pagination')) 
{

	function gw_pagination($custom_query) 
	{
		if ( !$current_page = get_query_var( 'paged' ) )
		{
			$current_page = 1;
		}

		$permalinks = get_option( 'permalink_structure' );

		if( is_front_page() )
		{
			$format = empty( $permalinks ) ? '?paged=%#%' : 'page/%#%/';
		} 
		else 
		{
			$format = empty( $permalinks ) || is_search() ? '&paged=%#%' : 'page/%#%/';
		}

		$big = 999999999; // need an unlikely integer

		$pagination = paginate_links( 
			array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => $format,
				'current' => $current_page,
				'total' => $custom_query->max_num_pages,
				'mid_size' => '4',
				'type' => 'list',
				'next_text' => __( 'Next' ),
				'prev_text' => __( 'Previous' )
			) 
		);

		$pagination = explode( "\n", $pagination );
		$pagination_mod = array();

		foreach ( $pagination as $item )
		{
			( preg_match( '/<ul class=\'page-numbers\'>/i', $item ) ) ? $item = str_replace( '<ul class=\'page-numbers\'>', '<ul class=\'pagination\'>', $item ) : $item;
			( preg_match( '/class="prev/i', $item ) ) ? $item = str_replace( '<li', '<li class="pagination-prev"', $item ) : $item;
			( preg_match( '/class="next/i', $item ) ) ? $item = str_replace( '<li', '<li class="pagination-next"', $item ) : $item;
			( preg_match( '/page-numbers/i', $item ) ) ? $item = str_replace( 'page-numbers', 'page-numbers pagenav', $item ) : $item;
			$pagination_mod[] .= $item;
		}
?>

		<div class="pagination-wrapper">
			<?php 
				foreach( $pagination_mod as $page )
				{
					echo $page;
				}
			?>
			<!-- <p class="counter">
				<?php printf( __( 'Page %1$s of %2$s' ), $current_page, $custom_query->max_num_pages ); ?>
			</p> -->
		</div>
<?php 
	}
}