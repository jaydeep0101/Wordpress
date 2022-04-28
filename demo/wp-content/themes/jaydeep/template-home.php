<?php
/*
 Template Name: home
 */

 get_header();
 ?>


        <!-- main start -->
        <main>

            <!-- banner start -->
            <section id="home">
                <div class="banner">
                    <div class="container p-0">
                        <div class="banner__inner">
                            <div class="banner__overlay">
                                <div class="row">
                                    <div class="col-lg-8 col-12">
                                        <div class="banner__title">
                                            <h1><?php the_field('header_banner');?></h1>
                                        </div>
                                        <div class="banner__text">
                                            <p><?php the_field('header_description');?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 cool-12"></div>
                                </div>
                                <div class="banner__form">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-7 col-7">
                                                <div class="banner__form-drop">
                                                    <p><?php the_field('header_date');?></p>
                                                    <input type="date" name="" id="">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-5 col-5">
                                                <div class="banner__form-drop first">
                                                    <p><?php the_field('header_guest');?></p>
                                                    <span>
                                                        <select name="" id="">
                                                        <?php if( have_rows('header_guest_reapeter') ) {
                                                                while( have_rows('header_guest_reapeter') ) {
                                                                    the_row();
                                                        ?>
                                                            <option value="01"><?php the_sub_field('text') ?></option>
                                                            <?php }  }?>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-7 col-7">
                                                <div class="banner__form-drop mb-sm-0">
                                                <p><?php the_field('header_location');?></p>
                                                    <span class="drop">
                                                        <select name="" id="">
                                                        <?php if( have_rows('header_location_reapeter') ) {
                                                             while( have_rows('header_location_reapeter') ) {
                                                                the_row();
                                                        ?>
                                                            
                                                            <option value="01"><?php the_sub_field('text') ?></option>
                                                        
                                                            <?php } } ?>
                                                        </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-5 col-5">
                                                <div class="banner__form-btn mb-sm-0">
                                                    <button>
                                                        <span><span class="iconify" data-icon="<?php the_field('header_search_icon');?>" data-width="25"></span></span>
                                                        <?php the_field('header_search');?>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner end -->

            <!-- service start -->
            <section id="service">
                <div class="service">
                    <div class="container">
                        <div class="service__inner">
                            <div class="service__main">
                                <div class="service__title title">
                                    <h2><?php the_field('services_title');?></h2>
                                </div>
                                <div class="service__text text">
                                    <p><?php the_field('services_description');?></p>
                                    <a href="#"><?php the_field('services_view_all');?> <span><span class="iconify" data-icon="<?php the_field('services_icon');?>" data-width="40"></span></span></a>
                                </div>
                            </div>
                            <div class="row service__slider">
                                <div class="swiper-wrapper">
                                <?php if( have_rows('services_slider') ) {
                                          while( have_rows('services_slider') ) {
                                            the_row();
                                ?>
                                    <div class="col-lg-4 col-12 swiper-slide">
                                        <div class="service__box">
                                            <div class="service__box--inner">
                                                <div class="service__box--img">
                                                    <span><span class="iconify" data-icon="<?php the_sub_field('data_icon') ?>" data-width="59"></span></span>
                                                </div>
                                                <div class="service__box--title">
                                                    <h2><?php the_sub_field('title') ?></h2>
                                                </div>
                                                <div class="service__box--text">
                                                    <p><?php the_sub_field('description') ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }  }?>
                                </div>
                            </div>
                            <div class="service__mobile--btn">
                                <a href="#"><?php the_field('services_view_all');?> <span><span class="iconify" data-icon="ion:arrow-back-circle" data-width="15"></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- service end -->

            <!-- feature start -->
            <section id="feature">
                <div class="feature">
                    <div class="container">
                        <div class="feature__inner">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="feature__image">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/feature-img.jpg" alt="Feature">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="feature__content">
                                        <div class="feature__content--title title">
                                            <h2><?php the_field('featured_title'); ?></h2>
                                        </div>
                                        <div class="feature__content--text text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sollicitudin ipsum ligula, id ultricies sapien hendrerit posuere. Quisque scelerisque blandit pulvinar. Donec vestibulum augue non quam vulputate finibus.</p>
                                        </div>
                                        <div class="feature__content--box">
                                        <?php
                                        if( have_rows('featured_details') ){
                                            while ( have_rows('featured_details') ) {
                                                the_row();
                                    ?>
                                            <div class="feature__content--box-item">
                                                <div class="feature__content--box-title">
                                                    <h3 ><?php the_sub_field('price'); ?>  </h3>
                                                </div>
                                                <div class="feature__content--box-text">
                                                    <p><?php the_sub_field('text'); ?></p>
                                                </div>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                        <div class="feature__content--btn">
                                            <a href="#"><?php the_field('featured_btn'); ?><span><span class="iconify" data-icon="<?php the_field('featured_icon'); ?>" style="transform: rotate(180deg);" data-width="22"></span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature end -->

            <!-- product start -->
            <section>
                <div class="product">
                    <div class="container">
                        <div class="product__inner">
                            <div class="product__title title">
                                <h2><?php the_field('product_title'); ?></h2>
                            </div>
                            <div class="product__text text">
                                <p><?php the_field('product_description'); ?></p>
                            </div>
                            <div class="product__tabs">
                                <ul>
                                <?php
                                        if( have_rows('products_reapeter') ){
                                            while ( have_rows('products_reapeter') ) {
                                                the_row();
                                    ?>
                                    <li id="product__tabs-<?php echo get_row_index(); ?>"><?php echo get_sub_field('product_text'); ?></li>
                                    <?php } }?>
                                </ul>
                                <a href="#"><?php the_field('services_view_all');?><span><span class="iconify" data-icon="<?php the_field('services_icon');?>" style="transform: rotate(180deg);" data-width="40"></span></span></a>
                            </div>
                            <div class="row product__slider-one">
                                <div class="swiper-wrapper">
                                    <?php
                                        if( have_rows('appartment_slider_first') ){
                                            while ( have_rows('appartment_slider_first') ) {
                                                the_row();
                                    ?>
                                    <div class="col-lg-4 col-12 swiper-slide">
                                        <div class="product__box">
                                            <div class="product__box--img">
                                                <img src="<?php echo get_sub_field('image'); ?>" alt="img1">
                                            </div>
                                            <div class="product__box--content">
                                                <div class="product__box--top">
                                                    <h2><?php echo get_sub_field('title'); ?></h2>
                                                    <div class="location">
                                                        <span class="icon"><span class="iconify" data-icon="<?php the_sub_field('data_icon'); ?>" data-width="24"></span></span>
                                                        <p><?php echo get_sub_field('location'); ?></p>
                                                    </div>
                                                </div>
                                                <div class="product__box--bottom">
                                                    <h2><?php the_sub_field('price'); ?><span><?php the_sub_field('month'); ?></span></h2>
                                                    <a href="#"><?php the_sub_field('details'); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>
                            <div class="row product__slider-two mb-5" style="margin-top: 46px;">
                                <div class="swiper-wrapper">
                                    <?php
                                if( have_rows('appartment_slider_first') ){
                                            while ( have_rows('appartment_slider_first') ) {
                                                the_row();
                                                ?>

                                    <div class="col-lg-4 col-12 swiper-slide">
                                        <div class="product__box">
                                            <div class="product__box--img">
                                                <img src="<?php echo get_sub_field('image'); ?>" alt="img4">
                                            </div>
                                            <div class="product__box--content">
                                                <div class="product__box--top">
                                                    <h2><?php echo get_sub_field('title'); ?></h2>
                                                    <div class="location">
                                                        <span class="icon"><span class="iconify" data-icon="<?php the_sub_field('data_icon'); ?>" data-width="24"></span></span>
                                                        <p><?php echo get_sub_field('location'); ?></p>
                                                    </div>
                                                </div>
                                                <div class="product__box--bottom">
                                                <h2><?php the_sub_field('price'); ?><span><?php the_sub_field('month'); ?></span></h2>
                                                <a href="#"><?php the_sub_field('details'); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product end -->

            <!-- map start -->
            <section id="map">
                <div class="map">
                    <div class="container">
                        <div class="map__inner">
                            <div class="map__title title">
                                <h2><?php the_field('map_title') ?> </h2>
                            </div>
                            <div class="map__text text">
                                <p><?php the_field('map_description') ?></p>
                            </div>
                            <div class="map__map">
                               <?php the_field('map') ?> 
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- map end -->

            <!-- News start -->
            <section id="contact">
                <div class="news">
                    <div class="container">
                        <div class="news__inner">
                            <div class="row">
                                <div class="col-lg-8 col-12">
                                    <div class="news__title title">
                                        <h1><?php the_field('news_title') ?> </h1>
                                    </div>
                                    <div class="news__text text">
                                        <p><?php the_field('news_description') ?> </p>
                                    </div>
                                    <div class="news__form">
                                        <form action="">
                                            <div class="news__box">
                                                <div class="news__box--input">
                                                    <input type="text" placeholder="Enter your email address">
                                                </div>
                                                <div class="news__box--btn">
                                                    <button type="submit"><?php the_field('subscribe') ?> </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="news__img">
                                        <img src="<?php the_field('news_image') ?> " alt="Testimonial image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- News end -->

            <!-- Categories Start  -->
            <section>
                <div class="category">
                <?php $allCat = get_categories(array( 'taxonomy'=>'category' ));
                    foreach($allCat as $cat ){ ?>
                <div>
                    <a href="<?php echo get_category_link( $cat->term_id ) ?>"><h2><?php echo $cat->name ?></h2></a>
                </div>
                <?php } ?>

                </div>

            </section>

            <!-- Categories End -->

            <!-- Blog Grid Start -->
<section>
   <div class="bloggrid">
      <div class="container">
         <div class="bloggrid__inner">
             <div class="title text-center">
                        <h1> Custom Posts </h1>
             </div>
            <div class="row">
              <?php
                $custom_post = array(
                    'post_type'=> 'news', 
                    'post_status'=> 'publish'
                );
                $the_query = new WP_Query($custom_post);
                while($the_query->have_posts()){
                    $the_query->the_post();
                    $Image_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
              ?>
               <div class="col-lg-4 col-md-6">
                  <div class="bloggrid__inner-box">
                     <figure>
                        
                        <img src="<?php echo $Image_path[0] ?>" alt="blog">
                     </figure>

                     <div class="bloggrid__inner-overlay">
                        <div class="bloggrid__inner-meta">
                           <a href="#"><?php the_title();  ?></a>
                           <h3><?php the_excerpt(); ?></h3>
                        </div>

                        <div class="bloggrid__inner-readmore">
                           <a href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>



            <div class="category ">
            <div class="title text-center">
                        <h1> Custom Taxonomy </h1>
             </div>
             <div class="">
             <?php 
                $custom_categories = get_terms(['texonomy'=>'news_cat']);
            foreach ($custom_categories as $custom_categories_data) {
                $meta_image = get_wp_term_image($custom_categories_data->term_id); 
                     // category/term image url
            ?>
            <a href="<?php echo get_category_link( $custom_categories_data->term_id ); ?>">
            <div class=" categories__flex">
                <?php if($meta_image != "") { ?>
                <img src="<?php echo $meta_image; ?>" alt="">
                <?php } ?>
                <?php echo $custom_categories_data->name; ?>
            </div>
            </a>

            <div class="row">
               <?php
               
               $custom_post = array(
                    'post_type'=> 'news', 
                    'post_status'=> 'publish',
                    'tax_query' => array(
                        [
                            'taxonomy'=> 'news_cat',
                            'field'=> 'term_id',
                            'terms'=> $custom_categories_data-> term_id
                        ]
                    )
                );
            $the_query = new WP_Query($custom_post);
            while($the_query->have_posts()){
                $the_query->the_post();
                $Image_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');

               ?>
               <div class="col-lg-4 col-md-6">
                  <div class="bloggrid__inner-box">
                     <figure>
                        <img src="<?php echo $Image_path[0]; ?>" alt="blog">
                     </figure>

                     <div class="bloggrid__inner-overlay">
                        <div class="bloggrid__inner-meta">
                           <a href="#"><?php echo the_title();  ?></a>
                           <h3><?php the_excerpt(); ?></h3>
                        </div>

                        <div class="bloggrid__inner-readmore">
                           <a href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
            <?php } ?>
            </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Blog Grid End -->


        </main>
        <!-- main end -->


        <?php get_footer() ?>