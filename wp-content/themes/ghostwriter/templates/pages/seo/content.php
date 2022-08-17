<div class="main-padding">
    <div class="container">
        <div class="default-content">
            <div class="right__column _light-white">
                <?php get_template_part('templates/components/managers-sidebar'); ?>
            </div>
            <?= apply_filters('the_content', get_the_content()); ?>
        </div>
    </div>
    <div class="clear"></div>
</div>