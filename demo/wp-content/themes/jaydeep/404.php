<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package jaydeep
 */

get_header();
?>

<main>
            <!-- error page start -->
            <section class="error-page">
                <div class="container">
                    <div class="error-page__inner text-center">
                        <h2>404</h2>
                        <div class="error-page__inner--overlay">
                            <div class="error-page__inner--title title">
                                <h1>OOPS,</h1>
                            </div>
                            <div class="error-page__inner--text text">
                                <p>Sorry! The Page Not Found.</p>
                            </div>
                            <div class="error-page__inner--text text">
                                <p> Something Went Wrong</p>
                            </div>
                            <div class="error-page__inner--btn">
                                <a href="<?php echo site_url();?>">
                                    <span class="iconify" data-icon="fa-solid:home" data-width="28"></span> Back To
                                    Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- error page end -->
        </main>
	
<?php
get_footer();
