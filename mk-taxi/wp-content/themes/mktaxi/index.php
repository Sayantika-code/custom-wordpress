<?php get_header()?>

    <main class="main">

        <!-- hero slider -->
        <div class="hero-section">
            <div class="hero-slider owl-carousel owl-theme">
                <?php
                // Custom query to fetch banner posts
                $args = array(
                    'post_type' => 'banners',
                    'posts_per_page' => -1, // Fetch all banner posts
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $banner_query = new WP_Query($args);

                if ($banner_query->have_posts()) :
                    while ($banner_query->have_posts()) : $banner_query->the_post();
                        // Get featured image URL
                        $background_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                ?>
                <div class="hero-single" style="background-image: url('<?php echo esc_url($background_image); ?>');">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 mx-auto">
                                <div class="hero-content text-center">
                                    <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">
                                    Bienvenue à</h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        <?php the_title(); // Display banner title ?>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        <?php the_content(); // Display banner content ?>
                                    </p>
                                    <!-- <div class="hero-btn justify-content-center" data-animation="fadeInUp" data-delay="1s">
                                        <a href="tel:+32 487 222 000" class="theme-btn btn_gap">Call: +32 487 222 000</a>
                                        <a href="#" class="theme-btn theme-btn2">Bestel Online</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
        <!-- hero slider end -->

        <!-- booking area -->
        <div class="booking-area" >
            <div class="container">
                <div class="booking-form">
                    <h4 class="booking-title">
                    Welkom bij</h4>
                    <form id="bookingForm">
                        <div class="row g-2">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    <label>Ophaallocatie</label>
                                    <input type="text" class="form-control" name="pickup" placeholder="Typ Locatie" required>
                                    <i class="far fa-location-dot"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    <label>Plaats van storting</label>
                                    <input type="text" class="form-control" name="drop" placeholder="Typ Locatie" required>
                                    <i class="far fa-location-dot"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    <label>
                                    Passagiers</label>
                                    <input type="text" class="form-control" name="passenger" placeholder="Passagiers" required>
                                    <i class="far fa-user-tie"></i>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    <label>Cab Type</label>
                                    <select class="select">
                                        <option value="">Choose Cab</option>
                                        <option value="1">All Type</option>
                                        <option value="2">Hybrid</option>
                                        <option value="3">Luxury</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    <label>Ophaaldatum</label>
                                    <input type="text" class="form-control date-picker" name="pickdate" placeholder="MM/DD/JJ" required>
                                    <i class="far fa-calendar-days"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    <label>Heure de prise en charge</label>
                                    <input type="text" class="form-control time-picker" name="picktime" placeholder="00:00 AM" required>
                                    <i class="far fa-clock"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="E-mailtype" required>
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                         
                            <div class="col-12">
                                <button class="theme-btn" type="submit" id="submitBtn">Boek een taxi<i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                            <div class="col-6 msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- booking area end -->


        <!-- about area -->
        <!-- Dynamic About Us Section -->
        <section class="about-area">
            <div class="container">
                <div class="row align-items-center">
                    <?php
                    // Custom query to fetch the 'about_us' post type
                    $args = array(
                        'post_type' => 'about_us',
                        'posts_per_page' => 1, // Fetch only one post for the About Us section
                    );
                    $about_query = new WP_Query($args);

                    if ($about_query->have_posts()) :
                        while ($about_query->have_posts()) : $about_query->the_post();
                            // Get the featured image URL
                            $about_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    ?>
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <img src="<?php echo esc_url($about_image); ?>" alt="<?php the_title(); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline justify-content-start">
                                    <i class="flaticon-drive"></i> Over ons
                                </span>
                                <h2 class="site-title">
                                <?= get_the_title(); ?>
                                </h2>
                            </div>
                            <p class="about-text">
                            <?= get_the_content(); ?>
                            </p>
                            <a href="#" class="theme-btn">Meer informatie <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- service area -->
        <section class="service-area bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">MK Taxi</span>
                            <h2 class="site-title">Onze diensten</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    // Query for services, showing the last 3
                    $services_query = new WP_Query(array(
                        'post_type' => 'our_services',
                        'posts_per_page' => 3, // Adjust number of services as needed
                        'orderby' => 'date', // Ensure services are ordered by the date they were published
                        'order' => 'DESC' // Show latest first
                    ));

                    // Check if there are any posts to display
                    if ($services_query->have_posts()) :
                        // Loop through each service
                        while ($services_query->have_posts()) : $services_query->the_post(); ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="service-item wow fadeInUp" data-wow-delay=".25s">
                                    <div class="service-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                                        <?php else : ?>
                                            <img src="<?= get_template_directory_uri(); ?>/assets/img/service/default.jpg" alt="Default Service Image">
                                        <?php endif; ?>
                                    </div>                           
                                    <div class="service-content">
                                        <h3 class="service-title">
                                        <?php the_title(); ?>
                                        </h3>
                                        <p class="service-text">
                                        <?= get_the_content(); ?>
                                        </p>
                                        <div class="service-arrow">
                                            <a href="#" class="theme-btn">Neem contact met ons op<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p>Geen diensten gevonden.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- service area end-->


        <!-- taxi area -->
        <section class="taxi-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Onze taxi</span>
                            <h2 class="site-title">Taxi Tarieven</h2>
                            <p>
                            Hoeveel u moet betalen voor een taxirit is vastgelegd door uw gemeente/stad. U kunt uw afhandelingsgegevens wijzigen (contant en contactloos). Indiase klanten kunnen 5 euro betalen voor Visa of Mastercard. Indian u opgehaald wenst te worden buiten de provincie Limburg est dit zeker mogelijk, maar in dat geval start de taxameter alleen de chauffeur het grondgebied van Hasselt verlaten, waardoor er aanvullende kosten kunnen worden aangerekend.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4">
                    <?php
                    // Fetching taxi list items
                    $taxi_query = new WP_Query(array(
                        'post_type' => 'taxi_list',
                        'posts_per_page' => -1, // Change to any number or use pagination
                    ));

                    if ($taxi_query->have_posts()) :
                        while ($taxi_query->have_posts()) : $taxi_query->the_post(); ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="taxi-item">
                                    <div class="taxi-img">
                                        <?php 
                                        // Check if there is a featured image, otherwise use a default one
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full');
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/assets/img/taxi/default.png" alt="Default Taxi Image">';
                                        }
                                        ?>
                                    </div>
                                    <div class="taxi-content">
                                        <div class="taxi-head">
                                            <h4><?php the_title(); ?></h4>                                  
                                        </div>
                                        <div class="taxi-feature">
                                            <div class="top_fet">
                                            <div class="ptrze_sec">
                                            <?php
                                                // Fetch taxi_price and taxi_rate_type post meta values
                                                $taxi_price = get_post_meta(get_the_ID(), 'taxi_price', true);
                                                $taxi_rate_type = get_post_meta(get_the_ID(), 'taxi_rate_type', true);

                                                // Check if values are available and display them
                                                if ($taxi_price) {
                                                    echo '<p>Begint om <span class="sty-pir"> ' . esc_html($taxi_price) . ' </span> Tot 3 km </p>';
                                                } else {
                                                    echo '<p>Price: Not available</p>';
                                                }

                                                if ($taxi_rate_type) {
                                                    echo '<span class="ne_sty">' . esc_html($taxi_rate_type) . '</span>' ;
                                                } else {
                                                    echo '<p>Rate Type: Not available</p>';
                                                }
                                                ?>
                                                </div>
                                                <div class="btn_sec">
                                                    <a href="./#bookingForm" class="theme-btn">
                                                    Boek nu een taxi<i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <ul>
                                            <?= get_the_content(); ?>
                                            </ul>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p>No taxi services found.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- taxi area end -->
  <!-- testimonial area -->
  <section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="flaticon-drive"></i> Getuigenissen</span>
                    <h2 class="site-title text-white">
                    Wat onze klanten zeggen</h2>                  
                </div>
            </div>
        </div>
        
        <div class="testimonial-slider owl-carousel owl-theme">
            <?php 
            // Custom query to fetch testimonials (reviews)
            $args = array(
                'post_type' => 'review',
                'posts_per_page' => -1, // Fetch all reviews
            );
            $reviews = new WP_Query($args);

            if ($reviews->have_posts()) : 
                while ($reviews->have_posts()) : $reviews->the_post(); ?>
                    <div class="testimonial-single">
                        <div class="testimonial-content">                  
                            <div class="testimonial-author-info">
                                <h4><?php the_title(); ?></h4>
                                <p>
                                Klant</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="far fa-quote-right"></i></span>
                            <p><?php the_content(); ?></p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No testimonials found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- testimonial area end -->

        <!-- faq area -->
        <section class="faq-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline justify-content-start">Veelgestelde vragen</span>
                                <h2 class="site-title my-3">
                                Antwoord op al uw vragen</h2>
                            </div>
                            <p class="about-text">
                            Een antwoord op enkele veelgestelde vragen vindt u hieronder terug. Aarzal niet ons te vervangen voor verdere informatie.
                            </p>
                            <div class="faq-img mt-3">
                                <img src="<?= get_template_directory_uri()?>/assets/img/faq/01.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <?php
                            // Query for FAQs
                            $faq_query = new WP_Query( array( 'post_type' => 'faq', 'posts_per_page' => -1 ) );
                            if ( $faq_query->have_posts() ) :
                                $i = 1; // Counter for accordion item IDs
                                while ( $faq_query->have_posts() ) : $faq_query->the_post();
                            ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                            <span><i class="far fa-question-circle"></i></span> <?php the_title(); ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $i++; // Increment counter for each item
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- faq area end -->

    </main>

<?php get_footer()?>

    <!-- footer area -->
   