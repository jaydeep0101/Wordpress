<!-- 
    Template Name: Home
 -->

 <?php
    get_header();
 ?>
 <!-- Hero Section Start -->
 <section class="hero-section">
  <div class="hero__main">
    <div class="container">
      <div class="row">
        <div class=" col-xl-5 col-lg-6 col-md-6 custom__padding--all "  data-aos="fade-up"
     data-aos-anchor-placement="top-center">
          <div class="hero__main--caption">
            <span><?php the_field('marketing_title'); ?></span>
            <?php $h2_font_size = get_field('rang');?>
            <h1 style="font-size:<?php echo $h2_font_size ?>px"><?php the_field('marketing_large_title'); ?></h1>
            <p><?php the_field('marketing_text'); ?></p>
            <div class="banner__services--btn">
              <a href="#" class="header__btn_0 common__btn header__banner__btn"><?php the_field('marketing_button'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 custom__padding--all  " >
          <div class="hero__main--video-icon">
          	<a class="popup-youtube popup-video btn-icon"  href="https://www.youtube.com/watch?v=bY-mOdgz7zQ"><i class="fas fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- Services Section Start -->
<!-- <section class="services padding__bottom pulse wow"> -->
<section class="services padding__bottom "data-aos="zoom-in">
  <div class="services__main">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-8 col-md-10 custom__padding--all">
      <div class="services__title">
        <span class="text-center"><?php the_field('our_services_sub_title'); ?></span>
        <h2> <?php the_field('our_services_title'); ?> </h2>
      </div>
        </div>
      </div>
      <div class="row">
          <?php
      if( have_rows('our_services_reapeter') ) {
          while(have_rows('our_services_reapeter')) {
              the_row();

        ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 custom__padding--all">
          <div class="services__box services__box-<?php echo get_row_index(); ?>">
            <h5> <a href="#"><?php echo get_sub_field('our_services_reapeter_title'); ?></a></h5>
            <div class="services__box--icon">
              <img src="<?php echo get_sub_field('our_services_reapeter_image'); ?>" >

            </div>
            <div class="services__box--description">
              <p><?php echo get_sub_field('our_services_reapeter_text'); ?></p>
            </div>
          </div>
        </div>
        <?php } } ?>
      </div>
    </div>
    <div class="services__shape--one">
    	<img src="<?php the_field('our_services_first_bg_image') ?>"  >
    </div>
    <div class="services__shape--two">
    	<img src="<?php the_field('our_services_second_bg_image') ?>" >
    </div>
  </div>
</section>
<!-- Services Section End -->

<!-- About Section Start -->
<section class="aboutus">
  <div class="aboutus__main">
    <div class="container">
      <div class="row align-items-center">
        <!-- <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 custom__padding--all wow fadeInLeftBig"> -->
        <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 custom__padding--all " data-aos="fade-right" >
          <div class="aboutus__main--image">
          	<img src="<?php the_field('about_image'); ?>" class="" >
          </div>
        </div>
        <!-- <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-9 custom__padding--all wow fadeInRightBig"> -->
        <div class="offset-xxl-1 col-xxl-5 col-xl-6 col-lg-6 col-md-9 custom__padding--all " data-aos="fade-left">
          <div class="aboutus__main--caption ">
            <div class="aboutus__main--caption--title">
              <span ><?php the_field('about_sub_title'); ?> </span>
              <h2><?php the_field('about_title'); ?></h2>
              <p><?php the_field('about_description_first'); ?></p>
              <p class="mb-40 aboutus__main--caption--title-second-para  "><?php the_field('about_description_second'); ?></p>
            </div>
            <a href="#" class="browse-btn"><?php the_field('about_description_button'); ?></a>
          </div>    
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

<!-- Pricing Tabing Section Start -->
<!-- <section class="pricingcard wow  fadeInUpBig"> -->
<section class="pricingcard " data-aos="zoom-in">
  <div class="pricingcard__main">
    <div class="container pricingcard__background">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-7 col-md-10">
          <div class="pricingcard__title">
            <span><?php the_field('pricing_sub_title'); ?></span>
            <h2><?php the_field('pricing_title'); ?></h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-12 custom__padding--all">
          <div class="pricing__nav--btn">
            <nav>
              <div class="nav nav-tabs">
                <a class="nav-link tab-link current" data-tab="tab-1"><?php the_field('pricing_tab_title_first'); ?></a>
                <a class="nav-link nav-link-second tab-link" data-tab="tab-2"><?php the_field('pricing_tab_title_second'); ?></a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="container pricingcard__background pricingcard__background--second "> 
      <div class="tab-content-main">
        <div id="tab-1" class="tab-content current ">
          <div class="row">
            <?php
              if(have_rows('pricing_tab_reapeter')) {
                while(have_rows('pricing_tab_reapeter')) {
                  the_row();
            ?>
          	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10  custom__padding--all">
              <div class="pricing__single--card text-center mb-30">
                <div class="pricingcard__top">
                  <div class="pricingcard__top--icon">
                  	<img src="<?php the_sub_field('pricing_image'); ?>"/>
                  </div>
                  <span> <?php the_sub_field('pricing_image_title'); ?> </span>
                </div>
                <div class="pricingcard__middle">
                  <h4><?php the_sub_field('pricing_image_price'); ?></h4>
                </div>
                <div class="pricingcard__bottom">
                  <ul>
                    
                  <?php
                    if(have_rows('pricing_sub_reapeter')) {
                      while(have_rows('pricing_sub_reapeter')) {
                        the_row();

                  ?>
                    
                    <li><?php the_sub_field('pricing_list_data') ?></li>
                    
                    <?php } } ?>
                  </ul>
                  <a href="#"><?php the_sub_field('pricing_tab_button') ?></a>
                </div>
              </div>
            </div>
            <?php } } ?>
          </div>
        </div>
        <div id="tab-2" class="tab-content ">
          <div class="row">
          <?php
                    if(have_rows('pricing_tab_second_reapeter')) {
                      while(have_rows('pricing_tab_second_reapeter')) {
                        the_row();
                  ?>
          	<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 custom__padding--all">
              <div class="pricing__single--card text-center mb-30">
                <div class="pricingcard__top">
                <div class="pricingcard__top--icon">
                  	<img src="<?php the_sub_field('pricing_second_image'); ?>"/>
                  </div>
                  <span> <?php the_sub_field('pricing_image_second_title'); ?> </span>
                </div>
                <div class="pricingcard__middle">
                  <h4><?php the_sub_field('pricing_image_second_price'); ?></h4>
                </div>
                <div class="pricingcard__bottom">
                  <ul>
                  <?php
                    if(have_rows('pricing_sub_second_reapeter')) {
                      while(have_rows('pricing_sub_second_reapeter')) {
                        the_row();
                  ?>
                    <li><?php the_sub_field('pricing_list_second_data') ?></li>
                    <?php } } ?>
                  </ul>
                  <a href="#"><?php the_sub_field('pricing_tab_second_button') ?></a>
                </div>
              </div>
            </div>
            <?php } }  ?>
          </div>	  
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pricing Tabing Section End -->

<!-- Why Choose Section Start -->

<section>
  <div class="chooseus__main ">
    <div class="container">
      <div class="row chooseus__content">
        <div class="col-xxl-5 col-xl-7 col-lg-6 col-md-8 custom__padding--all" >
          <div class="chooseus__title">
            <span><?php the_field('why_choose_title'); ?></span>
            <h2><?php the_field('why_choose_sub_title'); ?></h2>
          </div>
        </div>
        <div class="col-xxl-7 col-xl-5 col-lg-6 col-md-4 custom__padding--all">
          <a href="#" class="browse-btn f-right"><?php the_field('why_choose_button'); ?></a>
        </div>
      </div>
      <div class="row chooseus__content--second">
        <div class="col-xl-5 col-lg-7 col-md-10 custom__padding--all">
          <div class="chooseus__caption">
            <div class="row chooseus__caption--content mt-40 chooseus__caption--content-top ">
              <div class="col-xl-5 col-lg-5 col-md-6 col-sm-5 custom__padding--all">
                <div class="chooseus__caption--content-single">
                  <div class="chooseus__caption--content-single-counter">
                    <span class="counter-title"><?php the_field('why_choose_price_first'); ?></span>
                    <p><?php the_field('why_choose_plus_icon'); ?></p>
                  </div>
                  <div class="chooseus__caption--content-single-descrition">
                    <p><?php the_field('why_choose_price_text_first'); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 col-lg-5 col-md-6 col-sm-5 custom__padding--all">
              	<div class="chooseus__caption--content-single-second">
                  <div class="chooseus__caption--content-single-counter">
                    <span class="counter-title"><?php the_field('why_choose_price_second'); ?></span>
                  </div>
                  <div class="chooseus__caption--content-single-descrition">
                    <p><?php the_field('why_choose_price_text_second'); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-7 col-lg-5 col-md-10 custom__padding--all">
          <div class="about-right-cap">
            <p><?php the_field('why_choose_description_first'); ?></p>
            <p><?php the_field('why_choose_description_second'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Why Choose Section End -->

<!-- Slider Start -->

<div classs="brand-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 custom__padding--all">
        <div class="brand-active">
          <div class="slick-list draggable">
            <!-- Create your own class for the containing div -->
            <div class="slick-carousel">
              <!-- Inside the containing div, add one div for each slide -->
              <?php 
                if (have_rows('why_choose_slick_slider')) {
                  while (have_rows('why_choose_slick_slider')) {
                    the_row();
              ?>
              <div>                
                <img src="<?php the_sub_field('why_choose_slick_image'); ?>" />
              </div>
              <?php } } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Slider End -->


<!-- Case Study Section Start -->
<section class="study">
  <div class="study__main">
    <div class="container">
      <div class="row study__content">
        <div class="col-xl-5 col-lg-8 col-md-10 custom__padding--all">
          <div class="study__title">
            <span><?php the_field('case_study_title'); ?></span>
            <h2><?php the_field('case_study_sub_title'); ?></h2>
          </div>
        </div>
      </div>
      <div class="sutps-active">
      <button class="slick-prev slick-arrow custom-slick-prev">
        <!-- <i class="fa-solid fa-chevron-left"></i> -->
      </button>
      <div class="slick-list draggable">
        <div class="study-carousel ">
          <?php 
          if (have_rows('case_study_reapeater')) {
            while (have_rows('case_study_reapeater')) {
              the_row();
          ?>
          <div>                
            <img src="<?php the_sub_field('case_study_image'); ?>"/>
            <div class="guest-contents">
              <p><?php the_sub_field('case_study_text'); ?></p>
              <h3><a href="#"><?php the_sub_field('case_study_description'); ?></a></h3>
            </div>
          </div>              
          <?php } } ?>
        </div>
      </div>
      <button class="slick-next slick-arrow custom-slick-next">
        <!-- <i class="fa-solid fa-chevron-right"></i> -->
      </button>
      </div>
    </div>
  </div>
</section>
<!-- Case Study Section End -->

<!-- Testimonation Section Start -->
<section class="">
  <div class="testimonial_main "data-aos="flip-left">
    <div class="container">
      <div class="row testimonial__content">
        <div class="col-xl-8 custom__padding--all">
          <div class="main__swiper--content testimonial__swiper">
            <div class="slick-list draggable">
              <div class="testimonial-carousel slick-carousel">
                <?php
                  if (have_rows('testimonation_reapeter')) {
                    while(have_rows('testimonation_reapeter')) {
                      the_row();
                ?>
                <div class="swiper__caption">
                  <div class="swiper__caption--top">
                    <img src="<?php the_sub_field('testimonation_image'); ?>"/>
                    <p><?php the_sub_field('testimonation_title'); ?></p>
                  </div>
                  <div class="testimonial-founder">
                    <div class="testimonial-founder-image">
                      <span><?php the_sub_field('testimonation_author_title'); ?></span>
                    </div>
                  </div>
                </div>             
                <?php
                  }
                }
                ?>
              </div>
            </div>

            <!-- pagination dots -->
            <div class="swiper-pagination"></div>
            <!-- !pagination dots -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Testimonation Section End -->

<!-- Contact Section Srtart -->
<section class="">
  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="offset-xl-6 offset-lg-5 col-xl-5 col-lg-7 col-md-9 col-sm-12 custom__padding--all" data-aos="flip-left"  data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
          <div class="single__contact">
            <div class="single__contact--caption">
              <h5><?php the_field('contact_title'); ?></h5>
              <p><?php the_field('contact_description'); ?></p>
              <a href="#"><?php the_field('contact_button'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
</section>
<!-- Contact Section End -->


<?php
get_footer();
?>