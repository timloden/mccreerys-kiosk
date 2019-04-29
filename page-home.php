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

get_header();
?>
<div class="row main-content">
	<div class="columns small-12">
		<h1 class="text-center"><?php echo $hero_title; ?></h1>
		<p class="text-center"><?php echo $hero_text; ?></p>

		<?php if( have_rows('home_brands') ): ?>

			<div class="row align-middle small-up-1 medium-up-2 large-up-3">

			<?php while( have_rows('home_brands') ): the_row();

				$brand_logo = get_sub_field('brand_logo');
				$brand_page = get_sub_field('brand_page');
			?>

				<div class="column align-self-middle text-center home-brand-link">
					<a href="<?php echo $brand_page; ?>">
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
