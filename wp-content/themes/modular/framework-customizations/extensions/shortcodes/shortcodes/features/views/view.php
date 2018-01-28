<?php
if (!defined('FW')) {
    die('Forbidden');
}

$feature = $atts['features'];
$feature_style = $feature['feature_style'];
$feature1 = $feature['feature-1'];
$feature2 = $feature['feature-2'];
?>

<?php if ($feature_style == 'feature-1'): ?>
    <div class="content-block-10">
        <!-- main wrapper -->
        <div class="just-center margin-top20">
            <div class="col-sm-4">
                <!-- feature -->
                <?php foreach ($feature1['feature_left'] as $item): ?>
                    <div class="feature feature-right">
                        <!-- feature icon -->
                        <?php if (!empty($item['icon'])): ?>
                            <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                        <?php endif; ?>

                        <!-- feature heading -->
                        <?php if (!empty($item['title'])): ?>
                            <span class="subh-basic-light text-blue"><?php echo esc_html($item['title']); ?></span>
                        <?php endif; ?>

                        <!-- feature info -->
                        <?php if (!empty($item['content'])): ?>
                            <p class="feature-info"><?php echo esc_html($item['content']); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="col-sm-4 img-wrapper">
                <?php if (!empty($atts['image'])): ?>
                    <img class="img-responsive img-center" src="<?php echo esc_url($atts['image']['url']); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="col-sm-4">
                <!-- feature -->
                <?php foreach ($feature1['feature_right'] as $item): ?>
                    <div class="feature">
                        <?php if (!empty($item['icon'])): ?>
                            <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                        <?php endif; ?>

                        <!-- feature heading -->
                        <?php if (!empty($item['title'])): ?>
                            <span class="subh-basic-light text-blue"><?php echo esc_html($item['title']); ?></span>
                        <?php endif; ?>

                        <!-- feature info -->
                        <?php if (!empty($item['content'])): ?>
                            <p class="feature-info"><?php echo esc_html($item['content']); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php elseif ($feature_style == 'feature-2'): ?>
    <div class="content-block-13">
        <!-- content wrapper -->
        <div class="col-md-4 col-sm-8 col-xs-10 content text-right">
            <?php foreach ($feature2['feature_left'] as $item): ?>
                <div class="feature">
                    <!-- icon -->
                    <?php if (!empty($item['icon'])): ?>
                        <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                    <?php endif; ?>

                    <!-- feature -->
                    <?php if (!empty($item['title'])): ?>
                        <h4 class="letter-spacing0 margin-top20 text-blue foo"><?php echo esc_html($item['title']); ?></h4>
                    <?php endif; ?>

                    <!-- feature info -->
                    <?php if (!empty($item['content'])): ?>
                        <p class="margin-top30 font-hind text-large foo"><?php echo esc_html($item['content']); ?></p>
                    <?php endif; ?>

                    <!-- button -->
                    <div class="foo margin-top20">
                        <a target="<?php echo esc_html($item['target']); ?>" href="<?php echo esc_url($item['link']); ?>" class="bttn bttn-small bttn-blue bttn-scale bttn75 text-normal"><?php echo esc_html($item['label']); ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- image wrapper -->
        <div class="col-md-4 col-sm-6 col-xs-8 foo">
            <?php if (!empty($atts['image'])): ?>
                <img class="img-responsive img-center" src="<?php echo esc_url($atts['image']['url']); ?>" alt="">
            <?php endif; ?>
        </div>
        <!-- content wrapper -->
        <div class="col-md-4 col-sm-8 col-xs-10 content">
            <?php foreach ($feature2['feature_right'] as $item): ?>
                <div class="feature">
                    <?php if (!empty($item['icon'])): ?>
                        <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                    <?php endif; ?>

                    <!-- feature -->
                    <?php if (!empty($item['title'])): ?>
                        <h4 class="letter-spacing0 margin-top20 text-blue foo"><?php echo esc_html($item['title']); ?></h4>
                    <?php endif; ?>

                    <!-- feature info -->
                    <?php if (!empty($item['content'])): ?>
                        <p class="margin-top30 font-hind text-large foo"><?php echo esc_html($item['content']); ?></p>
                    <?php endif; ?>

                    <div class="foo margin-top20">
                        <a target="<?php echo esc_html($item['target']); ?>" href="<?php echo esc_url($item['link']); ?>" class="bttn bttn-small bttn-blue bttn-scale bttn75 text-normal"><?php echo esc_html($item['label']); ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>