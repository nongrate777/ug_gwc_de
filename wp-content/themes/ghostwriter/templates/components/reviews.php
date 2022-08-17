<?php
$reviews = get_posts([
    'post_status' => 'publish',
    'post_type' => 'reviews'
]);
if (!empty($reviews)) {
    ?>
    <div class="reviews _light-white main-padding">
        <div class="container">
            <div class="reviews__title _center">
                <h2>Bewertungen unserer Kunden</h2>
            </div>
            <div class="reviews__content js-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($reviews as $review) { ?>
                        <div class="reviews__content-item swiper-slide">
                            <div class="reviews__content-profile">
                                <div class="reviews__content-profile-name"><?= $review->post_title; ?></div>
                                <div class="reviews__content-profile-rating">
                                    <?= carbon_get_post_meta($review->ID, 'num'); ?>
                                </div>
                            </div>
                            <div class="reviews__content-country">
                                <?= carbon_get_post_meta($review->ID, 'city'); ?>
                            </div>
                            <div class="reviews__content-title">
                                <?= carbon_get_post_meta($review->ID, 'title'); ?>
                            </div>
                            <div class="reviews__content-text">
                                <?= $review->post_content; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="arrows">
                    <div class="arrows-arrow js-prev"></div>
                    <div class="arrows-arrow js-next"></div>
                </div>
            </div>
        </div>
    </div>
<?php
}
wp_reset_postdata();