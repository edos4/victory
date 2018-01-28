<?php
if (!defined('FW'))
    die('Forbidden');

$partner_style = $atts['partner_style'];
$partners = $atts['partners'];
?>


<?php if ($partner_style == 'partner-1'): ?>
    <div class="clients-1">
        <?php if (!empty($atts['title'])): ?>
            <h6 class="subh-basic-dark text-center"><?php echo esc_html($atts['title']); ?></h6>
        <?php endif; ?>
        <ul>
            <?php foreach ($partners as $partner): ?>
                <?php if ($partner): ?>
                    <?php if (!empty($partner['image'])): ?>
                        <li><img src="<?php echo esc_url($partner['image']['url']); ?>" alt="<?php echo esc_html($partner['title']); ?>"></li>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>

<?php elseif ($partner_style == 'partner-2'): ?>
    <div class="clients-3">
        <?php if (!empty($atts['title'])): ?>
            <h6 class="subh-basic-dark text-center"><?php echo esc_html($atts['title']); ?></h6>
        <?php endif; ?>
        <ul class="just-center clearfix">
            <?php foreach ($partners as $partner): ?>
                <?php if ($partner): ?>
                    <?php if (!empty($partner['image'])): ?>
                        <li><img class="img-responsive img-center" src="<?php echo esc_url($partner['image']['url']); ?>" alt="<?php echo esc_html($partner['title']); ?>"></li>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>

<?php elseif ($partner_style == 'partner-3'): ?>
    <div class="clients-4">
        <?php if (!empty($atts['title'])): ?>
            <h6 class="subh-basic-dark text-center"><?php echo esc_html($atts['title']); ?></h6>
        <?php endif; ?>
        <ul id="clients-4" class="clients just-center">
            <?php foreach ($partners as $partner): ?>
                <?php if ($partner): ?>
                    <?php if (!empty($partner['image'])): ?>
                        <li><img class="img-responsive img-center" src="<?php echo esc_url($partner['image']['url']); ?>" alt="<?php echo esc_html($partner['title']); ?>"></li>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>

        <div class="carousel-arrows">
            <a href="#0" class="prev-client left bttn-scale"><img src="<?php echo MODULAR_IMAGES . '/arrow_left.png' ?>" width="40" alt=""></a>
            <a href="#0" class="next-client right bttn-scale"><img src="<?php echo MODULAR_IMAGES . '/arrow_right.png' ?>" width="40" alt=""></a>
        </div>
    </div>
<?php endif; ?>



