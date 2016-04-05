<?php
// Styles
function theme_styles() {
   // Bootstrap
	wp_register_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap');
   // Font Awesome
	wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style('font-awesome');
	// Theme Styles
	wp_register_style('theme-style', get_stylesheet_uri() );
	wp_enqueue_style('theme-style');
   
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Load Javascript
function theme_scripts() {
		// jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//code.jquery.com/jquery-2.2.2.min.js' );
		wp_enqueue_script('jquery');
		// Bootstrap
		wp_register_script('bootstrap-scripts', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), null, true);
		wp_enqueue_script('bootstrap-scripts');
}
add_action('wp_enqueue_scripts', 'theme_scripts' );

// Navigation Menus
register_nav_menus(array(
	'primary'    => __( 'Primary Menu' ),
	'second' 	 => __( 'Second Menu' )
	));

function my_login_head() {
	echo "
	<style>
		body.login #login h1 a {
			background: url('".get_bloginfo('template_url')."/img/logo.svg') no-repeat scroll center top transparent;
			background-size: contain;
			height: 110px;
			width: 300px;
		}
	</style>
	";
}
add_action("login_head", "my_login_head");

// Widgets
function widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar Primary', 'widgets_init' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title"><i></i>',
		'after_title'   => '</h4>',
		) );
	register_sidebar( array(
		'name' => __( 'Footer', 'widgets_init' ),
		'id' => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title"><i></i>',
		'after_title'   => '</h4>',
		) );
}
add_action( 'widgets_init', 'widgets_init' );

// Thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 800, 800 );