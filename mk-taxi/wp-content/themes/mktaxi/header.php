<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <!-- header area -->
    <header class="header">
        <!-- top header -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="mailto:info@mktaxi.be"><i class="far fa-envelopes"></i>
                                        <span class="__cf_email__">info@mktaxi.be</span></a></li>
                                <li><a href="tel:+32(0)487222000"><i class="far fa-phone-volume"></i>+32 (0)487 222 000</a>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                    <?php echo do_shortcode('[gtranslate]');
                    ?>
                        <!-- <div class="header-top-social">
                            <span>Follow Us: </span>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                <?php $logoImage = get_header_image()?>
                <a href="<?php echo site_url();?>"><img src="<?php echo $logoImage ?>" alt="" /></a>
                    <div class="mobile-menu-right">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                    <?php wp_nav_menu(
                        array('theme_location' => 'primary-menu', 'menu_class' => 'navbar-nav')
                    ) ?>
                        <!-- <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul> -->
                        <div class="nav-right">
                            <div class="nav-right-btn mt-2">
                                <a href="https://project.adretsoftware.in/mk-taxi/index.php/#bookingForm" class="theme-btn"><span class="fas fa-taxi"></span>Bestel Online</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->