<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post(); 
?>

			<div class="post">
				<?php get_template_part('post', 'allInfo') ?>			
			</div>

<?php
		}
		get_template_part('main', 'paging');
	}
?>