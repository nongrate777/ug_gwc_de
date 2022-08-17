<?php if (carbon_get_post_meta(get_the_ID(), 'text_black_fon')) { ?>
    <div class="_black main-padding black__fon">
        <div class="container">
            <div class="default-content">
                <?= apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'text_black_fon')); ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
<?php }