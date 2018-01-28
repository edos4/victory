<?php
if (!defined('FW')) {
    die('Forbidden');
}

$id = uniqid('slider-');
?>

<?php if (isset($data['slides'])): ?>
    <!-- Hero Header Style 1 -->
    <div id="hero-header-11" class="hero-header-11">
	<?php foreach ($data['slides'] as $slide): ?>
	    <?php $counter = 1; ?>
	    <div class="slide slide-<?php echo wp_kses_post($counter); ?>" style="background: url(<?php echo esc_url($slide['src']); ?>)">
		<div class="container">
		    <div class="text-wrapper">
			<?php if (!empty($slide['title'])) : ?>
	    		<h5><?php echo esc_html($slide['title']); ?></h5>
			<?php endif; ?>

			<?php if (!empty($slide['desc'])) : ?>
	    		<p><?php echo esc_html($slide['desc']); ?></p>
			<?php endif; ?>

			<?php
			foreach ($slide['extra']['button_settings'] as $btn):
			    $icon = '';
			    if (isset($btn['icon']) && $btn['icon'] != '') {
				$icon_position = $btn['icon_position'];
				$icon = '<i class="' . $icon_position . ' ' . $btn['icon'] . '"></i>';
			    }
			    ?>
				<a target="<?php echo esc_html($btn['target']); ?>" href="<?php echo esc_url($btn['link']); ?>" class="<?php echo esc_html($btn['size']); ?> <?php echo esc_html($btn['background']); ?> <?php echo esc_html($btn['scale']); ?> <?php echo esc_html($btn['radius']); ?> <?php echo esc_html($btn['shadow']); ?> <?php modular_theme_button_class($btn['style']); ?>"> <?php echo modular_kses($icon); ?> <?php echo wp_kses_post($btn['label']); ?></a>
			<?php endforeach; ?>
		    </div>
		</div>
	    </div>
	    <?php
	    $counter++;
	endforeach;
	?>
    </div>

<?php endif; ?>