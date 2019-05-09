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
$promo_image = get_field( "brand_promo_image" );

get_header();
?>
<div class="row main-content">
	<div class="brand-intro">
		<div class="columns small-12">
			<h1 class="text-center brand-logo"><img src="<?php echo $brand_logo; ?>"></h1>
			<hr>
			<p class="text-center"><?php echo $brand_description; ?></p>
		</div>
	</div>
	<?php if( $images ): ?>
	    <div class="brand-grid">
	    	<?php $image_count = 0 ?>
	        <?php foreach( $images as $image ): ?>

	            <?php if ($image_count % 20 == 0 && $image_count != 0 && $promo_image): ?>

	           	<div>
	            	<a href="#" data-open="myModal">
						<img src="<?php echo $promo_image; ?>">
	            	</a>
	            </div>

	            <?php else: ?>

	            <div>
	            	<a class="brand-thumb" data-image="<?php echo $image['url']; ?>">
	            		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	            	</a>
	            </div>

	            <?php endif; ?>

	        <?php
	        $image_count++;
	    	endforeach; ?>
	    </div>
	<?php endif; ?>
</div>

<div class="row brand-cta">
	<div class="columns small-12 text-center">
		<p class="text-center"><a class="button" href="#" data-open="myModal"><strong>Get more information about <?php echo $brand_name; ?></strong></a></p>
	</div>
</div>

<div id="myModal" class="large reveal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog" data-animation-in="fade-in" data-animation-out="fade-out">
	<p>Please fill out the form below and we will contact you with updates on <?php echo $brand_name; ?> products!</p>
	<?php gravity_form('Brand Page Form', false, false, false, '', false); ?>
	<button class="close-button" data-close aria-label="Close modal" type="button">
    	<span aria-hidden="true">&times;</span>
	</button>
</div>

<div id="image-zoom" class="large reveal" data-reveal aria-hidden="true" role="dialog" data-animation-in="fade-in" data-animation-out="fade-out">
	<img id="main-modal-image" class="brand-main-image" src="<?php echo $brand_main_image; ?>">
	<button class="close-button" data-close aria-label="Close modal" type="button">
    	<span aria-hidden="true">&times;</span>
	</button>
</div>

<script>
	var enterPage = setTimeout(openPopUp, 30000);
	var timeOut = setTimeout(closePopUp, 40000);

	function openPopUp() {
		jQuery('#myModal').foundation('open');
	}

	function closePopUp() {
		jQuery('#myModal').foundation('close');
	}
</script>

<?php
get_footer();
