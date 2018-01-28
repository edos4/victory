<?php
if (!defined('FW'))
    die('Forbidden');
/**
 * @var array $item
 * @var array $attr
 */
$options = $item['options'];
?>
<div class="<?php echo esc_attr(fw_ext_builder_get_item_width('form-builder', $item['width'] . '/frontend_class')) ?>">
    <div class="input-container">
        <?php if (fw_htmlspecialchars($item['options']['label']) != '') : ?>
            <label for="<?php echo esc_attr($attr['id']) ?>">
                <?php if ($options['required']): ?><sup></sup><?php endif; ?>
            </label>
        <?php endif; ?>
        <label>
            <span><span><?php echo fw_htmlspecialchars($item['options']['label']) ?></span></span>
            <input <?php echo fw_attr_to_html($attr) ?>>
        </label>
        <?php if ($options['info']): ?>
            <p><em><?php echo esc_attr($options['info']); ?></em></p>
        <?php endif; ?>
    </div>
</div>