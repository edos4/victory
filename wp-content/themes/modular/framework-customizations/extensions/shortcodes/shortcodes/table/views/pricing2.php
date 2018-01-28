<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var array $atts
 */
$class_width = 'fw-col-md-' . ceil(12 / count($atts['table']['cols']));
?>
<div class="price-4">
    <div class="just-center all-details">
        <?php foreach ($atts['table']['cols'] as $col_key => $col): ?>
            <div class="<?php echo esc_html($class_width) . ' ' . esc_html($col['name']); ?> foo">
                <div class="price-table">
                    <?php foreach ($atts['table']['rows'] as $row_key => $row): ?>
                        <?php if ($row['name'] === 'heading-row'): ?>
                            <?php $heading = esc_html($atts['table']['content'][$row_key][$col_key]['heading']); ?>
                            <?php $sub_heading = esc_html($atts['table']['content'][$row_key][$col_key]['sub_heading']); ?>

                            <span class="plan"><?php echo (empty($heading) && $col['name'] === 'desc-col') ? '&nbps;' : $heading; ?></span>

                        <?php elseif ($row['name'] == 'switch-row') : ?>
                            <?php $button_text = esc_html($atts['table']['content'][$row_key][$col_key]['button_text']); ?>
                            <div class="offer-action">
                                <button class="btn btn-lg show-appointment-modal" data-service=""><?php echo (empty($button_text) && $col['name'] === 'desc-col') ? '&nbps;' : $button_text; ?></button>
                            </div>

                        <?php elseif ($row['name'] == 'button-row') : ?>
                            <?php $button = fw_ext('shortcodes')->get_shortcode('button'); ?>

                            <span class="billing"><?php echo (empty($sub_heading) && $col['name'] === 'desc-col') ? '&nbps;' : $sub_heading; ?></span>

                            <?php if (false === empty($atts['table']['content'][$row_key][$col_key]['button']) and false === empty($button)) : ?>
                                <?php echo wp_kses_post($button->render($atts['table']['content'][$row_key][$col_key]['button'])); ?>
                            <?php else : ?>
                                <span>&nbsp;</span>
                            <?php endif; ?>

                        <?php elseif ($row['name'] == 'pricing-row') : ?>
                            <?php $currency = esc_html($atts['table']['content'][$row_key][$col_key]['currency']); ?>
                            <?php $amount = esc_html($atts['table']['content'][$row_key][$col_key]['amount']); ?>
                            <?php $description = esc_html($atts['table']['content'][$row_key][$col_key]['description']); ?>

                            <span class="price"><?php echo (empty($currency) && $col['name'] === 'desc-col') ? '&nbps;' : $currency; ?>&nbsp;<span><?php echo (empty($amount) && $col['name'] === 'desc-col') ? '&nbps;' : $amount; ?></span>&nbsp;/<?php echo (empty($description) && $col['name'] === 'desc-col') ? '&nbps;' : $description; ?></span>

                        <?php elseif ($row['name'] === 'default-row') : ?>
                            <ul class="features">
                                <?php $value = $atts['table']['content'][$row_key][$col_key]['textarea']; ?>
                                <?php if (!empty($value)) : ?>
                                    <li><?php echo wp_kses_post($value) ?></li>
                                <?php else : ?>
                                    <li>&nbsp;</li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>