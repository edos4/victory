<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>

<div class="description-box">
    <!-- feature -->
    <?php foreach ($atts['description_box'] as $box): ?>
        <div class="col-md-6 col-sm-6 col-xs-10 margin-bot20">
	    <?php
	    $icon_status = $box['box_icon']['status'];

	    if ($icon_status == 'yes'):
		?>
		<i style="color:<?php echo esc_html($box['box_icon']['yes']['icon_color']); ?>" class="<?php echo esc_attr($box['box_icon']['yes']['icon']); ?>"></i>
	    <?php endif; ?>

	    <?php if (!empty($box['title'] && isset($box['title_color']))): ?>
		<span class="subh-basic-light" style="color:<?php echo esc_html($box['title_color']); ?>"><?php echo esc_html($box['title']); ?></span>
	    <?php endif; ?>

	    <?php if (!empty($box['content'] && isset($box['content_color']))): ?>
		<p class="margin-top10" style="color:<?php echo esc_html($box['content_color']); ?>"><?php echo esc_html($box['content']); ?></p>
	    <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
