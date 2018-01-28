<?php
if (!defined('FW')) {
    die('Forbidden');
}
$mainstyle = $atts['portfolio_style_settings'];
$portfoliostyle = $mainstyle['portfolio_style'];

$portfolio1 = $mainstyle['portfolio_style_one']['portfolios'];
$portfolio2 = $mainstyle['portfolio_style_two']['portfolios'];
?>

<?php if ($portfoliostyle == 'portfolio_style_one') : ?>
    <div class="portfolio-1">
        <ul class="grid grid-type-1 <?php echo esc_attr($atts['grid']); ?> <?php echo esc_attr($atts['gutter']); ?>">
            <?php foreach ($portfolio1 as $portfolioitem) : ?>
                <!-- element -->
                <li class="grid-item">
                    <a class="portfolio-masonary-1" href="<?php echo esc_url($portfolioitem['image']['url']); ?>">
                        <!-- Image Wrapper -->
                        <figure>
                            <div class="grid-img">
                                <?php if (!empty($portfolioitem['image'])) : ?>
                                    <img class="img-responsive" src="<?php echo esc_url($portfolioitem['image']['url']); ?>" alt="<?php echo esc_html($portfolioitem['title']); ?>">
                                <?php endif; ?>
                            </div>
                            <!-- Image Caption -->
                            <figcaption>
                                <?php if (!empty($portfolioitem['title'])) : ?>
                                    <span class="project"><?php echo esc_html($portfolioitem['title']); ?></span>
                                <?php endif; ?>

                                <?php if (!empty($portfolioitem['subtitle'])) : ?>
                                    <span class="company"><?php echo esc_html($portfolioitem['subtitle']); ?></span>
                                <?php endif; ?>
                            </figcaption>
                        </figure>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php elseif ($portfoliostyle == 'portfolio_style_two') : ?>
    <div class="portfolio-2">
        <ul class="grid grid-type-2 <?php echo esc_attr($atts['grid']); ?> <?php echo esc_attr($atts['gutter']); ?>">
            <?php foreach ($portfolio2 as $portfolioitem) : ?>
                <!-- element -->
                <li class="grid-item">
                    <?php if (!empty($portfolioitem['image'])) : ?>
                        <a class="portfolio-masonary-2" href="<?php echo esc_url($portfolioitem['image']['url']); ?>">
                        <?php endif; ?>
                        <!-- Image Wrapper -->
                        <figure>
                            <div class="grid-img">
                                <?php
                                $imgsize = $portfolioitem['image_size'];
                                $portimg_one = fw_resize($portfolioitem['image']['url'], 285, 178);
                                $portimg_two = fw_resize($portfolioitem['image']['url'], 285, 356);
                                ?>

                                <?php if ($imgsize == '1x') : ?>
                                    <img class="img-responsive" src="<?php echo esc_url($portimg_one); ?>" alt="">
                                <?php elseif ($imgsize == '2x') : ?>
                                    <img class="img-responsive" src="<?php echo esc_url($portimg_two); ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <!-- Image Caption -->
                            <figcaption>
                                <?php if (!empty($portfolioitem['title'])) : ?>
                                    <span class="project"><?php echo esc_html($portfolioitem['title']); ?></span>
                                <?php endif; ?>
                                <?php if (!empty($portfolioitem['subtitle'])) : ?>
                                    <span class="company"><?php echo esc_html($portfolioitem['subtitle']); ?></span>
                                <?php endif; ?>
                            </figcaption>
                        </figure>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

