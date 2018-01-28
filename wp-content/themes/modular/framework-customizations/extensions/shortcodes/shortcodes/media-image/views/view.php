<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}
if ( empty( $atts[ 'image' ] ) ) {
	return;
}

$image		 = $atts[ 'image' ];
$image_size	 = $atts[ 'image_size' ];
if ( $image_size[ 'select_size' ] == 'custom' ) {
	$style		 = isset($image_size[ 'custom' ][ 'width' ]) && $image_size[ 'custom' ][ 'width' ] != ''  ? 'style="width: ' . (int) $image_size[ 'custom' ][ 'width' ] . 'px;"' : '';
	$attr		 = array( 'width' => (int) $image_size[ 'custom' ][ 'width' ] );
	$position	 = $image_size[ 'custom' ][ 'position' ];
} else {
	$style		 = $position	 = '';
	$attr		 = array();
}
?>
<div class="fw-single-image  <?php echo esc_attr( $position ); ?>" <?php echo modular_kses( $style ); ?>>
	<?php
	if ( empty( $atts[ 'link' ] ) ) :
		$height = !empty($atts[ 'height' ]) && $atts[ 'height' ] != 'auto' ? "style='height: {$atts[ 'height' ]}px'" : "style='height: {$atts[ 'height' ]}'";
		?>
		<img src="<?php echo esc_url( $image[ 'url' ] ) ?>" class="img-responsive <?php echo esc_attr( $position ); ?>" <?php echo wp_kses_post( $height ); ?> alt=""  />
	<?php else : ?>
		<a href="<?php echo esc_url( $atts[ 'link' ] ) ?>" target="<?php echo esc_attr( $atts[ 'target' ] ) ?>">
			<img src="<?php echo esc_url( $image[ 'url' ] ) ?>" class="img-responsive <?php echo esc_attr( $position ); ?>" alt=""  />
		</a>
	<?php endif ?>
</div>