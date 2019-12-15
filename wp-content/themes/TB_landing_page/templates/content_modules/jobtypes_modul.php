<?php if (get_row_layout() == 'job_types_module') : ?>
<?php
    $header = get_sub_field('header');
    $subheader = get_sub_field('subheader');
   ?>

<section class="container-fluid jobtypesModule">
    <div class="row d-flex justify-content-center row1jobs">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex text-center row1-col1">
            <h1><?php echo $header; ?>
            </h1>
        </div>
    </div>
    <div class="row d-flex text-center row2jobs">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex text-center row2-col1">
            <span><?php echo $subheader; ?></span>
        </div>
    </div>
    <div class="row row3jobs">

        <?php
                $items = get_sub_field('job_types_module_content');
                foreach ($items as $item):
                $icon = $item['icon'];
                $label = $item['label'];
                ?>

        <div class="col-6 col-md-3 col-lg-3 d-flex flex-column align-items-center align-content-ceter">
            <img src="<?php echo $icon['sizes']['large']; ?>"
                alt="jobtype icon">
            <p><?php echo $label; ?>
            </p>
        </div>
        <?php endforeach; ?>

    </div>

    <div class="row d-flex justify-content-center row4jobs">
        <div class="col-6 d-flex align-items-center">
            <span class="jobtypeQuestions">Still have questions?</span>
        </div>
        <div class="col-6">
            <button class="jobtypesButton">Contact</button>
        </div>
    </div>
</section>
<?php endif;
