<?php
if (!defined('FW')) {
    die('Forbidden');
}
$id = uniqid('testimonials-00');

$testimonialstyle = $atts['testimonialpage_style_settings'];
$testaction = $testimonialstyle['testimonial_style'];
?>


<?php if ($testaction == 'testimonial-1-style') : ?>
    <?php
    $testactiononestyle = $testimonialstyle['testimonial-1-style'];
    $testcnt = $testactiononestyle['testimonial-1-content'];
    $testtitle = $testactiononestyle['testi-one-title'];
    $testsubtitle = $testactiononestyle['testi-one-subtitle'];
    $testimg = $testactiononestyle['testimonial-1-img'];
    ?>
    <!-- Testimonial Style 1 -->
    <div class="testimonial-1">
        <div class="text-container text-center">
            <!-- Quote by client -->
            <?php if (!empty($testcnt)) : ?>
                <p class="font-pt-serif-italic"><?php echo wp_kses_post($testcnt); ?></p>
            <?php endif; ?>

            <?php if (!empty($testimg)) : ?>
                <img class="img-circle img-center margin-top20" src="<?php echo esc_url($testimg['url']); ?>" width="84" height="84" alt="author">
            <?php endif; ?>

            <!-- Client's Name -->
            <?php if (!empty($testtitle)) : ?>
                <h6 class="name display-block"><?php echo esc_html($testtitle); ?></h6>
            <?php endif; ?>

            <!-- Client's Position -->
            <?php if (!empty($testsubtitle)) : ?>
                <span class="position display-block"><?php echo esc_html($testsubtitle); ?></span>
            <?php endif; ?>
        </div>
    </div>
    <!-- End of Testimonial Style 1 -->

    <?php
elseif ($testaction == 'testimonial-2-style'):
    $testimoni_two = $testimonialstyle['testimonial-2-style'];
    $testimoni_elements = $testimoni_two['testimonial_element_option'];
    ?>
    <!-- Testimonial Style 2 -->
    <div class="testimonial-2">
        <!-- Testimonial Wrapper -->
        <div class="all-testimonials" id="testimonial2">
            <?php foreach ($testimoni_elements as $testimoniItem) : ?>

                <?php
                $testi_two_img = $testimoniItem['testi-2-img'];
                $testi_two_content = $testimoniItem['testi-2-content'];
                $testi_two_author = $testimoniItem['testi_two_author'];
                $testi_two_author_rank = $testimoniItem['testi-2-author-rank'];
                ?>
                <!-- Quote 1 -->
                <div class="item">
                    <!-- photo/icon -->
                    <?php if (!empty($testi_two_img)): ?>
                        <img class="img-circle" src="<?php echo esc_url($testi_two_img['url']); ?>" width="84" height="84" alt="">
                    <?php endif; ?>

                    <!-- Quote/Text -->
                    <?php if (!empty($testi_two_content)): ?>
                        <p><?php echo wp_kses_post($testi_two_content); ?></p>
                    <?php endif; ?>

                    <!-- Name -->
                    <?php if (!empty($testi_two_author)): ?>
                        <span class="name"><?php echo esc_html($testi_two_author); ?></span>
                    <?php endif; ?>

                    <!-- Position -->
                    <?php if (!empty($testi_two_author_rank)) : ?>
                        <span class="position"><?php echo esc_html($testi_two_author_rank); ?></span>
                    <?php endif; ?>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

