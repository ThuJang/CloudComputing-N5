<?php
defined('ABSPATH') || exit;
$theme_url = $notice['data']['theme_url']."?su_source=notice";
$theme_name = wp_get_theme()->name;
?>
<div class="notice notice-info is-dismissible <?php echo esc_attr($notice['unique_id']); ?>">
    <h2 class="notice-title"><?php echo esc_html(sprintf(__("Unlock All Features with %s Premium – Limited Time Offer", 'newslink-magazine'), $theme_name)); ?></h2>
    <p>
        <?php echo esc_html__("Take advantage of the up to", 'newslink-magazine'); ?> <span style='font-weight:bold;'><?php echo esc_html__("40% discount", 'newslink-magazine'); ?></span> <?php echo esc_html(sprintf(__("and unlock all features with %s Premium.", 'newslink-magazine'), $theme_name)); ?>
        <?php echo esc_html__("The discount is only available for a limited time.", 'newslink-magazine'); ?>
    </p>
    <p>
        <a style='margin-bottom:15px;' class='button button-large button-secondary' target='_blank' href='<?php echo esc_url($theme_url); ?>'><?php echo esc_html__("Read More", 'newslink-magazine'); ?></a> <a style='margin-bottom:15px;' class='button button-large button-primary' target='_blank' href='<?php echo esc_url($theme_url); ?>'><?php echo esc_html__("Upgrade Now", 'newslink-magazine'); ?></a>
    </p>
</div>