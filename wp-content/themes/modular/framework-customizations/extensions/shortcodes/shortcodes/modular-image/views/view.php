<?php
if (!defined('FW')) {
    die('Forbidden');
}

if (empty($atts['image'])) {
    return;
}

$image = $atts['image'];
$shadow = '';
if ($atts['image_shadow']['shadow'] == 'yes') {
    if ($atts['image_shadow']['yes']['shadow_postion'] == 'left') :
        $color = $atts['image_shadow']['yes']['color'];
        $shadow = 'style="box-shadow: -20px 20px 50px ' . $color . '"';
    else :
        $color = $atts['image_shadow']['yes']['color'];
        $shadow = 'style="box-shadow: 20px 20px 50px ' . $color . ' "';
    endif;
}
?>
<div class="img-container foo" <?php echo wp_kses_post($shadow); ?>>
    <?php if (!empty($image)): ?>
        <img class="img-responsive" src="<?php echo esc_url($image['url']) ?>" alt="">
    <?php endif; ?>
</div>