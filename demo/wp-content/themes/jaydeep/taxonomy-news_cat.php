<?php get_header();
    $qObj = get_queried_object();
?>

<!-- main start -->
<main>

<!-- banner start -->
<section class="page-header">
   <div class="page-header__inner">
       <div class="page-header__title title">
           <h2><?php echo $qObj->name;?></h2>
       </div>
       <div class="page-header__text text">
           <p>Lorem Ipsum copy in various charsets and languages for layouts.</p>
       </div>
   </div>
</section>
<!-- banner end -->

<!-- Blog Grid Start -->
<section>
   <div class="bloggrid">
      <div class="container">
         <div class="bloggrid__inner">
            <div class="row">
               <?php
               
               $custom_post = array(
                    'post_type'=> 'news', 
                    'post_status'=> 'publish',
                    'tax_query' => array(
                        [
                            'taxonomy'=> 'news_cat',
                            'field'=> 'term_id',
                            'terms'=> $qObj-> term_id
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
            <?php wp_pagenavi(); ?>
         </div>
      </div>
   </div>
</section>
<!-- Blog Grid End -->

</main>
<?php get_sidebar(); ?>
<!-- main end -->
<?php get_footer(); ?>