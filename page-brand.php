<?php
/**
 * Template Name: Brand Page
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

$brand_name = get_field( "brand_name" );
$brand_logo = get_field( "brand_logo" );
$brand_description = get_field( "brand_description" );
$brand_main_image = get_field( "brand_main_image" );
$images = get_field('brand_gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

get_header();
?>

<div class="row main-content">
	<div class="columns small-12">
		<h1 class="text-center brand-logo"><img src="<?php echo $brand_logo; ?>"></h1>
		<hr>
		<p class="text-center"><?php echo $brand_description; ?></p>
		<p class="text-center"><a class="button" href="#" data-open="myModal"><strong>Get more information</strong></a></p>

		<?php if( $images ): ?>
		    <div class="row align-middle small-up-1 medium-up-2 large-up-3">
		        <?php foreach( $images as $image ): ?>
		            <div class="column align-self-middle text-center">
		            	<a class="brand-thumb" data-image="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
		            </div>
		        <?php endforeach; ?>
		    </div>
		<?php endif; ?>

	</div>
</div>

<div id="myModal" class="reveal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	<p>Please fill out the form below and we will contact you with updates on <?php echo $brand_name; ?> products!</p>
	<?php gravity_form('Brand Page Form', false, false, false, '', false); ?>
	<button class="close-button" data-close aria-label="Close modal" type="button">
    	<span aria-hidden="true">&times;</span>
	</button>
</div>

<div id="image-zoom" class="full reveal" data-reveal aria-hidden="true" role="dialog">
	<img id="main-modal-image" class="brand-main-image" src="<?php echo $brand_main_image; ?>">
	<button class="close-button" data-close aria-label="Close modal" type="button">
    	<span aria-hidden="true">&times;</span>
	</button>
</div>

<?php
get_footer();
