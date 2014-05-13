<div class="post_title">
	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
	<?php the_title() ?></a>
</div>

<div class="post_description">
	Autor: <?php the_author_posts_link() ?>,
	Přidáno: <?php the_time('d.m.Y G:i')?>
</div>

<div class="post_excerpt">	
	<p>
		<?php echo get_the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">Přečíst více</a>
	</p>
</div>

<div class="post_rubrics">
	<?php get_template_part('post', 'rubrics')?>
</div>	
<div class="comment_link">
	<?php comments_popup_link('Žádný komentář ', '1 Komentář', '% komentářů'); ?>
</div>
