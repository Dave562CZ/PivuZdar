<?php get_header() ?>
<div id="content">
<?php 
	if (have_posts()) {
		while (have_posts()) {
			the_post();
?> 
			<div class="page_title">
				<?php the_title()?>
			</div>
			<div class="page_description">
				Autor: <?php the_author_posts_link() ?>,
				Přidáno: <?php the_time('d.m.Y G:i')?>
			</div>
			<div class="page_content">
				<?php the_content() ?>
			</div>
<?php 
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
	}
?>
</div>
<?php get_sidebar() ?>
<?php get_footer() ?>