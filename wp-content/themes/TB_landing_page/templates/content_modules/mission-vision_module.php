<?php if (get_row_layout() == 'mission-vision_module') : ?>
<?php
    $mission_text = get_sub_field('mission_text');
    $vision_text = get_sub_field('vision_text');
    ?>

<section class="container-fluid m-v-module">
    <div class="row mission-container">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 container ">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 header-container">
                    <h1>Mission</h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 imageCol">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow-mission.png"
                        alt="graphic">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex align-items-center">
            <?php echo $mission_text ?>
        </div>
    </div>
    <div class="row vision-container">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4  d-flex align-items-center">
            <?php echo $vision_text ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 container ">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 imageCol">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/arrow-vision.png"
                        alt="graphic" class="arrow-vision">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 header-container">
                    <h1>Vision</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;
