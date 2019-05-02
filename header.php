<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package McCreerys_Kiosk
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<div class="row">
		<div class="columns medium-1">
			<?php if ( !is_front_page() ) : ?>
				<a class="back-button" onclick="window.history.back()"><i class="fas fa-chevron-left"></i></a>
			<?php endif; ?>
		</div>
		<div class="columns medium-10">
			<a href="/"><img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mccreerys-white-logo.png"></a>
		</div>
		<div class="columns medium-1">

		</div>
	</div>
</header>
<div class="content">
