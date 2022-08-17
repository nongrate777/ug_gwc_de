<?php
$id = DE_HOMEPAGE;

// if (is_front_page()) {
//     $id = DE_HOMEPAGE;
// }

// if (is_category()) {
//     $id = get_queried_object()->term_id;
// }

$faq = (is_category()) ?  carbon_get_term_meta($id, 'de_faq') : carbon_get_post_meta($id, 'de_faq');
if (!empty($faq)) {
    ?>
    <div id="faq" class="faq _light-white">
        <div class="container">
            <h2 class="_center">Unsere FAQs – häufig gestellte Fragen</h2>
            <?php foreach ($faq as $key => $item) { ?>
                <div class="faq__item">
                    <div class="faq__button <?= $key === 0 ? 'current' : '' ?>">
                        <?= $item['question'] ?>
                    </div>
                    <div class="faq__body <?= $key !== 0 ? '_hidden' : '' ?>">
                        <div class="faq__body-text">
                            <?= apply_filters('the_content', $item['answer']); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php
}