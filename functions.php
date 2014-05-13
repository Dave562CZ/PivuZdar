<?php
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
  register_nav_menus(
  	array(
      'header-menu' => __( 'Search menu' ),
      'main-menu' => __( 'Horní menu' ),
      'left-menu' => __( 'Levé Menu' ),
      'category-menu' => __( 'Kategorie Menu' )
    )
  );
}
add_action('widgets_init', 'widgets_init');
function widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Levý sloupec', 'Moje sablona' ),
			'id' => 'left-sidebar',
			'description' => __( 'Levý sloupec', 'Moje sablona' ),
			'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',	
		)
	);
}
add_action('after_setup_theme', 'pivuzdar_theme_setup');
function pivuzdar_theme_setup() {
	load_theme_textdomain('pivuzdar', get_template_directory() . '/languages');
	
}

add_action('init', 'registrace_hospod');
function registrace_hospod() {

	$labels = array(
			'name' => __('Hospody', 'pivuzdar'),
			'singular_name' => __('Hosopoda', 'pivuzdar'),
			'add_new' => __('Přidat hospodu', 'pivuzdar'),
			'add_new_item' => __('Přidat novou hospodu', 'pivuzdar'),
			'edit_item' => __('Změnit hospodu', 'pivuzdar'),
			'new_item' => __('Nová hospoda', 'pivuzdar'),
			'view_item' => __('Zobrazit hospodu', 'pivuzdar'),
	);

	$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'hospoda', 'with_front' => false),
			'hierarchical' => true,
			'supports' => array('title','editor', 'thumbnail'),
			
	);

	register_post_type( 'hospody' , $args );
}
?>