<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>

<?php if (isset($data['slides'])): ?>

    <div class="hero-header-1">
        <div id="hero-header-1">
	    <?php foreach ($data['slides'] as $slide): ?>
		<!-- slide 1 -->
		<div class="slide slide-1" style="background:url(<?php echo esc_url($slide['src']); ?>)">
		    <div class="container">
			<div class="text-wrapper">

			    <?php if (!empty($slide['title'])) : ?>
	    		    <h1><?php echo esc_html($slide['title']); ?></h1>
			    <?php endif; ?>

			    <?php if (!empty($slide['desc'])) : ?>
	    		    <p><?php echo esc_html($slide['desc']); ?></p>
			    <?php endif; ?>

			    <?php
			    foreach ($slide['extra']['button_settings'] as $btn):
				$icon = '';
				if ($btn['icon'] != '') {
				    $icon_position = $btn['icon_position'];
				    $icon = '<i class="' . $icon_position . ' ' . $btn['icon'] . '"></i>';
				}
				?>
					<a target="<?php echo esc_html($btn['target']); ?>" href="<?php echo esc_url($btn['link']); ?>" class="margin-top20 <?php echo esc_html($btn['size']); ?> <?php echo esc_html($btn['background']); ?> <?php echo esc_html($btn['scale']); ?> <?php echo esc_html($btn['radius']); ?> <?php echo esc_html($btn['shadow']); ?> <?php modular_theme_button_class($btn['style']); ?>"> <?php echo modular_kses($icon); ?> <?php echo wp_kses_post($btn['label']); ?></a>
			    <?php endforeach; ?>
			</div>
		    </div>
		</div>
	    <?php endforeach; ?>
        </div>
        <!-- Carousel Arrows - Prev/Next -->
        <!--        <div class="carousel-arrows">
    	    <div class="container">
    		<a class="prev-feature left bttn-scale"><i class="ti-angle-left"></i></a>
    		<a class="next-feature right bttn-scale"><i class="ti-angle-right"></i></a>
    	    </div>
    	    </div>-->
    </div>

<?php endif; ?>
