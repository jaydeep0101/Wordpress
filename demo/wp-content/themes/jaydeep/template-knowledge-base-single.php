<?php 
// Template Name: Knowledge Base Singlge

get_header();
?>

<main>
    <!-- banner start -->
    <section class="page-header">
        <div class="page-header__inner">
            <div class="page-header__title title">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="page-header__text text">
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- section faq start -->
    <section class="faq">
        <div class="container">
            <div class="faq__inner">
                <div class="faq__inner--search">
                    <form action="#">
                        <input type="text" placeholder="Have a questions? ask search term">
                        <button type="submit">
                            <span class="iconify" data-icon="<?php the_field('search_icon');?>" data-width="28"></span>
                            <?php the_field('search_title');?></button>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="accordion">
                            <?php if( have_rows('side_reapeter') ) {
                                    while( have_rows('side_reapeter') ) {
                                    the_row();
                            ?>
                            <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="true"><span
                                        class="accordion-title"><?php the_sub_field('side_title');?></span><span class="icon"
                                        aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p><?php the_sub_field('side_text_first');?></p>
                                    <p><?php the_sub_field('side_text_second');?></p>
                                    <p><?php the_sub_field('side_text_third');?></p>
                                    <p><?php the_sub_field('side_text_fourth');?></p>
                                </div>
                            </div>

                            <?php } } ?>
                            
                        </div>

                        <div class="faq__inner--contact">
                            <h3><?php the_field('quick_support'); ?></h3>
                            <p>
                                <a href="mailto:yourid@example.com"><i class="far fa-envelope-open-text"></i> <?php the_field('support_email'); ?></a>
                            </p>
                            <p><a href="tel:+16004567890"><i class="far fa-phone-alt"></i> <?php the_field('support_phone'); ?></a>
                            </p>
                            <p><a href="#"><i class="far fa-comment-dots"></i><?php the_field('support_location'); ?></a></p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="faq__inner--box">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="faq__inner--box-main">
                                        <div class="faq__inner--box-main--single">
                                            <h1><?php the_field('starting_template_title') ?></h1>
                                            <p><?php the_field('starting_template_date') ?></p>

                                            <?php 
                                                if( have_rows('starting_template_reapeter') ) {
                                                    while( have_rows('starting_template_reapeter') ) {
                                                        the_row();
                                                        $sub_value_first = get_sub_field('starting_reapeter_title');
                                                        $sub_value_second = get_sub_field('starting_reapeter_text');
                                            ?>

                                            <h2><?php echo $sub_value_first ?></h2>
                                            <p><?php echo $sub_value_second ?></p>
                                            
                                            <?php
                                                    }
                                                }
                                            ?>
                                            
                                            <div class="faq-answer-helpful">
                                                <h2><?php the_field('faq_title'); ?></h2>
                                                <div class="faq-yes-no-box">
                                                    <a href="#" class="asnwer-btn"><?php the_field('faq_yes'); ?></a>
                                                    <a href="#" class="asnwer-btn"><?php the_field('faq_no'); ?></a>
                                                </div>
                                                <p><?php the_field('faq_more_questions'); ?> <a href="#"><?php the_field('contact_us'); ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                                    if( have_rows('guide_reapeter') ) {
                                        while( have_rows('guide_reapeter') ) {
                                            the_row();
                                            $guide_title = get_sub_field('guide_title');
                                            $guide_view_btn = get_sub_field('guide_view_more_title');
                                            
                                            
                                ?>
                                <div class="col-lg-6 col-12">
                                    <div class="faq__inner--box-main">
                                        <h3><?php echo $guide_title; ?></h3>
                                        <div class="faq__inner--box-main--inner">
                                            <ul>
                                            <?php
                                    if( have_rows('guide_sub_reapeter') ) {
                                        while( have_rows('guide_sub_reapeter') ) {
                                            the_row();
                                            $guide_sub_text = get_sub_field('guide_sub_text');
                                ?>
                                                <li><a href="#"><?php echo $guide_sub_text; ?></a></li>
                                                <?php } } ?>
                                            </ul>
                                            <a href="#" class="btn-viewmore"><?php echo $guide_view_btn; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php } } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section faq end -->
</main>


<?php get_footer(); ?>