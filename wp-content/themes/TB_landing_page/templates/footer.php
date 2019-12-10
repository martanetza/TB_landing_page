<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    </p>
  </div>
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
