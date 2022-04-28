<!-- footer start -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__top">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="footer__logo">
                                <a href=""><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="logo"></a>
                                <p><?php the_field('footer_desription'); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="row">
                                <div class="col-lg-5 col-8">
                                    <div class="footer__address">
                                        <div class="footer__title">
                                            <h3>Company</h3>
                                        </div>
                                        <div class="footer__address-list">
                                            <ul>
                                                <li><p>Address : 123 Fifth Avenue, New York - 1060, USA.</p></li>
                                                <li><p>Call Us : <a href="tel:+(1600)4567890">+(1600) 456 7890</a></p></li>
                                                <li><p>Email : <a href="mailto:yourid@example.com">yourid@example.com</a></p></li>
                                                <li><p>Mon Sat : 9:00 AM - 19;00 PM</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-4">
                                    <div class="footer__menu">
                                        <div class="footer__title">
                                            <h3>Pages</h3>
                                        </div>
                                        <div class="footer__menu-list">
                                           
                                            <?php 
                    wp_nav_menu(
                        array('theme_location' => 'Primary')
                    )  
                    ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="footer__contact">
                                        <div class="footer__title">
                                            <h3>Contact Us</h3>
                                        </div>
                                        <div class="footer__contact-links">
                                            <ul>
                                                <li><a href="#"><span class="iconify" data-icon="flat-color-icons:google" data-width="27"></span></a></li>
                                                <li><a href="#"><span class="iconify" data-icon="akar-icons:facebook-fill" data-width="24"></span></a></li>
                                                <li><a href="#"><span class="iconify" data-icon="logos:twitter" data-width="25"></span></a></li>
                                                <li><a href="#"><span class="iconify" data-icon="logos:linkedin-icon" data-width="24"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
        <!-- footer end -->

    </div>



    <!-- Jquery Library File -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.6.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <!-- iconify js -->
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <!-- Swiper js -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Fancybox js -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.fancybox.min.js"></script>
    <!-- Main js file -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>
</body>

</html>

