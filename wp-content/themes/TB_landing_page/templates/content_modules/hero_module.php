<?php if (get_row_layout() == 'hero_module') : ?>
<?php
    $header = get_sub_field('header');
    $text = get_sub_field('text');
   ?>

<section id="heroModule" class="container-fluid">
    <div>
        <h1>
            <?php echo $header; ?>
        </h1>
        <p>
            <?php echo $text; ?>
        </p>
    </div>
</section>
<?php endif;
