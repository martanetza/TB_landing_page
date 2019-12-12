<?php
if (function_exists('have_rows') && have_rows('content_modules')):

  while (have_rows('content_modules')) : the_row();
   
    require(get_theme_root() . '/TB_landing_page/templates/content_modules/testimonial_module.php');
    require(get_theme_root() . '/TB_landing_page/templates/content_modules/illustrTxtModule.php');
    require(get_theme_root() . '/TB_landing_page/templates/content_modules/hero_module.php');
    require(get_theme_root() . '/TB_landing_page/templates/content_modules/founder_module.php');
    require(get_theme_root() . '/TB_landing_page/templates/content_modules/cta_module.php');
    require(get_theme_root() . '/TB_landing_page/templates/content_modules/contact_module.php');
    require(get_theme_root() . '/TB_landing_page/templates/content_modules/subscribe_module.php');
   
   endwhile;

else:
    the_content();

endif;
