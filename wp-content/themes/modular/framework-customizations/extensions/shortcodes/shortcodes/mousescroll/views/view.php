<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$color	 = isset( $atts[ 'scroll_color' ] ) && $atts[ 'scroll_color' ] == 'light' ? 'light' : 'dark';
$postion = isset( $atts[ 'position' ] ) && $atts[ 'position' ] != '' ? 'style="margin-bottom:' . (int) $atts[ 'position' ] . 'px"' : '';
?>
<a class="page-scroll mouse mouse-<?php echo esc_attr( $color ); ?>" <?php echo modular_kses( $postion ) ?>>
	<div class="wheel"></div>
</a>