<?php if (get_row_layout() == 'founder_module') : ?>
<?php
    $header = get_sub_field('header');
    $text = get_sub_field('text');
    $image = get_sub_field('image');
   ?>

<section class="container-fluid founderModule">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mobile-header">
            <h1><?php echo $header; ?>
            </h1>
        </div>
    </div>
    <div class="row row2">
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
            <h1 class="desktop-header"><?php echo $header; ?>
            </h1>
            <?php echo $text; ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <img src="<?php echo $image['sizes']['large']; ?>"
                alt="Founder" id="founderImg">
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/zigzag.PNG"
                alt="graphic" id="zigzag">
        </div>

    </div>
</section>
<?php endif;
