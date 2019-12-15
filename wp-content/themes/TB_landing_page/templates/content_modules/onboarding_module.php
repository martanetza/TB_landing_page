<?php if (get_row_layout() == 'onboarding_module') : ?>
<?php
    $header = get_sub_field('header');
    $step_1_image = get_sub_field('step_1_image');
    $step_2_image = get_sub_field('step_2_image');
    $step_3_image = get_sub_field('step_3_image');
    $step_1_text = get_sub_field('step_1_text');
    $step_2_text = get_sub_field('step_2_text');
    $step_3_text = get_sub_field('step_3_text');
    ?>
<section class="container-fluid onboarding-module">
    <div class="row d-flex text-center">
        <h1> <?php echo $header ?>
        </h1>
    </div>
    <div class="row  ">
        <!--kolumna i 2 wiersze-->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 container d-flex flex-column text-center illustrColumn step1">
            <div class="illustrRow rowStep1 align-text-bottom">
                <img src="<?php echo $step_1_image['sizes']['large']; ?>"
                    alt="step1">
            </div>
            <div class="text text-left">
                <?php echo $step_1_text; ?>
            </div>
        </div>
        <!--kolumna i 2 wiersze-->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 container d-flex flex-column text-center illustrColumn step2">
            <div class="illustrRow rowStep2  align-text-bottom">
                <img src="<?php echo $step_2_image['sizes']['large']; ?>"
                    alt="step2">
            </div>
            <div class="text text-left row2step2">
                <?php echo $step_2_text; ?>
            </div>
        </div>

        <!--kolumna i 2 wiersze-->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 container d-flex flex-column text-center illustrColumn step3">
            <div class="illustrRow rowStep3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex align-bottom align-baseline">
                    <img src="<?php echo $step_3_image['sizes']['large']; ?>"
                        alt="step3">
                </div>
            </div>
            <div class="text text-left">
                <?php echo $step_3_text; ?>
            </div>
        </div>
        <!--koniec kolumny 2-->
    </div>
</section>

<?php endif;
