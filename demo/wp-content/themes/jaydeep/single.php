<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jaydeep
 */

get_header();
?>



 <!-- main start -->
 <main class="qt__single">

<!-- banner start -->
<section class="page-header">
   <div class="page-header__inner">
	   <div class="page-header__title title">
		   <h2>Blog Single</h2>
	   </div>
	   <div class="page-header__text text">
		   <p>Lorem Ipsum copy in various charsets and languages for layouts.</p>
	   </div>
   </div>
</section>
<!-- banner end -->

<!-- Blog Grid Start -->
<section>
   <div class="blogsingle">
	  <div class="container">
		 <div class="blogsingle__inner">
			<div class="row">
			   <div class="col-md-8 offset-md-2">
				  <div class="blogsingle__inner-header">
					 <h2><?php the_excerpt();  ?></h2>
					 <ul>
						<li><a href="#"><?php echo get_the_date( 'j F, Y' );?></a></li>
						<li>By: <a href="#">templatation</a></li>
						<li><a href="#"><?php the_title(); ?></a></li>
					 </ul>
				  </div>
			   </div>
			   
			   <div class="col-md-10 offset-md-1">
				  <div class="blogsingle__inner-featureimage">
				  <?php $Image_path = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
					 <figure>
						<img class="single__page--image" src="<?php echo $Image_path[0] ?>" alt="blog">
					 </figure>
				  </div>
			   </div>
			   
			   <div class="col-md-8 offset-md-2">
				  <div class="blogsingle__inner-entry">
					 
					<?php the_content(); ?>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
   </div>
</section>
<!-- Blog Grid End -->
</main>
<!-- main end -->


<?php

get_footer();
