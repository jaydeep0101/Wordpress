<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jaydeep
 */

get_header();
?>

	<main id="primary" class="site-main">

		

		<h2><?php the_title();  ?></h2>
		<!-- <?php the_post_thumbnail('full'); ?> -->
		<?php 

		the_excerpt();
			$thumbnail_image =  wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
		?>

		<img src="<?php echo $thumbnail_image[0] ?>" alt="">
		<?php the_content();?>
		<?php

		// while ( have_posts() ) :
			// the_post();

			// get_template_part( 'template-parts/content', 'page' );

			// if ( comments_open() || get_comments_number() ) :
				// comments_template();

			// endif;

		// endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
