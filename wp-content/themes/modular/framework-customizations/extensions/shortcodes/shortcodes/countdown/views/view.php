<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
}

$timestamp	 = isset( $atts[ 'event' ] ) ? strtotime( $atts[ 'event' ] ) : '';
$event_date	 = date( 'Y-m-d', $timestamp );
?>
<div class="hero-header-13">
	<div id="countdown" data-eventdate="<?php echo esc_html( $event_date ); ?>">
		<!-- days -->
		<div class="counter">
			<span class="type"><?php esc_attr_e( 'Days', 'modular' ) ?></span>
			<span class="value" id="days">999</span>
		</div>
		<div class="counter">
			<span class="value">:</span>
		</div>
		<!-- hours -->
		<div class="counter">
			<span class="type"><?php esc_attr_e( 'Hours', 'modular' ) ?></span>
			<span class="value" id="hours">999</span>
		</div>
		<div class="counter">
			<span class="value">:</span>
		</div>
		<!-- minutes -->
		<div class="counter">
			<span class="type"><?php esc_attr_e( 'Minutes', 'modular' ) ?></span>
			<span class="value" id="minutes">999</span>
		</div>
		<div class="counter">
			<span class="value">:</span>
		</div>
		<!-- seconds -->
		<div class="counter">
			<span class="type"><?php esc_attr_e( 'Seconds', 'modular' ) ?></span>
			<span class="value" id="seconds">999</span>
		</div>
	</div>
</div>