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
			<?php previous_post_link( '<div class="previous"><div style="float:left;padding-right:5px;"><<</div><div>' . __( '%link', 'shell' ) . '</div></div>', '%title' ); ?>
			<?php next_post_link( '<div class="next"><div style="float:right;padding-left:5px;">>></div><div>' . __( '%link', 'shell' ) . '</div></div>', '%title' ); ?>
		</div><!-- .loop-nav -->
	<?php endif; ?>
