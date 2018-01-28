<?php
if ( !defined( 'FW' ) )
	die( 'Forbidden' );
$class = '';
$class .= esc_attr( $atts[ 'heading' ] );
$class .= $atts[ 'text_center' ][ 'centered' ] == 'yes' ? ' fw-heading-center' : '';

$class .=!empty( $atts[ 'class' ] ) ? ' ' . $atts[ 'class' ] : '';
if ( isset( $atts[ 'xs_id' ] ) ) {
	$class .= ' xs-heading-' . $atts[ 'xs_id' ];
}

$class .= $atts[ 'display_desktop' ] == 'no' ? ' xs-hidden-lg' : '';
$class .= $atts[ 'display_medium' ] == 'no' ? ' xs-hidden-md' : '';
$class .= $atts[ 'display_tablet' ][ 'selected' ] == 'no' ? ' xs-hidden-sm' : '';
$class .= $atts[ 'display_phone' ] == 'no' ? ' xs-hidden-xs' : '';
?>

<div class="fw-heading heading fw-heading-<?php echo esc_attr($class) ?>">
	<?php
	$heading = !empty( $atts[ 'title' ] ) ? sprintf( $atts[ 'title' ], '<span class="xs-sprintf">', '</span>' ) : '';
	$title	 = "<{$atts[ 'heading' ]} class='fw-special-title'>{$heading}</{$atts[ 'heading' ]}>";

	echo empty( $atts[ 'centered' ] ) ? '<div class="fw-special-title-half">' . $title . '</div>' : $title;
	?>
	<?php if ( !empty( $atts[ 'subtitle' ] ) ): ?>
		<?php
		$subheading = "<{$atts[ 'subheading' ]} class='fw-special-subtitle'>{$atts[ 'subtitle' ]}</{$atts[ 'subheading' ]}>";
		echo empty( $atts[ 'centered' ] ) ? '<div class="fw-special-subtitle-half">' . $subheading . '</div>' : $subheading;
	endif;
	?>
</div>