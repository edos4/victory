<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
$scrollup = modular_get_option('scrollup');

$footer = modular_get_option('footer_style_settings');
$footer_class = $footer_logo = $footer_menu = '';
if (defined('FW')) {
    $footer_style = $footer['footer_style'];

    if ($footer_style == 'footer-1') {
        $footer_class = 'footer-3';
        $footer_logo = 'col-md-3';
        $footer_menu = 'col-md-9';
    } else if ($footer_style == 'footer-2') {
        $footer_class = 'footer-1';
        $footer_logo = 'col-md-2';
        $footer_menu = 'col-md-7';
    }
} else {
    $footer_style = 'footer-1';
    $footer_class = 'footer-3';
}
?>

<footer class="<?php echo esc_attr($footer_class); ?>">
    <div class="container">
        <div class="row">
            <!-- logo -->
            <div class="<?php echo esc_attr($footer_logo); ?>">
                <img class="img-responsive img-center" src="<?php echo modular_get_image('footer_logo', MODULAR_IMAGES . '/logo64.png') ?>" alt="<?php bloginfo('name'); ?>"/>
            </div>
            <!-- Navigation Links -->
            <div class="<?php echo esc_attr($footer_menu); ?> text-center">
                <?php
                wp_nav_menu(array(
                    'menu' => 'footer',
                    'theme_location' => 'footer',
                    'depth' => 1,
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'list-inline',
                    'fallback_cb' => 'modular_xs_navwalker::fallback',
                    'walker' => new modular_xs_navwalker())
                );
                ?>
            </div>

            <?php if ($footer_style == 'footer-2') : ?>
                <!-- social buttons -->
                <div class="col-md-3">
                    <div class="social-dark">
                        <?php foreach ($footer['footer-2']['footer_socials'] as $social): ?>
                            <?php if (!empty($social)): ?>
                                <a target="_blank" href="<?php echo esc_url($social['link']); ?>"><span class="<?php echo esc_attr($social['icon']); ?>"></span></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Goto top arrow -->
            <?php if ($scrollup == 'yes'): ?>
                <div class="scrollup">
                    <a href="#"><i class="ti-arrow-up"></i></a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if ($footer_style == 'footer-2') : ?>
        <hr class="hr-dark"/>
        <div class="container">
            <!-- Copyright text -->
            <div class="copyright">
                <p><?php echo esc_html($footer['footer-2']['footer_heading']); ?></p>
            </div>
            <!-- Terms and Privacy links -->
            <div class="terms">
                <?php foreach ($footer['footer-2']['custom_links'] as $custom): ?>
                    <?php if (!empty($custom)): ?>
                        <a target="<?php echo esc_html($custom['target']); ?>" href="<?php echo esc_url($custom['link']); ?>"><?php echo esc_html($custom['title']); ?></a><span>/</span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>