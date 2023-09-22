<script type="text/javascript" src="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>/assets/js/sparkles.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>/assets/js/owl.carousel.min.js"></script>
<?php if (!isset($nofooter)) : ?>
    <footer class="main-footer">
        <div class="footer-row1">
            <div class="container">
                <h2>Awards And Acknowledgements</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <img src="assets/images/loading.gif" alt="clutch" data-src="assets/images/f-logos4.png" class="myLazy">
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <img src="assets/images/loading.gif" alt="seo blog" data-src="assets/images/f-logos3.png" class="myLazy">
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <img src="assets/images/loading.gif" alt="google partner" data-src="assets/images/f-logos2.png" class="myLazy">
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <img src="assets/images/loading.gif" alt="expertise" data-src="assets/images/f-logos1.png" class="myLazy">
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <img src="assets/images/loading.gif" alt="amrican company inc" data-src="assets/images/f-logos.png" class="myLazy">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-row2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <a href="/"><img src="assets/images/logo.svg" alt="design layer agency" class="lazy"></a>
                        <ul class="social-footer">
                            <li><a target="_blank" href="https://www.facebook.com/designlayeragencyllc"><img src="assets/images/facebook.svg" alt="facebook" class="lazy"></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/83519829/"><img src="assets/images/linkdin.svg" alt="linkedin" class="lazy"></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/designlayeragency/"><img src="assets/images/instagram.svg" alt="instagram" class="lazy"></a></li>
                        </ul>
                        <div class="reviews-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="https://www.trustpilot.com/review/designlayeragency.com" target="blank"><img src="assets/images/trustpilot.png" alt="trust pilot" class="lazy"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3>services</h3>
                        <ul class="footer-links">
                            <li><a href="branding-designing/">Branding & Designing</a></li>
                            <li><a href="digital-marketing-optimization/">Digital Marketing & Sales Optimization</a></li>
                            <li><a href="web-mobile-app-development/">Web & Mobile App Development</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3>quick links</h3>
                        <ul class="footer-links">
                            <li><a href="/">home </a></li>
                            <li><a href="portfolio/">Portfolio</a></li>
                            <li><a href="services/">Services</a></li>
                            <li><a href="about/">About</a></li>
                            <li><a href="contact/">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3><img src="assets/images/usa-flag.png" alt="usa branch" class="lazy">USA Branch</h3>
                        <p>Registered Office 450 South Orange Avenue, 7th Floor, Orlando, FL 32807</p>
                        <a href="tel:+13053956482" class="cntct-footer">+1 (305) 395-6482</a>
                        <br>
                        <h3><img src="assets/images/uk-flag.png" alt="uk branch" class="lazy">UK Branch</h3>
                        <p>4 Mann Island, Liverpool L3 1BP, UK</p>
                        <a href="tel:+13053956482" class="cntct-footer">+44 161-791-2510</a>
                        <a href="mailto:info@designlayeragency.com" class="cntct-footer">info@designlayeragency.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-siteinfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright © 2022. <a href="/">design layer agency LLC</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.owl-case-study').owlCarousel({
            loop: true,
            items: 1,
            stagePadding: 130,
            center: true,
            margin: 60,
            dots: false,
            // autoplay:true,
            responsiveClass: true,

            responsive: {
                0: {
                    items: 1
                },
                320: {
                    items: 1,
                    stagePadding: 30,
                    margin: 20,
                    center: false,
                },
                414: {
                    items: 1,
                    stagePadding: 30,
                    margin: 20,
                    center: false,
                },
                600: {
                    items: 1,
                    stagePadding: 50,
                    margin: 20
                },
                1024: {
                    items: 1,
                    stagePadding: 50,
                    margin: 20
                },
                1025: {
                    items: 1,
                    stagePadding: 50,
                    margin: 20
                }
            }
        });
        $('.owl-testimonials').owlCarousel({
            loop: true,
            items: 1,
            center: true,
            margin: 30,
            autoplay: true,
            navText: ["<img src='/assets/images/right-arrow.svg'>", "<img src='/assets/images/left-arrow.svg'>"],
            nav: true,
            // stagePadding: 150,
            dots: false,
            responsiveClass: true,

            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                414: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                }
            }
        });
        $('.owl-industries').owlCarousel({
            loop: true,
            items: 1,
            margin: 30,
            // autoplay:true,
            navText: ["<img src='/assets/images/left-arrow-abt.svg'>", "<img src='/assets/images/right-arrow-abt.svg'>"],
            nav: true,
            // stagePadding: 150,
            dots: false,
            responsiveClass: true,

            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                }
            }
        });
        $('.portfolio-slider').owlCarousel({
            loop: true,
            items: 1,
            margin: 30,
            navText: ["<img src='/assets/images/left-arrow-abt.svg'>", "<img src='/assets/images/right-arrow-abt.svg'>"],
            nav: true,
            dots: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 2,
                }
            }
        });
        $('.owl-related-blogs').owlCarousel({
            loop: true,
            items: 1,
            margin: 30,
            navText: ["<img src='/assets/images/left-arrow-abt.svg'>", "<img src='/assets/images/right-arrow-abt.svg'>"],
            nav: true,
            dots: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 3,
                }
            }
        });
    });
    jQuery(document).on('click', '.service-tabs-section .nav li a', function(event) {
        event.preventDefault();

        jQuery('html, body').animate({
            scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
        }, 1400);
    });
    $(document).ready(function() {
        $(".service-tabs-section .nav li").click(function() {
            if (!$(this).hasClass('active')) {
                $(".service-tabs-section .nav li").removeClass("active");
                $(this).addClass("active");
            }
        });
    });
    $('.toggle-menu').click(function(e) {
        e.preventDefault();
        $('.main-menu-nav').toggleClass('show');
    })
    $('.cancel-btn').click(function(e) {
        e.preventDefault();
        $('.main-menu-nav').toggleClass('show');
    })
