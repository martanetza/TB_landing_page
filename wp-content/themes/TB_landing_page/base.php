<?php get_template_part('templates/head'); ?>
<?php if (is_page(213) || $post->post_parent == 213) : ?>

<body id="business-wrapper" <?php body_class(); ?>>
  <?php else : ?>

  <body <?php body_class(); ?>>
    <?php endif; ?>

    <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
        get_template_part('templates/header-top-navbar');
    } else {
        get_template_part('templates/header');
    }
  ?>

    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main main col-sm-12" role="main">
          <div class="row no-mobile">
            <?php include roots_template_path(); ?>
          </div>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->

    <?php get_template_part('templates/footer'); ?>

  </body>

  </html>