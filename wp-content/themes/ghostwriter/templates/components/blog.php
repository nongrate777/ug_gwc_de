<div class="blog main-padding">
    <div class="container">
        <h2 class="_center">Passende Artikel</h2>
        <div class="blog-wrap js-slider">
            <div class="swiper-wrapper">
                <?php
                $items = get_posts([
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                ]);
                foreach ($items as $item) {
                    $excerpt = strip_tags(strip_shortcodes(get_the_excerpt($item->ID)));
                    $words = explode(' ', $excerpt, 15);

                    if (count($words) >= 15) {
                        array_pop($words);
                        $excerpt = implode(' ', $words);
                        $excerpt .= '...';
                    }
                    ?>
                    <div class="blog__item swiper-slide">
                        <div class="blog__item-image">
                            <img src="<?= get_the_post_thumbnail_url($item->ID, 'large'); ?>"
                                 alt="<?= get_the_title($item->ID); ?>"
                            />
                        </div>
                        <div class="blog__item-title">
                            <a href="<?= get_the_permalink($item->ID); ?>">
                                <?= get_the_title($item->ID); ?>
                            </a>
                        </div>
                        <div class="blog__item-text">
                            <div>Autor, Doctor
                                <span>
                                    <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <?= get_the_author_meta('display_name', get_the_author_meta('ID')); ?>
                                    </a>
                                </span>
                            </div>
                            <div>Veröffentlicht <span><?= get_the_date('d.m.Y', $item->ID); ?></span></div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="arrows">
                <div class="arrows-arrow js-prev"></div>
                <div class="arrows-arrow js-next"></div>
            </div>
        </div>
    </div>
</div>