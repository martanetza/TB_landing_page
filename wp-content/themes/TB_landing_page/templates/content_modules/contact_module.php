<?php if (get_row_layout() == 'contact_module') : ?>
<?php
    $header = get_sub_field('header');
    $text_contact = get_sub_field('text_contact');
    $text_subscribe = get_sub_field('text_subscribe');
    $image = get_sub_field('image');
    $address = get_sub_field('address');
    

   ?>

<section class="container-fluid contact">
    <div class="row">
        <div class="col-12">
            <h1><?php echo $header; ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 container text-container">
            <div class="row">
                <div class="col-12">
                    <?php echo $text_contact; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <?php echo $address; ?>
                </div>
                <div class="col-6">
                    <?php echo $image; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php echo $text_subscribe; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php gravity_form('Subscribe', false, false, false, '', false); ?>
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
                <div class="col-12">
                    <?php gravity_form('Contact', false, false, false, '', false); ?>
                </div>
            </div>

        </div>

    </div>
</section>
<?php endif;
