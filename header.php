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
<div class="header-container" data-sticky-container>
	<header data-sticky data-margin-top="0">
		<div class="row">
			<div class="columns medium-1">
					<a href="/" class="back-button"><i class="fas fa-home"></i></a>
			</div>
			<div class="columns medium-10">
				<a href="/"><img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mccreerys-white-logo.png"></a>
			</div>
			<div class="columns medium-1">

			</div>
		</div>
	</header>
</div>
<div class="content">
