<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class = "site-header-container">
<div id="site-logo" class = "site-logo-container">
    <?php if (has_custom_logo()) {
        the_custom_logo();
    } ?>
</div>

<nav id="site-navigation" class="main-navigation">

    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
</nav>
</header>