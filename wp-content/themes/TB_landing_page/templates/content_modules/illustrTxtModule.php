<?php if (get_row_layout() == 'testimonial_module') : ?>
<?php
    $header = get_sub_field('header');
    $text = get_sub_field('text');
    $image = get_sub_field('image');
?>

<section id="illustrTxtModule" class="container-fluid">
    <div class="row rowIllustr">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 illustrTxtBox">
            <h1>
                Get study relevant work experience
            </h1>
            <p>
                Yeps, landing a study relevant job can be hard, while at the same time employers expect you to have
                experience. This is where Talent bank steps in to facilitate your growth into a confident professional
                and bridge the gap between companies and students.
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="<?php echo $image['sizes']['large']; ?>"
                alt="illustration" class="illustrationSmHomepage">
        </div>
        <div class="col-xs-0 col-sm-0 col-md-1 col-lg-1">
        </div>
    </div>
</section>
<?php endif;
