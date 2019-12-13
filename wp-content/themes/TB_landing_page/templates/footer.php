<footer class="container content-info" role="contentinfo">
  <section class="container-fluid footerModule">
    <div class="row">
      <!-- column left with logo -->
      <div class="col-xs-0 col-sm-0 col-md-4 col-lg-4 logo">
        <img
          src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png"
          alt="logo">
      </div>
      <!-- column right -  container-->
      <div class="container col-xs-12 col-sm-12 col-md-6 col-lg-6 placeholder">
        <div class="row">
          <!-- column SoMe - container-->
          <div class="container col-xs-12 col-sm-12 col-md-6 col-lg-6 followPlaceholder">
            <div class="row-fluid followUs">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p>Follow us:</p>
              </div>
            </div>
            <div class="row soMEdiv">
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 somePlaceholder"><img
                  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/SoMe-Insta.PNG"
                  alt="Instagram" class="soMeIcon"></div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 somePlaceholder"><img
                  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/SoMe-Linked.PNG"
                  alt="LinkedIn" class="soMeIcon"></div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 somePlaceholder"><img
                  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/SoMe-fb.PNG"
                  alt="Facebook" class="soMeIcon"></div>
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 empty"></div>
        </div>

        <div class="row bottomRow">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 rightsReserved">© Talent bank, 2019. We love our students!
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 termsPrivacy">
            <span class="underline">Privacy</span>
            <span class="underline">Terms</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>

<?php
  $text = get_field('text', option);
  $some_icon = get_field('some_icon', option);

?>

<?php if ($some_icon) : ?>

<div class="fixed-facebook-module d-flex flex-row align-items-center">
  <h5>
    <?php echo  $text; ?>
  </h5>
  <div>
    <img
      src="<?php echo  $some_icon['sizes']['large']; ?>">
  </div>

</div>
<?php endif; ?>


<?php wp_footer();
