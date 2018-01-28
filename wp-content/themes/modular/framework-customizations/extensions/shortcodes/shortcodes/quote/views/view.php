<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>


<div class="content-block-8 <?php echo isset( $atts[ 'xs_id' ] ) ? 'xs-quote-' . $atts[ 'xs_id' ] : ''; ?>">
	<?php if ( !empty( $atts[ 'text' ] ) ) : ?>
		<div class="bubble">
			<p><?php echo esc_html( $atts[ 'text' ] ); ?></p>
		</div>
	<?php endif; ?>

	<?php if ( !empty( $atts[ 'author' ] && $atts[ 'position' ] ) ) : ?>
		<p class="author">
			<span class="name subh-basic-light margin-top20 margin-right10"><?php echo esc_html( $atts[ 'author' ] ); ?></span>
			<?php echo esc_html( $atts[ 'position' ] ); ?>
		</p>
	<?php endif; ?>
</div>

