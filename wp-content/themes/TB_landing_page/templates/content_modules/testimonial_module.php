<?php if (get_row_layout() == 'testimonial_module') : ?>
<?php
    $section_header = get_sub_field('section_header');
    $testimonial_text = get_sub_field('testimonial_text');
    $author = get_sub_field('author');
    $author_job_description = get_sub_field('author_job_description');
    $image = get_sub_field('image');
    $yellow_line_visible = get_sub_field('yellow_line_visible');
    $image_placement = get_sub_field('image_placement');
    if ($image_placement == 'Left'):
        $order_image = "order-1";
        $order_text = 'order-2';
         else:
         $order_image = "order-2";
        $order_text = 'order-1';
        endif;

    if ($yellow_line_visible == 0):
        $yellow_line = "yellow-line-unvisible";
    else:
        $yellow_line = "yellow-line-visible";
    endif;
   ?>

<section class="container-fluid testimonial">
    <div class="row">
        <div class="section-header col-12">
            <?php if ($section_header): echo $section_header; endif; ?>
        </div>
    </div>
    <div class="row">
        <div
            class="col-xs-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center <?php echo $order_image; ?> img-box">
            <img src="<?php echo $image['sizes']['large']; ?>"
                class="testimonialImage">
        </div>

        <div
            class="col-xs-11 col-sm-11 col-md-6 col-lg-6 <?php echo $order_text; ?> txt-box">
            <div class="testimonial-txt">
                <?php echo $testimonial_text; ?>
            </div>
            <p class="authorTestimonial">
                <span class="bold autorTName"><?php echo $author; ?></span>
                <span class="autorJobdescription"><?php echo $author_job_description; ?></span>
            </p>
        </div>
    </div>
    <div class="yellow-line <?php echo $yellow_line; ?>"></div>
</section>
<?php endif;
