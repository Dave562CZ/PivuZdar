<?php get_header()?>

<!--BEGIN WP LOOP-->
<div id="content">
<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post(); 
?>
		
			<div class="post">
				<?php get_template_part('loop', 'post') ?>			
			</div>

<?php
		}
		get_template_part('main', 'paging');
	}
?>
</div>
<!--END WP LOOP-->

<?php get_sidebar()?>
<?php get_footer()?>