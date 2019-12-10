<?php
if (function_exists('have_rows') && have_rows('content_modules')):

  while (have_rows('content_modules')) : the_row();
   
    require(get_theme_root() . '/TB_landing_page/templates/content_modules/testimonial_module.php');
   
   endwhile;

else:
    the_content();

endif;
