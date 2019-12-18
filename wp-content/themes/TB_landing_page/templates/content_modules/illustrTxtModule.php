<?php if (get_row_layout() == 'text_and_image_module') : ?>
<?php
    $section_header = get_sub_field('section_header');
    $header = get_sub_field('header');
    $text = get_sub_field('text');
    $image = get_sub_field('image');
    $image_placement = get_sub_field('image_placement');
    if ($image_placement == 'Left'):
        $image_padding = 'imageBox-left-padding';
        $order_image = "order-1";
        $order_text = 'order-2';
         else:
        $image_padding = 'imageBox-right-padding';
        $order_image = "order-2";
        $order_text = 'order-1';
        endif;
?>

<section id="illustrTxtModule" class="container-fluid">
    <div class="row">
        <div
            class="section-header col-12 <?php if (empty($section_header)): echo 'd-none'; endif; ?>">
            <h1> <?php if ($section_header): echo $section_header; endif; ?>
            </h1>
        </div>
    </div>
    <div class="row headerMbile">
        <div class="col-12">
            <h1>
                <?php echo $header; ?>
            </h1>
        </div>
    </div>
    <div class="row rowIllustr">
        <div
            class="col-xs-12 col-sm-12 col-md-5 col-lg-5 illustrTxtBox <?php echo $order_text; ?>">
            <h1>
                <?php echo $header; ?>
            </h1>

            <?php echo $text; ?>

        </div>
        <div
            class="col-xs-12 col-sm-12 col-md-7 col-lg-7 imageBox <?php echo $order_image; ?> <?php echo $image_padding; ?>">
            <img src="<?php echo $image['sizes']['large']; ?>"
                alt="illustration" class="illustrationSmHomepage">
        </div>

    </div>
</section>
<?php endif;
