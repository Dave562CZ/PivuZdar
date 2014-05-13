<!DOCTYPE html>
<html <?php language_attributes();?>>
	
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; 
        	charset=<?php bloginfo('charset'); ?>" />
        <meta name="description" content="<?php bloginfo('description'); ?>" />
  		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title><?php wp_title()?></title>
		
		<link rel="alternate" type="application/rss+xml" 
			title="<?php bloginfo( 'name' ); ?> RSS Feed" 
			href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head();
		define('WPLANG', 'en_US')?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" type="text/css" media="screen">
	</head>
	
	<body <?php body_class()?>>
	<?php wp_admin_bar_render()?>
	<div id="page_container">
		<div id="header">
		<!--PRESUNUTO DO SIDEBARU
			<div class="search">
				<?php get_search_form()?>
			</div>
			<ul id="menu">
			<?php 
				$params = array(
					'theme_location' => 'header-menu',
					'container' => 'false',
					'items_wrap' => '%3$s',
					'fallback_cb' => false,
					'deph' => 1
				);
				wp_nav_menu($params);
			?>
			</ul>
		-->
			<h1><?php _e('PIVU ZDAR', 'pivuzdar');?></h1>
		</div>