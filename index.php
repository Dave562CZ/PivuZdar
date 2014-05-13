<?php get_header()?>

<!--BEGIN WP LOOP-->
<div id="content">
<?php 
// 	get_template_part("loop", "allPosts");
	get_template_part("loop", "2categories");		
?>
</div>
<!--END WP LOOP-->

<?php get_sidebar()?>
<?php get_footer()?>