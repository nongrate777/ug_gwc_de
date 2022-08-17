<?php if (carbon_get_post_meta(get_the_ID(), 'text_1')) { ?>
    <div class="_light-white main-padding">
        <div class="container">
            <div class="default-content">
                <?= apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'text_1')); ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
<?php }