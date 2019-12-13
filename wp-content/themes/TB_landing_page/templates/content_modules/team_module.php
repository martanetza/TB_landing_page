<?php if (get_row_layout() == 'team_module') : ?>
<?php
    $header = get_sub_field('header');
    
   ?>

<section class="container-fluid team-module">
    <div class="row d-flex justify-content-center">
        <h1>Meet the team</h1>
    </div>
    <div class="row team-row">
        <?php
                $items = get_sub_field('team_module_content');
                foreach ($items as $item):
                $name = $item['name'];
                $role = $item['role'];
                $image = $item['image'];
                ?>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex flex-column text-center">
            <div>
                <img src="<?php echo $image['sizes']['large']; ?>"
                    alt="team image" class="teamImage">
            </div>
            <div>
                <p class="bold"><?php echo $name; ?>
                </p>
                <p><?php echo $role; ?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif;
