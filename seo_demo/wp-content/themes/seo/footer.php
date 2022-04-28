<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seo
 */

?>

	
<footer class="footer">
  <div class="footer-wrapper">
    <div class="container">
      <div class="row footer__content">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8 custom__padding--all">
          <div class="footer__inner">
            <div class="footer__caption--first">
              <div class="footer__logo">
                <a href="#">                	
                  <img src="<?php the_field('footer_logo') ?>"/>
                </a>
              </div>
              <div class="footer__title">
                <div class="footer__para">
                  <p><?php the_field('footer_description') ?></p>
                </div>
                <ul class="footer__icons">
                	<?php
						if(have_rows('footer_icons_reapeter')) {
							while(have_rows('footer_icons_reapeter')) {
								the_row();
							
					?>
                  <li>
                    <a href="#">
                      <i class="<?php the_sub_field('footer_icons') ?>"></i>
                    </a>
                  </li>
                  	<?php
						}
					}  
					?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 custom__padding--all">
          <div class="footer__caption">
            <div class="footer__caption--title">
              <h4><?php the_field('footer_first_title'); ?></h4>
              <ul>
				<?php
					// wp_nav_menu(array('theme_location'=> 'Primary'))
					wp_nav_menu(
						array(
							'theme_location' => 'Primary'
						)
					)
				?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 custom__padding--all">
        	<div class="footer__caption">
            <div class="footer__caption--title">
              <h4><?php the_field('footer_second_title'); ?></h4>
              <ul>
			  <?php

				wp_nav_menu(
						array(
							'theme_location' => 'PrimaryServices'
						)
					)
				?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 custom__padding--all">
        	<div class="footer__caption">
            <div class="footer__caption--title">
              <h4><?php the_field('footer_third_title'); ?></h4>
              <ul>
			  <?php
					wp_nav_menu(
						array(
							'theme_location' => 'PrimaryServices'
						)
					)
				?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 custom__padding--all">
        	
          <div class="footer__caption">
            <div class="footer__caption--title">
              <h4><?php the_field('footer_fourth_title'); ?></h4>
              <ul>
                <li>
                  <a href=""><?php the_field('footer_contact_text'); ?></a>  
                </li>
                <li> 
                  <a class="contact__email" href="mailto:someone@example.com"><?php the_field('footer_contact_email'); ?></a>
                </li>
                <li> 
                  <a class="contact__number" href="tel:<?php the_field('footer_contact_number') ?>"><?php the_field('footer_contact_number'); ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom--wrapper">
    <div class="container">
      <div class="footer-border">
        <div class="row">
          <div class="col-12">
            <div class="footer__copyright">
              <p><?php the_field('footer_end_copyright'); ?><i class="<?php the_field('footer_copyright_icon'); ?>"></i><?php the_field('footer_copyright_by'); ?><a href="#"><?php the_field('footer_colorib'); ?></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<div id="back-top" style="display: block;">
<a class="wrapper" title="Go to Top" href="#">
<div class="arrows-container">
<div class="arrow arrow-one"> </div>
<div class="arrow arrow-two"> </div>
</div>
</a>
</div>


<?php wp_footer(); ?>





    <!-- Jquery Library File -->
   </body>
</html>
