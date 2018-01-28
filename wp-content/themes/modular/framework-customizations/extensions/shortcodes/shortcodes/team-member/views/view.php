<?php
if (!defined('FW')) {
    die('Forbidden');
}
$teamsettings = $atts['team_style_settings'];
$teamstyle = $teamsettings['team_style'];
$teammember = $atts['member_team'];
?>



<?php if ($teamstyle == 'team_style_one') : ?>
    <div class="team-1">
        <?php foreach ($teammember as $memberteam) : ?>
            <!-- team member -->
            <div class="col-md-4 col-sm-6">
                <?php
                if (!empty($memberteam['member_img'])) :
                    $img = $memberteam['member_img']['url'];
                    ?>
                    <div class = "main-wrapper bg-cover-simple" style = "background:url(<?php echo esc_url($img); ?>)" >
                        <!--Name -->
                        <?php if (!empty($memberteam['team_member_name'])) :
                            ?>
                            <span class="name"><?php echo esc_html($memberteam['team_member_name']); ?></span>
                        <?php endif; ?>
                        <!-- Position -->
                        <?php if (!empty($memberteam['team_member_position'])) : ?>
                            <span class="position"><?php echo esc_html($memberteam['team_member_position']); ?></span>
                        <?php endif; ?>
                        <!-- Social Sharing -->
                        <div class="social">
                            <?php $teamsocial = $memberteam['member_social_icon'] ?>
                            <?php foreach ($teamsocial as $teamsocialicon) : ?>
                                <?php if (!empty($teamsocialicon['social_icon'])): ?>
                                    <a href="<?php echo esc_url($teamsocialicon['social_link']); ?>" target="_blank" class="<?php echo esc_html($teamsocialicon['social_icon']); ?>"></a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

<?php elseif ($teamstyle == 'team_style_two'): ?>
    <div class="team-2">
        <?php foreach ($teammember as $memberteam) : ?>
            <div class="col-md-3 col-xs-6">
                <figure>
                    <?php
                    if (!empty($memberteam['member_img'])) :
                        $img = $memberteam['member_img']['url'];
                        ?>
                        <!-- image/photo wrapper -->
                        <div class="img-wrapper">
                            <img class="img-responsive img-center" src="<?php echo esc_url($img); ?>" alt="">
                        </div>
                    <?php endif; ?>

                    <!-- member info -->
                    <figcaption>
                        <!-- name -->
                        <?php if (!empty($memberteam['team_member_name'])) : ?>
                            <span class="name"><?php echo esc_html($memberteam['team_member_name']); ?></span>
                        <?php endif; ?>

                        <!-- position -->
                        <?php if (!empty($memberteam['team_member_position'])) : ?>
                            <span class="position"><?php echo esc_html($memberteam['team_member_position']); ?></span>
                        <?php endif; ?>

                        <!-- social sharing buttons -->
                        <ul class="social">
                            <?php $teamsocial = $memberteam['member_social_icon'] ?>
                            <?php foreach ($teamsocial as $teamsocialicon) : ?>
                                <li><a href="<?php echo esc_html($teamsocialicon['social_link']); ?>" target="_blank" class="<?php echo esc_html($teamsocialicon['social_icon']); ?>"></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </figcaption>

                </figure>
            </div>
        <?php endforeach; ?>
    </div>

<?php elseif ($teamstyle == 'team_style_three') : ?>
    <div class="team-4">
        <?php foreach ($teammember as $memberteam) : ?>
            <!-- team member -->
            <div class="col-md-3 col-xs-6">
                <figure>
                    <?php
                    if (!empty($memberteam['member_img'])) :
                        $img = $memberteam['member_img']['url'];
                        ?>
                        <div class="img-wrapper">
                            <img class="img-responsive img-center" src="<?php echo esc_url($img); ?>" alt="">
                        </div>
                    <?php endif; ?>

                    <!-- member info -->
                    <figcaption>
                        <!-- name -->
                        <?php if (!empty($memberteam['team_member_name'])) :
                            ?>
                            <span class="name"><?php echo esc_html($memberteam['team_member_name']); ?></span>
                        <?php endif; ?>

                        <!-- position -->
                        <?php if (!empty($memberteam['team_member_position'])) : ?>
                            <span class="position"><?php echo esc_html($memberteam['team_member_position']); ?></span>
                        <?php endif; ?>

                        <!-- social sharing buttons -->
                        <div class="social">
                            <?php $teamsocial = $memberteam['member_social_icon'] ?>
                            <?php foreach ($teamsocial as $teamsocialicon) : ?>
                                <a href="<?php echo esc_html($teamsocialicon['social_link']); ?>" target="_blank" class="<?php echo esc_html($teamsocialicon['social_icon']); ?>"></a>
                            <?php endforeach; ?>
                        </div>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>