<?php if (get_row_layout() == 'values_module') : ?>


<section class="container-fluid values-module">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 d-flex text-center">
            <h1>Values</h1>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
    <div class="row">
        <?php
                $items = get_sub_field('values_module_content');
                foreach ($items as $item):
                $text = $item['text'];
                ?>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <?php echo $text; ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>
</section>
<?php endif;
