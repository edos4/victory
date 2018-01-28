<?php if (!defined('FW')) die('Forbidden'); ?>

<div class="content-block-2">
    <!-- feature -->
    <div class="feature margin-bot30">
        <!-- feature heading -->
        <?php if (!empty($atts['title'])) : ?>
            <span class="subh-basic-dark text-blue"><?php echo esc_html($atts['title']); ?></span>
        <?php endif; ?>

        <!-- feature info -->
        <?php if (!empty($atts['description'])) : ?>
            <p><?php echo wp_kses_post($atts['description']); ?></p>
        <?php endif; ?>
    </div>
</div>