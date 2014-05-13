<?php get_header() ?>
<div id="content">
<?php 
if (have_posts()) {
	while (have_posts()) {
		the_post();
?>
		<div class="title"><?php the_title() ?></div>
		<div class="content"><?php the_content() ?></div>
		<?php get_template_part("post", "rubrics"); ?>
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