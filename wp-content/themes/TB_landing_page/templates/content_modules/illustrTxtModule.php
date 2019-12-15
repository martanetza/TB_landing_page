<?php if (get_row_layout() == 'text_and_image_module') : ?>
<?php
    $header = get_sub_field('header');
    $text = get_sub_field('text');
    $image = get_sub_field('image');
    $image_placement = get_sub_field('image_placement');
    if ($image_placement == 'Left'):
        //  $text_padding_cls = "text-container-padding-left";
        $order_image = "order-1";
        $order_text = 'order-2';
         else:
        //  $text_padding_cls = "text-container-padding-right";
        $order_image = "order-2";
        $order_text = 'order-1';
        endif;
?>

<section id="illustrTxtModule" class="container-fluid">
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
            class="col-xs-12 col-sm-12 col-md-7 col-lg-7 imageBox <?php echo $order_image; ?>">
            <img src="<?php echo $image['sizes']['large']; ?>"
                alt="illustration" class="illustrationSmHomepage">
        </div>

    </div>
</section>
<?php endif;
