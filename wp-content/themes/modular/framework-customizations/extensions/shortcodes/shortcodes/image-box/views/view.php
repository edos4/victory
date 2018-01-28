<?php if (!defined('FW')) die('Forbidden'); ?>

<div class="content-block-4">
    <figure>
        <?php if (!empty($atts['image'])) : ?>
            <img class="img-responsive img-center" src="<?php echo esc_url($atts['image']['url']); ?>" alt="<?php echo esc_html($atts['title']); ?>">
        <?php endif; ?>
    </figure>

    <!-- heading -->
    <?php if (!empty($atts['title'])) : ?>
        <span class="subh-basic-dark"><?php echo esc_html($atts['title']); ?></span>
    <?php endif; ?>

    <!-- info -->
    <?php if (!empty($atts['desc'])) : ?>
        <p class="margin-top20 font-hind"><?php echo wp_kses_post($atts['desc']); ?></p>
    <?php endif; ?>
</div>