</script>
<script>
    $('.testimonials-box .readmore').click(function() {
        $(this).parents('.testimonials-box').find('span').fadeIn();
        $(this).fadeOut();
    })
</script>
<script>
    var isloading = true;

    function removeLoading() {
        if (isloading) {
            $("head").append(`<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js" integrity="sha512-FwqNPb8ENFXApJKNgRgYq5ok7VoOf5ImaOdzyF/xe/T5jdd/S0xq0CXBLDhpzaemxpQ61X3nLVln6KaczwhKgA==" crossorigin="anonymous" referrerpolicy="no-referrer"><\/script>
         <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6318b3c554f06e12d8934fe5/1gcc7sfv7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
<\/script>
         `);

            $('.myLazy').each(function() {
                $(this).attr("src", $(this).attr('data-src'))
            })
            isloading = false
        }
    }
    $(document).mousemove(removeLoading)
    $(document).on("touchmove", removeLoading)
    setInterval(removeLoading, 15000);
</script>
<script type="text/javascript">
    const sparkles = new Sparkles({
        imagesArray: [
            "assets/images/React.svg",
            "assets/images/Vue.svg",
            "assets/images/Angular.svg",
            "assets/images/PHP.svg",
            "assets/images/Laravel.svg",
            "assets/images/Symfony.svg",
            "assets/images/Nest.svg",
            "assets/images/Node.svg",
            "assets/images/Swift.svg",
            "assets/images/Mariadb.svg",
            "assets/images/Postgre.svg",
            "assets/images/AWS.svg",
            "assets/images/Azure.svg",
            "assets/images/Docker.svg",
            "assets/images/Sketch.svg",
            "assets/images/Figma.svg",
            "assets/images/XD.svg",
            "assets/images/PS.svg",
            "assets/images/AI.svg",
        ],
        canvasId: 'canvas',
        numLines: 40000,
        fieldOfView: 15,
        color: '#623EFD',
        timeout: 2500,
        targetCoefficient: 0.010,
        compressionSpeed: 2.8,
    });
    sparkles.init();
</script>
<script>
    var vid = document.getElementById("myVideo");
    vid.playbackRate = 4;
</script>
<script>
    window.addEventListener('load', function() {
        $("head").append(`<script type="text/javascript" src="assets/js/particle-image.js"><\/script>`);
        $('._loader').fadeOut();
        let options = {
            root: document,
            rootMargin: '0px',
            threshold: 0.5
        }
        var count = 0
        let callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("clip-animate");
                }
            });
        };

        let observer = new IntersectionObserver(callback, options);


        let target = document.querySelectorAll('.animate-in-future');

        target.forEach(animateOnIntersection);

        function animateOnIntersection(item, index) {
            observer.observe(item);
        }
    })
</script>