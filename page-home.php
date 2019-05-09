<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package McCreerys_Kiosk
 */

$hero_title = get_field( "hero_title" );
$hero_text = get_field( "hero_text" );
$hero_background_image = get_field( "hero_background_image" );
$hero_video = get_field( "hero_video" );
get_header();
?>
<div class="row main-content">
	<div class="columns small-12">
		<?php if ($hero_title) : ?>
			<h1 class="text-center"><?php echo $hero_title; ?></h1>
		<?php endif; ?>

		<?php if ($hero_text) : ?>
			<p class="text-center"><?php echo $hero_text; ?></p>
		<?php endif; ?>

		<?php if ($hero_video) : ?>
			<div class="responsive-embed widescreen home-video">
				<iframe width="560" height="315" src="<?php echo $hero_video; ?>" frameborder="0" allowfullscreen></iframe>
			</div>

		<?php elseif ($hero_background_image) : ?>
			<img class="home-hero" src="<?php echo $hero_background_image; ?>">
		<?php endif; ?>

		<?php if( have_rows('home_brands') ): $brand_count = 0; ?>

			<h2 class="text-center brands-title">Browse Brands</h2>

			<div class="row align-middle small-up-1 medium-up-2 large-up-3">

			<?php while( have_rows('home_brands') ): the_row();

				$brand_logo = get_sub_field('brand_logo');
				$brand_page = get_sub_field('brand_page');
				$brand_count++;

			?>

				<div class="column align-self-middle text-center home-brand-link">
					<a class="home-brand-button" href="<?php echo $brand_page; ?>">
						<img src="<?php echo $brand_logo; ?>">
					</a>
				</div>

			<?php endwhile; ?>

			</div>

		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
