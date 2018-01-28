<?php
/**
 * blog Header
 *
 */
$heading = $description = '';
if (defined('FW')) {
    $hero_heading = fw_get_db_settings_option('general_posts_header');
    $heading = $hero_heading['header_title'];
    $description = $hero_heading['header_desc'];
}
?>

<!-- Post Title -->
<section class="blog-post-title">
    <div class="blog-hero-overlay">
        <div class="container">
            <div class="title-box">
                <h3 class="text-white"><?php echo esc_html($heading); ?></h3>
                <p><?php echo wp_kses_post($description); ?></p>
            </div>
        </div>
    </div>
</section>