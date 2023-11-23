<?php



add_shortcode('tinh_nang_noi_bat', function () {
    $feature = get_field('tinh_nang_nổi_bật');
    $featureObj = get_field_object('tinh_nang_nổi_bật');

    if (!empty($feature)) {
        ?>
        <div class="feature-block">
            <h4 class="feature-title"><?php echo $featureObj['label']; ?></h4>
            <div class="feature-content">
                <?php echo $feature; ?>
            </div>
        </div>
        <?php
    }
});



add_shortcode('custom_sidebar', function () {
    ?>
    <div class="sidebar-inner">
        <?php
        dynamic_sidebar('product-sidebar');
        ?>
    </div>
<?php
});


