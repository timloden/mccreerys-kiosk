/**
 * Init Foundation
 */

( function( $ ) {
	$(document).foundation();
} )( jQuery );

( function( $ ) {
	$('.brand-thumb').on('click', function() {
		$('#main-modal-image').attr('src', $(this).data('image'));
		$('#image-zoom').foundation('open');
	})
} )( jQuery );
