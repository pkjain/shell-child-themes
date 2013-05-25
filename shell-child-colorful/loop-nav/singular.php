<?php
/**
 * Loop Nav Template For Singular Pages
 *
 * @package Shell
 * @subpackage Template
 */
?>
	<?php if ( is_singular( 'post' ) ) : ?>
		<div class="loop-nav">
			<?php previous_post_link( '<div class="previousicon"><span><<<span></div><div class="previous">' . __( '%link', 'shell' ) . '</div>', '%title' ); ?>
			<?php next_post_link( '<div class="next">' . __( '%link', 'shell' ) . '</div><div class="nexticon"><span>>></span></div>', '%title' ); ?>
		</div><!-- .loop-nav -->
	<?php endif; ?>
