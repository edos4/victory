<?php
if (!defined('FW')) {
    die('Forbidden');
}
$service_style = $atts['service_style'];
?>

<?php if ($service_style == 'service-1'): ?>
    <div class="content-block-1">
        <!-- info box heading -->
	<?php if (!empty($atts['title']) && isset($atts['title_color'])): ?>
	    <span class="subh-basic-light" style="color:<?php echo esc_html($atts['title_color']); ?>"><?php echo esc_html($atts['title']); ?></span>
	<?php endif; ?>

        <!-- info -->
	<?php if (!empty($atts['content']) && $atts['content_color']): ?>
	    <p style="color:<?php echo esc_html($atts['content_color']); ?>" class="margin-top20"><?php echo wp_kses_post($atts['content']); ?></p>
	<?php endif; ?>
    </div>

<?php elseif ($service_style == 'service-2'): ?>
    <div class="content-block-7">
        <div class="just-center">
    	<!-- feature wrapper -->
    	<div class="feature">
    	    <!-- icon -->
    	    <div class="col-sm-2">
		    <?php if (!empty($atts['icon'])): ?>
			<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
		    <?php endif; ?>
    	    </div>
    	    <!-- text -->
    	    <div class="col-sm-10">
		    <?php if (!empty($atts['title']) && isset($atts['title_color'])): ?>
			<span style="color:<?php echo esc_html($atts['title_color']); ?>" class="subh-basic-dark text-white"><?php echo esc_html($atts['title']); ?></span>
		    <?php endif; ?>

		    <?php if (!empty($atts['content']) && isset($atts['content_color'])): ?>
			<p style="color:<?php echo esc_html($atts['content_color']); ?>"><?php echo wp_kses_post($atts['content']); ?></p>
		    <?php endif; ?>
    	    </div>
    	</div>
        </div>
    </div>
<?php elseif ($service_style == 'service-3'): ?>
    <div class="content-block-9">
        <div class="just-center">
    	<div class="feature text-center">
		<?php if (!empty($atts['icon'])): ?>
		    <i class="<?php echo esc_attr($atts['icon']); ?>"></i>
		<?php endif; ?>

		<?php if (!empty($atts['title']) && isset($atts['title_color'])): ?>
		    <span style="color:<?php echo esc_html($atts['title_color']); ?>" class="subh-basic-dark"><?php echo esc_html($atts['title']); ?></span>
		<?php endif; ?>

		<?php if (!empty($atts['content']) && isset($atts['content_color'])): ?>
		    <p style="color:<?php echo esc_html($atts['content_color']); ?>"><?php echo wp_kses_post($atts['content']); ?></p>
		<?php endif; ?>
    	</div>
        </div>
    </div>

<?php elseif ($service_style == 'service-4'): ?>
    <div class="content-block-11">
        <div class="feature text-center">
	    <?php if (!empty($atts['icon'])): ?>
		<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
	    <?php endif; ?>

	    <?php if (!empty($atts['title']) && isset($atts['title_color'])): ?>
		<span style="color:<?php echo esc_html($atts['title_color']); ?>" class="subh-basic-light"><?php echo esc_html($atts['title']); ?></span>
	    <?php endif; ?>

	    <?php if (!empty($atts['content']) && isset($atts['content_color'])): ?>
		<p style="color:<?php echo esc_html($atts['content_color']); ?>" class="feature-info"><?php echo wp_kses_post($atts['content']); ?></p>
	    <?php endif; ?>
        </div>
    </div>

<?php elseif ($service_style == 'service-5'): ?>
    <div class="content-block-12">
        <div class="feature margin-top30">
    	<!-- icon -->
    	<div class="col-xs-3">
		<?php if (!empty($atts['icon'])): ?>
		    <i class="<?php echo esc_attr($atts['icon']); ?>"></i>
		<?php endif; ?>
    	</div>

    	<!-- content -->
    	<div class="col-xs-9">
    	    <!-- Feature -->
		<?php if (!empty($atts['title']) && isset($atts['title_color'])): ?>
		    <span style="color:<?php echo esc_html($atts['title_color']); ?>" class="subh-basic-dark"><?php echo esc_html($atts['title']); ?></span>
		<?php endif; ?>

    	    <!-- feature info -->
		<?php if (!empty($atts['content']) && isset($atts['content_color'])): ?>
		    <p style="color:<?php echo esc_html($atts['content_color']); ?>" class="margin-top20 font-hind"><?php echo wp_kses_post($atts['content']); ?></p>
		<?php endif; ?>
    	</div>
        </div>

    </div>
    <?php

 endif;

