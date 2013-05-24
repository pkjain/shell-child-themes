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
			<?php previous_post_link( '<div class="previous"><< ' . __( '%link', 'shell' ) . '</div>', '%title' ); ?>
			<?php next_post_link( '<div class="next">' . __( '%link', 'shell' ) . ' >></div>', '%title' ); ?>
		</div><!-- .loop-nav -->
	<?php endif; ?>
