<footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pb-30">
                    <div class="col-md-12 col-lg-4">
                        <div class="footer-widget-box about-us">
                        <?php $logoImage = get_header_image()?>
                        <a href="<?php echo site_url();?>"><img src="<?php echo $logoImage ?>" alt="" /></a>
                            <p class="mb-3">
                                MK Taxi Hasselt staat voor u klaar voor nationaal als internationaal personenvervoer. Per taxi of taxibusje voor Hasselt en omstreken.
                            </p>
                          
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-sm-6 col-6">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="/about"><i class="fas fa-caret-right"></i> About Us</a></li>                                
                                <li><a href="/blog"><i class="fas fa-caret-right"></i> Blog</a></li>
                                <li><a href="/contact-us"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6 col-6">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Our Services</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> Taxivervoer</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Luchthavenvervoer</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Koerierdienst</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Book A Ride</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Contact Info</h4>
                            <ul class="footer-contact">
                                <li><a href="tel:+32(0)487222000"><i class="far fa-phone"></i>+32 (0)487 222 000</a></li>
                                <li><i class="far fa-map-marker-alt"></i>Lorem ipsum dolor sit amet consectetur </li>
                                <li><a href="mailto:info@mktaxi.be"><i
                                            class="far fa-envelope"></i>info@mktaxi.be</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            Copyright © <span id="date"></span> MK Taxi Hasselt | All Rights Reserved.
                         
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->



    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <!-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <?php wp_footer(); ?>       
 
    <script>
    $('#bookingForm').on("submit", function(e) {
        e.preventDefault();
        $.ajax({
            url: "mail.php",
            type: "post",
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('#submitBtn').html('Processing...');
            },
            success: function(data) {
                $('#submitBtn').html('Submit Now');
                if (data == 200) {
                    $('.msg').html('<p class="alert alert-success">Message sent successfully</p>');
                    setTimeout(location.reload.bind(location), 2500);
                } else {
                    $('.msg').html(data);
                }

            }
        })
    })
    </script>
</body>
</html>