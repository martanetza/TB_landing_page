<?php if (get_row_layout() == 'cta_module') : ?>
<?php
    $header = get_sub_field('header');
    $button_text = get_sub_field('button_text');
   ?>

<section class="container-fluid cta">
    <div class="row ctaRow">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ctaColumn1">
            <h1><?php echo $header; ?>
            </h1>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ctaColumn2">
            <button><?php echo $button_text; ?></button>
        </div>
    </div>
</section>
<?php endif;
