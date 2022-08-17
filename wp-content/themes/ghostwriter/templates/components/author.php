<div class="author-card">
    <div class="author-card__image">
        <img src="<?= carbon_get_user_meta(get_the_author_meta('ID'), 'de_avatar'); ?>" />
    </div>
    <div class="author-card__info">
        <h3><?= get_the_author_meta('display_name', get_the_author_meta('ID')); ?></h3>
        <div class="author-card__info-meta">Autor, Doctor</div>
        <p><?= get_the_author_meta('description', get_the_author_meta('ID')); ?></p>
    </div>
</div>