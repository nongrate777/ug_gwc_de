<?php if (function_exists('yoast_breadcrumb') && !is_front_page()) { ?>
    <div class="container">
        <?php yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); ?>
    </div>
<?php } ?>