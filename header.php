<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content = "telephone=no">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div>
	<header>
		<div class="container">
			<a href = "<?php echo esc_url( home_url( '/' ) ); ?>">
				<img class="logo" src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt = "TZF Consultoria Analítica">
			</a>
			<input type="checkbox" id="sidebartoggler">
			<label class="toggle visible-xs-inline-block" for = "sidebartoggler"><i class="fa fa-bars"></i></label>
			<nav class="nav-sidebar visible-xs-inline-block"><?php wp_nav_menu(array('theme_location' => 'primary')); ?></nav>
			<nav class="hidden-xs"><?php wp_nav_menu(array('theme_location' => 'primary')); ?></nav>
		</div>
	</header>