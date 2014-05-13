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

?>