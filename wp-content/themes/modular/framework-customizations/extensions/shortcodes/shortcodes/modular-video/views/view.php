<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$class = '';

$divclass	 = !empty( $atts[ 'centered' ] ) ? 'text-center ' : '';
$text		 = !empty( $atts[ 'title' ] ) ? $atts[ 'title' ] : '';
if ( isset( $atts[ 'video' ] ) && !empty( $atts[ 'video' ] ) ) :
	if ( $atts[ 'icon' ] == 'choice-1' ) {
		$class .= '<span class="fa fa-play-circle play-button1 bttn-scale"></span>';
	} elseif ( $atts[ 'icon' ] == 'choice-2' ) {
		$class .= '<span class="fa fa-play-circle play-button2 bttn-scale"></span>';
	} else if ( $atts[ 'icon' ] == 'choice-3' ) {
		$class .= '<span class="play-button1 bttn-scale"><i class="fa fa-play"></i></span>';
	} elseif ( $atts[ 'icon' ] == 'choice-4' ) {
		$class .= '<span class="fa fa-play-circle play-button3 bttn-scale"></span><span class="popup-text">' . $text . '</span>';
	}
	?>
	<div class="popup-button <?php echo esc_attr( $divclass ) ?>">
		<a class="popup-video" href="<?php echo esc_url( $atts[ 'video' ] ); ?>">
			<?php echo modular_kses( $class ) ?>
		</a>
	</div>
<?php endif; ?>

