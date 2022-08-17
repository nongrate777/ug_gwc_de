<div class="_light-white main-padding">
    <div class="container">
        <div class="default-content">
            <?= apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'text_faq')); ?>
        </div>
    </div>
    <div class="clear"></div>
    <br />
    <div class="container">
        <h2 class="_center">Kontaktieren Sie uns jetzt</h2>
        <div class="first-screen__form">
            <?php get_template_part('templates/components/form-small'); ?>
        </div>
    </div>
</div>