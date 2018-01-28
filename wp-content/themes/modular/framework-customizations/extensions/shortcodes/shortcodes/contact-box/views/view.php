<?php
if (!defined('FW'))
    die('Forbidden');
?>

<div class="contact-3">
    <?php
    foreach ($atts['contact_box'] as $box):
        $title = $box['box_info']['fast_text'] ? $box['box_info']['fast_text'] : '';
        $info = $box['box_info']['last_text'] ? $box['box_info']['last_text'] : '';
        ?>
        <div class="col-md-6">
            <div class="details">
                <!-- details heading -->
                <?php if (!empty($title)): ?>
                    <span class="det-head"><?php echo esc_html($title); ?></span>
                <?php endif; ?>

                <!-- details -->
                <?php if (!empty($info)): ?>
                    <address><?php echo wp_kses_post($info); ?></address>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>