<?php elseif ($testaction == 'testimonial-3-style'): ?>
    <?php
    $id = uniqid('testimonials-');
    $testimoni_three = $testimonialstyle['testimonial-3-style'];
    $testi_three = $testimoni_three['testimonial_element_option_three'];
    $testimonialthreetitle = $testimonialstyle['testimonial-3-style'];
    $testimoni_three_title = $testimonialthreetitle['testimoni_three_title'];
    ?>
    <div class="testimonial-3">
        <!-- Testimonial Title -->
        <?php if (!empty($testimoni_three_title)) : ?>
            <h6 class="subh-basic-light"><?php echo esc_html($testimoni_three_title); ?></h6>
        <?php endif; ?>
        <!-- Quote Symbol -->
        <span class="ti-quote-left quote-symbol"></span>
        <!-- Testimonial Wrapper -->
        <div class="testimonial03" id="<?php echo wp_kses_post($id); ?>">
            <?php foreach ($testi_three as $testimonithree) : ?>
                <?php
                $testimoni_3_content = $testimonithree['testimoni_three_content'];
                $testimoni_3_img = $testimonithree['testimoni_three_img'];
                $testimoni_3_author = $testimonithree['testimoni_three_author'];
                $testimoni_3_author_rank = $testimonithree['testimoni_three_author_rank'];
                ?>
                <!-- Quote 1 -->
                <div class="item">
                    <!-- Quote -->
                    <?php if (!empty($testimoni_3_content)) : ?>
                        <p class="subtext"><?php echo wp_kses_post($testimoni_3_content); ?></p>
                    <?php endif; ?>

                    <!-- Photo/icon -->
                    <?php if (!empty($testimoni_3_img)) : ?>
                        <img class="img-center img-circle face" src="<?php echo esc_url($testimoni_3_img['url']); ?>" width="64" height="80" alt=""/>
                    <?php endif; ?>

                    <!-- Name -->
                    <?php if (!empty($testimoni_3_author)) : ?>
                        <span class="name"><?php echo esc_html($testimoni_3_author); ?></span>
                    <?php endif; ?>

                    <!-- Position -->
                    <?php if (!empty($testimoni_3_author_rank)) : ?>
                        <span class="position"><?php echo esc_html($testimoni_3_author_rank); ?></span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php elseif ($testaction == 'testimonial-4-style'): ?>
    <?php
    $testimoni = $testimonialstyle['testimonial-4-style'];
    $testimoni_style_four = $testimoni['testimonial_element_option_four'];
    ?>
    <div class="testimonial-4">
        <?php foreach ($testimoni_style_four as $testimonifour) : ?>
            <!-- Quote 1 -->
            <div class="col-xs-4">
                <div class="client-box">
                    <div class="author">
                        <?php $testimonifour_img = $testimonifour['testimoni_four_img']; ?>
                        <?php if (!empty($testimonifour_img)) : ?>
                            <!-- Photo/icon -->
                            <img class="img-circle" width="50" height="50" src="<?php echo esc_url($testimonifour_img['url']); ?>" alt="author"/>
                        <?php endif; ?>
                        <div class="author-info">
                            <?php if (!empty($testimonifour['testimoni_four_author'])) : ?>
                                <!-- Name -->
                                <span class="name"><?php echo esc_html($testimonifour['testimoni_four_author']); ?></span>
                            <?php endif; ?>

                            <?php if (!empty($testimonifour['testimoni_four_author_rank'])) : ?>
                                <!-- Company/Position -->
                                <span class="company"><?php echo esc_html($testimonifour['testimoni_four_author_rank']); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (!empty($testimonifour['testimoni_four_content'])) : ?>
                        <!-- Quote -->
                        <p class="quote"><?php echo esc_html($testimonifour['testimoni_four_content']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php elseif ($testaction == 'testimonial-5-style'): ?>
    <?php
    $testimoni = $testimonialstyle['testimonial-5-style'];
    $testimoni_style_five = $testimoni['testimonial_element_option_five'];
    ?>
    <div class="testimonial-5">
        <div id="<?php echo wp_kses_post($id); ?>" class="owl-testimonial-5">
            <?php foreach ($testimoni_style_five as $testimonifour) : ?>
                <!-- Quote 1 -->
                <div class="item">
                    <!-- quote -->
                    <?php if (!empty($testimonifour)) : ?>
                        <p class="bubble"><?php echo wp_kses_post($testimonifour['testimoni_five_content']); ?></p>
                    <?php endif; ?>

                    <!-- photo/icon -->
                    <?php $testimoniimg = $testimonifour['testimoni_five_img'] ?>
                    <?php if (!empty($testimoniimg)) : ?>
                        <img src="<?php echo esc_url($testimoniimg['url']); ?>" width="64" alt="">
                    <?php endif; ?>

                    <!-- Name -->
                    <?php if (!empty($testimonifour)) : ?>
                        <span class="name"><?php echo esc_html($testimonifour['testimoni_five_author']); ?></span>
                    <?php endif; ?>

                    <!-- Position -->
                    <?php if (!empty($testimonifour)) : ?>
                        <span class="position"><?php echo esc_html($testimonifour['testimoni_five_author_rank']); ?></span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>


