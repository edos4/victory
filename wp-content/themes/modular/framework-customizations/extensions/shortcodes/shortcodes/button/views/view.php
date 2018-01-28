<?php
if ( !defined( 'FW' ) )
	die( 'Forbidden' );



$icon			 = $before_btn		 = $after_btn		 = '';
$btn_alignment	 = $atts[ 'btn_alignment' ];
$class			 = $atts[ 'class' ];

$before_btn	 = '<div class="' . $btn_alignment . ' ' . $class . '">';
$after_btn	 = '</div>';

echo wp_kses_post( $before_btn );

foreach ( $atts[ 'button_settings' ] as $btn ):

	if ( $btn[ 'icon' ] != '' ) {
		$icon_position	 = $btn[ 'icon_position' ];
		$icon			 = '<i class="' . $icon_position . ' ' . $btn[ 'icon' ] . '"></i>';
	}
	?>
	<a target="<?php echo esc_html( $btn[ 'target' ] ); ?>" href="<?php echo esc_url( $btn[ 'link' ] ); ?>" class="<?php echo esc_html( $btn[ 'size' ] ); ?> <?php echo esc_html( $btn[ 'background' ] ); ?> <?php echo esc_html( $btn[ 'scale' ] ); ?> <?php echo esc_html( $btn[ 'radius' ] ); ?> <?php echo esc_html( $btn[ 'shadow' ] ); ?> <?php modular_theme_button_class( $btn[ 'style' ] ); ?>"> <?php echo modular_kses( $icon ); ?> <?php echo wp_kses_post( $btn[ 'label' ] ); ?></a>
	<?php
endforeach;
echo wp_kses_post( $after_btn );

