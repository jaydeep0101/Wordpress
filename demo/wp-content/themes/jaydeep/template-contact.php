<?php 
// Template Name: Contact

get_header();
?>

 <!-- main start -->
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

            <section>
                <div class="info">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="info__box">
                                    <div class="info__img">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="info__text text">
                                        <p><a href="mailto:support@yourdomain.com"><?php the_field('email_first',58); ?></a></p>
                                        <p><a href="mailto:Sales@yourdomain.com"><?php the_field('email_second',58); ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="info__box">
                                    <div class="info__img">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="info__text text">
                                        <p><a href="tel:9999999999"><?php the_field('support',58);?><?php the_field('phone_first',58);?></a></p><br>
                                        <p><a href="tel:8888888888"><?php the_field('sale',58);?> <?php the_field('phone_second',58);?></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="info__box">
                                    <div class="info__img">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info__text text">
                                        <p><?php the_field('address',58);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="contact-form">
                    <div class="container">
                        <div class="contact-form__inner">
                            <div class="contact-form__title title text-center">
                                <h2><?php the_field('get_touch',58);?></h2>
                            </div>
                            <div class="contact-form__form">
                                <div class="row">
                                    <div class="col-lg-8 col-12 mx-auto">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                     <div class="form-group mb-2">
                                                         <input id="my-input" class="form-control" placeholder="Your Name" type="text" name="">
                                                     </div>
                                                </div>
                                                <div class="col-lg-6">
                                                     <div class="form-group mb-2">
                                                         <input id="my-input" class="form-control" placeholder="Your Email Address" type="email" name="">
                                                     </div>
                                                </div>
                                                <div class="col-lg-12">
                                                     <div class="form-group mb-2">
                                                         <input id="my-input" class="form-control" placeholder="Subject" type="text" name="">
                                                     </div>
                                                </div>
                                                <div class="col-lg-12">
                                                     <div class="form-group mb-2">
                                                        <textarea id="my-textarea" placeholder="How can i help you?" class="form-control" name="" rows="6"></textarea>
                                                     </div>
                                                </div>
                                                <div class="col-lg-12">
                                                     <div class="form-group mx-auto my-2 text-center">
                                                        <button type="submit" value="submit"><?php the_field('submit',58);?></button>
                                                     </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!-- main end -->


<?php get_footer(); ?>