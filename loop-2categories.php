<div id="akce">
<?php
$query_akce = new WP_Query('category_name=akce&posts_per_page=10');
while ($query_akce->have_posts()) {
	$query_akce->the_post();
?>
	<div class="post_title">
		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
			<?php the_title() ?></a>
	</div>
<?php 
}
?>
</div>
<div id="pivo">
<?php 
$query_pivo = new WP_Query('category_name=pivo&posts_per_page=10');
while ($query_pivo->have_posts()) {
	$query_pivo->the_post();
?>
	<div class="post_title">
		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
			<?php the_title() ?></a>
	</div>
<?php 
}
?>
</div>