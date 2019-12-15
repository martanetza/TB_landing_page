<?php if (get_row_layout() == 'subscribe_module') : ?>
<?php
    $text = get_sub_field('text');
   ?>

<section class="container-fluid subscribe">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 d-flex align-items-end">
            <?php echo $text; ?>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <?php gravity_form('Subscribe', false, false, false, '', false); ?>
        </div>
    </div>
</section>
<?php endif;
