<?php if (get_row_layout() == 'testimonial_module') : ?>
<?php
    $testimonial_text = get_sub_field('testimonial_text');
    $author = get_sub_field('author');
    $author_job_description = get_sub_field('author_job_description');
    $image = get_sub_field('image');
    

   ?>

<section class="container-fluid testimonial">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <img src="<?php echo $image['sizes']['large']; ?>"
                class="testimonialImage">
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1  col-lg-1 quotationCol">
            <span class="quotationMark"> &ldquo;</span>
        </div>

        <div class="col-xs-11 col-sm-11 col-md-6 col-lg-6 ">
            <p class="testimonial-txt">
                <?php echo $testimonial_text; ?>
            </p>
            <p class="authorTestimonial">
                <span class="bold autorTName"><?php echo $author; ?></span>
                <span class="autorJobdescription"><?php echo $author_job_description; ?></span>
            </p>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1  col-lg-1"></div>
    </div>
</section>
<?php endif;
