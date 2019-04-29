<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package McCreerys_Kiosk
 */

?>
</div>
 <footer>
 	<?php wp_nav_menu( array(
 		'menu' => 'menu-1',
 		'menu_class' => 'footer-menu',
 		));
 	?>
 </footer>

<?php wp_footer(); ?>
<script>
	FlexMasonry.init('.grid', {
    	numCols: 3
	});
</script>
</body>
</html>
