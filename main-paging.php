<?php
$big = 9999999;
$args_page = array(
	    		'base' =>  @add_query_arg('paged','%#%'),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
	    		'prev_text' => __('Předchozí'),
				'next_text' => __('Další')
);
?>
<div id="paging">
	<?php echo(paginate_links($args_page)) ?>
</div>


