<div class="container">
    <h1><?php single_cat_title(); ?></h1>
</div>
<div class="main-padding">
    <div class="container">
        <div class="blog">
            <?php while (have_posts()) { the_post(); ?>
                <div class="blog__block">
                    <div class="blog__block-images">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" />
                    </div>
                    <div class="blog__block-content">
                        <div class="blog__block-status">
                            <?= get_the_category(get_the_ID())[0]->name; ?>
                        </div>
                        <div class="blog__block-title">
                            <h3>
                                <a href="<?= get_the_permalink(); ?>">
                                    <?= get_the_title(); ?>
                                </a>
                            </h3>
                        </div>
                        <div class="blog__block-text">
                            <?= get_the_excerpt(); ?>
                        </div>
                        <div class="blog__block-info">
                            <div class="blog__block-author">
                                Prof. Dr.
                                <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
                                    <?= get_the_author_meta('display_name', get_the_author_meta('ID')); ?>
                                </a>
                            </div>
                            <div class="blog__block-date">
                                <time class="text-time"><?= get_the_date(); ?></time>
                            </div>
                            <div class="blog__block-btn">
                                <a href="<?= get_the_permalink(); ?>">Artikel lesen</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?= get_the_posts_pagination([
            'prev_next' => false,
            'screen_reader_text' => ' ',
            'aria_label' => '',
        ]); ?>
    </div>
</div>