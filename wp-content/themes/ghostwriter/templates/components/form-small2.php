<form class="js-form">
    <div class="form-small2">
        <div class="form-small2__wrap">
            <div class="form-small2__item">
                <input type="text" class="form-input2" name="name" placeholder="Vorname / Nickname">
            </div>
            <div class="form-small2__item">
                <input type="text" class="form-input2" name="email" placeholder="E-Mail">
            </div>
            <div class="form-small2__item">
                <input type="hidden" name="form-id" value="small-form" />
                <button class="form-btn form-btn_orange _w-100">
                    JETZT ANFRAGEN
                </button>
            </div>
        </div>
    </div>
<?php get_template_part('templates/components/form-custom-fields'); ?>
</form>