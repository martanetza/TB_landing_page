<?php if (get_row_layout() == 'founder_module') : ?>
<?php
    $header = get_sub_field('header');
    $text = get_sub_field('text');
    $image = get_sub_field('image');
   ?>

<section class="container-fluid founderModule">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h1><?php echo $header; ?>
            </h1>
        </div>
        <div class="col-xs-0 col-sm-0 col-md-6 col-lg-6 empty">
        </div>
    </div>
    <div class="row row2">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <?php echo $text; ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 d-flex text-center">
            <img src="<?php echo $image['sizes']['large']; ?>"
                alt="Founder" id="founderImg">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-4 col-lg-4">
        </div>
        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4">
            <img src="../img/zigzag.PNG" alt="graphic" id="zigzag">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-4 col-lg-4 logo">
        </div>
    </div>
</section>
<?php endif;
