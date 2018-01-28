<?php if (!defined('FW')) die('Forbidden'); ?>
<?php
$funfact_style = $atts['counter_style_settings'];
$countstyle = $funfact_style['counter_style'];
$funfact1 = $funfact_style['counter_one']['funfacts'];
$funfact2 = $funfact_style['counter_two']['funfacts'];
?>



<?php if ($countstyle == 'counter_one') : ?>
    <!-- Counters Style 1 -->
    <div class="counters-1">
        <div class="just-center">
            <?php foreach ($funfact1 as $counter) : ?>
                <div class="col-xs-4">
                    <!-- Counter -->
                    <?php if (!empty($counter['number'])) : ?>
                        <h4 class="funfact-1"><?php echo esc_html($counter['number']); ?></h4>
                    <?php endif; ?>

                    <!-- Type -->
                    <?php if (!empty($counter['title'])) : ?>
                        <h6><?php echo esc_html($counter['title']); ?></h6>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php elseif ($countstyle == 'counter_two') : ?>
    <!-- Counters Style 2 -->
    <div class="counters-2">
        <?php foreach ($funfact2 as $countertwo) : ?>
            <div class="col-sm-3 col-xs-6 sect-1">
                <!-- Counter Icon -->
                <?php if (!empty($countertwo['icon'])) : ?>
                    <i class="<?php echo esc_attr($countertwo['icon']); ?> icon"></i>
                <?php endif; ?>

                <!-- Counter -->
                <?php if (!empty($countertwo['number'])) : ?>
                    <h4 class="funfact-2"><?php echo esc_attr($countertwo['number']); ?></h4>
                <?php endif; ?>

                <!-- Counter Type -->
                <?php if (!empty($countertwo['title'])) : ?>
                    <span class="subh-basic-light"><?php echo esc_html($countertwo['title']); ?></span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

