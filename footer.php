
<footer>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/master/footer-light.png" class="footer-light" />
    <div class="footer-top-container">

        <!-- Footer Details -->
        <div class="footer-left-container">
            <p class="footer-title" data-inviewport="contentSlideUp">
                <?php echo get_field('footer_title', 'option'); ?>
            </p>
            <div class="footer-left-tabs-container">
                <!-- Footer Action Menus -->
                <?php if ( have_rows('footer_action_menu', 'option') ) : ?>
                    <?php while ( have_rows('footer_action_menu', 'option') ) : the_row(); ?>
                        <a href="<?php echo get_sub_field('menu_url'); ?>"
                            target="_blank" class="link-button" data-inviewport="contentSlideUp">
                            <p class="link-texts gray"><?php echo get_sub_field('menu_name'); ?></p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <rect x="0" y="0" width="20" height="20" rx="10" fill="#E60021"></rect>
                                <path class="button-arrow-01" d="M7,13l6-6 M13,7H8.108 M13,7v4.892" stroke="white"
                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path class="button-arrow-02" d="M7,13l6-6 M13,7H8.108 M13,7v4.892" stroke="white"
                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            
            </div>



            <div class="social-link-container">
                 <?php if ( have_rows('footer_socail_icons_', 'option') ) : ?>
                    <?php while ( have_rows('footer_socail_icons_', 'option') ) : the_row(); 
                        $social_image = get_sub_field('social_image'); 
                        $social_link  = get_sub_field('social_link'); 
                    ?>
                        <?php if ( $social_image && $social_link ) : ?>
                            <a href="<?php echo esc_url($social_link); ?>" 
                            class="social-icons" 
                            data-inviewport="contentSlideUp" 
                            target="_blank">
                                <img src="<?php echo esc_url($social_image['url']); ?>" 
                                    alt="<?php echo esc_attr($social_image['alt']); ?>" 
                                    class="img" />
                            </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>No social icons found!</p>
                <?php endif; ?>
            </div>

        </div>

        <!-- Footer Menus -->
        <div class="footer-right-container" data-inviewport="contentSlideUp">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_menu',    
                'container'      => false,            
                'items_wrap'     => '%3$s',             
                'walker'         => new Footer_Menu_Walker() 
            ));
            ?>
        </div>

    </div>

    <!-- Footer Bottom  -->
    <div class="footer-bottom-container" data-inviewport="contentSlideUp">

        <!-- Copyright Title & Descriptions -->
        <div class="footer-bottom-left-container">
            <p class="FZRegular-14 white copy-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/master/copyright-icon.svg" class="copy-icon" /><?php echo get_field('copyright_title', 'option'); ?>
            </p>
            <p class="white disclaimer-container">
                <?php echo get_field('copyright_descriptions', 'option'); ?>
            </p>
        </div>

        <!-- Privacy Policy Page -->
        <?php 
        $privacy_policy = get_field('privacy_policy_button', 'option'); 
        if ( $privacy_policy ) : ?>
            <a href="<?php echo esc_url($privacy_policy['url']); ?>" 
            class="privacy FZRegular-14 white" 
            data-text="<?php echo esc_attr($privacy_policy['title']); ?>" 
            <?php echo $privacy_policy['target'] ? 'target="_blank"' : ''; ?>>
                <span><?php echo esc_html($privacy_policy['title']); ?></span>
            </a>
        <?php endif; ?>

        <!-- Developer Creadit -->
        <div class="company-container FZRegular-14 white">
            <?php echo get_field('developer_credit', 'option'); ?>
        </div>
    </div>

</footer>



</div>

    <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.nicescroll.min.js"></script>

    <script>

        $(document).ready(function () {
            if (window.innerWidth > 768) {
                $("body").niceScroll({
                    cursoropacitymax: 0,
                    scrollspeed: 60, // scrolling speed
                    mousescrollstep: 40, // scrolling speed with mouse wheel (pixel)
                });
            }

        });


        $(document).ready(function () {
            $("img").attr("alt", "Dong Feng Motor, Singapore.");
            $("a").attr("alt", "Dong Feng Motor, Singapore.");
            $("a").attr("aria-label", "Dong Feng Motor, Singapore.");
            onScroll();

            $(document).click(function (event) {
                if (!$(event.target).closest('.onScrollNav').length) {
                    $('.onScrollNav').removeClass('nav--open');
                }
            });

            $('.onScrollNav').click(function (event) {
                event.stopPropagation();
            });
            $('#top-nav').click(function (event) {
                event.stopPropagation();
            });

            $(".nav-tabs-discover").click(function () {
                $(this).parent().toggleClass("open-parent");
            });
        });

        $(".menu-button").click(function () {
            $(this).parents().children("nav").addClass("nav--open");
        });

        $(".close-btn").click(function () {
            $(this).parents().children("nav").removeClass("nav--open");
        });

        function onScroll() { //OnScroll 
            $("body").getNiceScroll().resize()
            var window_top_position = $(window).scrollTop();

            if (window_top_position != 0) {
                $("#top-nav").addClass("onScroll");
                $("nav").addClass("onScrollNav");
            }
            else {
                $("#top-nav").removeClass("onScroll");
                $("nav").removeClass("onScrollNav");
            }
        }
        $(window).on('scroll resize', onScroll);

        const inViewport = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting == true) {
                    entry.target.classList.add("is-inViewport");
                }
            });
        };

        const Obs = new IntersectionObserver(inViewport);
        const obsOptions = {}; //See: https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API#Intersection_observer_options

        // Attach observer to every [data-inviewport] element:
        const ELs_inViewport = document.querySelectorAll('[data-inviewport]');
        ELs_inViewport.forEach(EL => {
            Obs.observe(EL, obsOptions);
        });
    </script>

    
    <!-- Owl Carousel Initialization -->
    <script>
        jQuery(document).ready(function($){
            $("#owl-News").owlCarousel({
                items:3,
                loop:true,
                margin:30,
                nav:true,
                dots:true,
                responsive:{
                    0:{ items:1 },
                    768:{ items:2 },
                    1024:{ items:3 }
                }
            });
        });
    </script>

    <script>
        jQuery(document).ready(function($){
            $('.owl-color-wrapper .owl-carousel').each(function(){
                    var $owl = $(this);
                    $owl.owlCarousel({
                        items:1,
                        loop:true,
                        nav:false,
                        dots:false,
                        margin:0,
                        autoHeight:false,
                        responsive:{
                            0:{ items:1 },
                            768:{ items:1 }
                        }
                    });
                });

                $('.owl-color-wrapper').hide().eq(0).show();
                var initialName = $('.owl-color-wrapper').eq(0).data('color-name') || '';
                $('#colorname-text').text(initialName);
                $('.colorPicker').on('click', '.dot1', function(){
                    var idx = $(this).data('index');
                    $('.colorPicker .dot1').removeClass('active');
                    $(this).addClass('active');
                    $('.owl-color-wrapper').hide().filter('[data-index="'+idx+'"]').show();
                    var cname = $(this).data('color-name') || '';
                    $('#colorname-text').text(cname);
                });
                $('.menu-button2 .back').on('click', function(){
                    var $visibleOwl = $('.owl-color-wrapper:visible .owl-carousel');
                    $visibleOwl.trigger('prev.owl.carousel');
                });
                $('.menu-button2 .next').on('click', function(){
                    var $visibleOwl = $('.owl-color-wrapper:visible .owl-carousel');
                    $visibleOwl.trigger('next.owl.carousel');
                });
            });


    </script>



    <script src="<?php echo get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script>

    <script src="<?php echo get_template_directory_uri() ?>/assets/js/gsap.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/ScrollTrigger.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/TextPlugin.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

    <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.ui.touch-punch.js"></script>
    <script>

        var modal = document.getElementById("videoModal");

        var localVideo = document.getElementById("localVideo");

        var btn = document.querySelector(".about-play-container");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function (event) {
            console.log("hello")
            event.preventDefault();
            modal.style.display = "block";
            localVideo.play();
        }

        span.onclick = function () {
            modal.style.display = "none";
            localVideo.pause();
            localVideo.currentTime = 0;
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
                localVideo.pause();
                localVideo.currentTime = 0;
            }
        }

        var modal2 = document.getElementById("videoModal2");

        var span2 = document.getElementsByClassName("close2")[0];

        function playVideo(vid, from = "", to = "") {
            if (from != "" && to != "") {
                url = "https://www.youtube.com/embed/" + vid + "?start=" + from + "&end=" + to + "&rel=0";
            } else {
                url = "https://www.youtube.com/embed/" + vid + "?rel=0";
            }

            modal2.style.display = "block";
            $('#video').prop('src', url)
        }

        span2.onclick = function () {
            modal2.style.display = "none";
            $('#video').prop('src', '');
        }

        window.onclick = function (event) {
            if (event.target == modal2) {
                modal2.style.display = "none";
                $('#video').prop('src', '');
            }
        }


        gsap.registerPlugin(ScrollTrigger);

        function animateNumber(id, start, end, duration) {
            gsap.fromTo(`#${id}`,
                {
                    innerText: start
                },
                {
                    innerText: end,
                    duration: duration,
                    snap: { innerText: 1 },
                    ease: "expo.inOut",
                    onUpdate: function () {
                        document.getElementById(id).innerText = Math.floor(this.targets()[0].innerText);
                    },
                    scrollTrigger: {
                        trigger: `#${id}`,
                        start: "top 100%",
                        toggleActions: "play none none none"
                    }
                }
            );
        }

        animateNumber('surround-view', 0, 540, 5);

        animateNumber('fast-charging', 0, 2660, 5);
        animateNumber('lighting', 0, 32, 3);
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (window.innerWidth > 768) {
                var controller = new ScrollMagic.Controller();

                var carTween = gsap.to(".car-car", {
                    y: '-54vw',
                    duration: 3,
                    ease: "power1.inOut"
                });

                var carScene = new ScrollMagic.Scene({
                    triggerElement: "#Car",
                    triggerHook: 0.1,
                    duration: 4000
                })
                    .setTween(carTween)
                    .setPin("#Car")
                    .on("enter", function () {
                        document.body.style.overflow = 'hidden';
                    })
                    .on("leave", function () {
                        document.body.style.overflow = '';
                    })
                    .on("enter back", function () {
                        document.body.style.overflow = 'hidden';
                    })
                    .on("leave back", function () {
                        document.body.style.overflow = '';
                    })
                    .addTo(controller)


                function animateCarItems() {
                    var carItems = document.querySelectorAll(".car-item");

                    carItems.forEach(function (item, index) {
                        var delay = index * 300;

                        setTimeout(function () {
                            item.classList.add("visible");
                        }, delay);
                    });
                }

                gsap.registerPlugin(ScrollTrigger);

                ScrollTrigger.create({
                    trigger: "#Car",
                    start: "top -50%",
                    onEnter: animateCarItems,
                    onEnterBack: animateCarItems,
                    markers: false
                });
            }
            else {

                var controller = new ScrollMagic.Controller();

                var carTween = gsap.to(".car-car", {
                    y: '-54vw',
                    duration: 1,
                    ease: "power1.inOut"
                });

                var carScene = new ScrollMagic.Scene({
                    triggerElement: "#Car",
                    triggerHook: 0.1,
                    duration: 1000
                })
                    .setTween(carTween)
                    .setPin("#Car")
                    .on("enter", function () {
                        document.body.style.overflow = 'hidden';
                    })
                    .on("leave", function () {
                        document.body.style.overflow = '';
                    })
                    .on("enter back", function () {
                        document.body.style.overflow = 'hidden';
                    })
                    .on("leave back", function () {
                        document.body.style.overflow = '';
                    })
                    .addTo(controller)


                function animateCarItems() {
                    var carItems = document.querySelectorAll(".car-item");

                    carItems.forEach(function (item, index) {
                        var delay = index * 100;

                        setTimeout(function () {
                            item.classList.add("visible");
                        }, delay);
                    });
                }

                gsap.registerPlugin(ScrollTrigger);

                ScrollTrigger.create({
                    trigger: "#Car",
                    start: "top -50%",
                    onEnter: animateCarItems,
                    onEnterBack: animateCarItems,
                    markers: false
                });
            }
        });
    </script>


    <script>

        //$(document).ready(function () {
        //    function addClass() {
        //        $('.mobile-car-item').addClass('is-inViewport');
        //        setTimeout(removeClass, 6500);
        //    }

        //    function removeClass() {
        //        $('.mobile-car-item').removeClass('is-inViewport');
        //        setTimeout(addClass, 2500);
        //    }

        //    removeClass();
        //});




        $(window).on("load", function () {

            setNews();
        });

        $(window).on('resize', function () {

            setNews();
        });
        function setBanner() {
            var $owlBanner = $("#Banner");
            $owlBanner.owlCarousel({
                rewind: false,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        margin: 0,
                        items: 1,
                    }
                }
            });
        };

        function setNews() {
            var $owlNews = $("#owl-News");
            $owlNews.owlCarousel({
                margin: 0,
                rewind: false,

                responsive: {
                    0: {
                        loop: false,
                        margin: 60,
                        nav: false,
                        dots: true,

                        items: 1,
                    },
                    769: {
                        items: 3,
                        nav: false,
                        dots: false,
                        touchDrag: false,
                        mouseDrag: false,
                        pullDrag: false,
                        dots: false,

                    }
                }
            });
        };

        const owlCarouselDrag = $('#owl-BannerDrag');

        owlCarouselDrag.owlCarousel({
            loop: true,

            margin: 0,
            dots: false,
            nav: false,

            responsiveClass: true,


            responsive: {
                0: {
                    items: 1,
                    stagePadding: 20,
                    margin: 3,

                },

                768: {
                    items: 1,

                },
                1000: {
                    items: 1,
                    stagePadding: 250,
                    margin: 40,

                },

                1440: {
                    items: 1,
                    stagePadding: 300,
                    margin: 30,

                },

                1600: {
                    items: 1,
                    stagePadding: 400,
                    margin: 20,

                },
            }
        });

        $('.car-carousel-back').click(function () {


            owlCarouselDrag.trigger('prev.owl.carousel');
        });

        $('.car-carousel-next').click(function () {


            owlCarouselDrag.trigger('next.owl.carousel');
        });

        $(document).ready(function () {
            const owlCarouselColor = $('#owl-BannerColor');

            owlCarouselColor.owlCarousel({
                loop: false,

                animateOut: 'fadeOut',
                margin: 10,
                dots: false,
                nav: false,
                responsiveClass: true,



                responsive: {
                    0: {
                        items: 1,

                    },

                    768: {
                        items: 1,

                    },
                    1000: {
                        items: 1,
                    }
                }
            });



            var $menuButton = $(".menu-button2");
            var $dragContainer = $(".drag-container");
            var $items = $(".drag-item .item");
            var containerWidth = $dragContainer.width();
            var itemsCount = $items.length;
            var itemWidth = containerWidth / itemsCount;
            var currentSlide = 0

            function updateDraggable() {

                var visibleCarousel = $(".owl-color-wrapper .owl-carousel:visible");

                if ($menuButton.hasClass('ui-draggable')) {
                    $menuButton.draggable("destroy");
                }

                $menuButton.draggable({
                    axis: "x",
                    containment: ".drag-container",
                    drag: function (event, ui) {
                        var draggedLeft = ui.position.left;



                        if ($(".drag-item .item").eq(0).offset().left >= draggedLeft && $(".drag-item .item").eq(1).offset().left > draggedLeft) {
                            visibleCarousel.trigger('to.owl.carousel', [1, 300]);
                            currentSlide = 1
                        }
                        else if ($(".drag-item .item").eq(1).offset().left >= draggedLeft && $(".drag-item .item").eq(2).offset().left > draggedLeft) {
                            visibleCarousel.trigger('to.owl.carousel', [2, 300]);
                            currentSlide = 2
                        }
                        else if ($(".drag-item .item").eq(2).offset().left >= draggedLeft && $(".drag-item .item").eq(3).offset().left > draggedLeft) {
                            visibleCarousel.trigger('to.owl.carousel', [3, 300]);
                            currentSlide = 3
                        }
                        else if ($(".drag-item .item").eq(3).offset().left >= draggedLeft && $(".drag-item .item").eq(4).offset().left > draggedLeft) {
                            visibleCarousel.trigger('to.owl.carousel', [0, 300]);
                            currentSlide = 0
                        }
                        else if ($(".drag-item .item").eq(4).offset().left >= draggedLeft && $(".drag-item .item").eq(5).offset().left > draggedLeft) {
                            visibleCarousel.trigger('to.owl.carousel', [4, 300]);
                            currentSlide = 4
                        }
                        else if ($(".drag-item .item").eq(5).offset().left >= draggedLeft) {
                            visibleCarousel.trigger('to.owl.carousel', [5, 300]);
                            currentSlide = 5
                        }



                    }
                });
            }



            const owlCarouselPurple = $('#owl-BannerPurple');

            owlCarouselPurple.owlCarousel({
                loop: false,
                animateOut: 'fadeOut',
                margin: 10,
                dots: false,
                nav: false,
                responsiveClass: true,



                responsive: {
                    0: {
                        items: 1,

                    },

                    768: {
                        items: 1,

                    },
                    1000: {
                        items: 1,
                    }
                }
            });

            const owlCarouselBlue = $('#owl-BannerBlue');

            owlCarouselBlue.owlCarousel({
                loop: false,
                animateOut: 'fadeOut',
                margin: 10,
                dots: false,
                nav: false,
                responsiveClass: true,



                responsive: {
                    0: {
                        items: 1,

                    },

                    768: {
                        items: 1,

                    },
                    1000: {
                        items: 1,
                    }
                }
            });

            const owlCarouselWhite = $('#owl-BannerWhite');

            owlCarouselWhite.owlCarousel({
                loop: false,
                animateOut: 'fadeOut',
                margin: 10,
                dots: false,
                nav: false,
                responsiveClass: true,



                responsive: {
                    0: {
                        items: 1,

                    },

                    768: {
                        items: 1,

                    },
                    1000: {
                        items: 1,
                    }
                }
            });

            const owlCarouselBlueWhite = $('#owl-BannerBlueWhite');

            owlCarouselBlueWhite.owlCarousel({
                loop: false,
                animateOut: 'fadeOut',
                margin: 10,
                dots: false,
                nav: false,
                responsiveClass: true,



                responsive: {
                    0: {
                        items: 1,

                    },

                    768: {
                        items: 1,

                    },
                    1000: {
                        items: 1,
                    }
                }
            });

            const owlCarouselYellow = $('#owl-BannerYellow');

            owlCarouselYellow.owlCarousel({
                loop: false,
                animateOut: 'fadeOut',
                margin: 10,
                dots: false,
                nav: false,
                responsiveClass: true,



                responsive: {
                    0: {
                        items: 1,

                    },

                    768: {
                        items: 1,

                    },
                    1000: {
                        items: 1,
                    }
                }
            });

            const owlCarouselYellowWhite = $('#owl-BannerYellowWhite');

            owlCarouselYellowWhite.owlCarousel({
                loop: false,
                animateOut: 'fadeOut',
                margin: 10,
                dots: false,
                nav: false,
                responsiveClass: true,



                responsive: {
                    0: {
                        items: 1,

                    },

                    768: {
                        items: 1,

                    },
                    1000: {
                        items: 1,
                    }
                }
            });




            $(".dot1").click(function () {
                var index = $(this).data("index");

                var newContent = '';

                if (index == 0) {
                    newContent = '<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/dot1.svg" alt="arrow" class="cardot" /> Aurora Purple';
                }

                else if (index == 1) {
                    newContent = '<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/dot2.svg" alt="arrow" class="cardot" /> Aurora Purple + White Roof'
                }

                else if (index == 2) {
                    newContent = '<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/dot3.svg" alt="arrow" class="cardot" /> Twilight White'
                }

                else if (index == 3) {
                    newContent = '<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/dot4.svg" alt="arrow" class="cardot" /> Icy Blue'
                }

                else if (index == 4) {
                    newContent = '<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/dot5.svg" alt="arrow" class="cardot" /> Icy Blue + White Roof'
                }

                else if (index == 5) {
                    newContent = '<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/dot6.svg" alt="arrow" class="cardot" /> Sunlit Green'
                }

                else if (index == 6) {
                    newContent = '<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default/dot6.svg" alt="arrow" class="cardot" /> Sunlit Green + White Roof'
                }

                if (newContent) {
                    $("#colorname").fadeOut(200, function () {
                        $(this).html(newContent);

                        $(this).fadeIn(200);
                    });
                }


                $(".owl-color-wrapper").hide()


                $(".owl-color-wrapper[data-index='" + index + "']").fadeIn(500);

                $(".dotactive").removeClass("active");

                $(this).find(".dotactive").addClass("active");

                var visibleCarousel = $(".owl-color-wrapper .owl-carousel:visible");
                visibleCarousel.trigger('to.owl.carousel', [currentSlide, 0]);
                updateDraggable();
            });

            updateDraggable()

        });

        $(".owl-color-wrapper").hide();

        $(".owl-color-wrapper[data-index='0']").show();





        document.addEventListener('DOMContentLoaded', (event) => {
            const carCarousel = document.querySelector('.car-carousel-wrapper');
            const followMouse = document.querySelector('.followmouse');

            carCarousel.addEventListener('mouseenter', () => {
                followMouse.style.opacity = '1';
            });

            carCarousel.addEventListener('mousemove', (e) => {
                const rect = carCarousel.getBoundingClientRect();
                const x = e.clientX - rect.left - (followMouse.offsetWidth / 2);
                const y = e.clientY - rect.top - (followMouse.offsetHeight / 2);

                requestAnimationFrame(() => {
                    followMouse.style.transform = `translate(${x}px, ${y}px)`;
                });
            });

            carCarousel.addEventListener('mouseleave', () => {
                followMouse.style.opacity = '0';

            });

        });
    </script>

    <script>
        var imgExt = ".svg";
        var imageID = 1;

        $(document).ready(function () {
            if (window.location.hash.substring(1).length > 0) {
                var imgMod = window.location.hash.substring(1);
                imageID = imgMod;
            }

            setTimeout(function () {
                $("body").addClass("loaded");
            }, 2800);
        });
    </script>


    <!-- About Page Script -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11.1.4/swiper-bundle.min.js"></script>

    <script type="text/javascript">
        //<![CDATA[
        Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', [], [], [], 90, 'ctl00');
        //]]>
    </script>

    <script>

            const swiper = new Swiper('.swiper', {
                direction: 'vertical',
                loop: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },
                slidesPerView: 5,
                breakpoints: {

                    768: {
                        slidesPerView: 3
                    }
                },

            });

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {

                        animateNumbers();

                        $('.cnpin').css({
                            'animation': 'pinPop2 1s forwards',
                            'animation-delay': '0.5s'
                        });

                        $('.sgpin').css({
                            'animation': 'pinPop2 1s forwards',
                            'animation-delay': '0.7s'
                        });

                        $('.jppin').css({
                            'animation': 'pinPop2 1s forwards',
                            'animation-delay': '0.9s'
                        });

                        $('.hkpin').css({
                            'animation': 'pinPop2 1s forwards',
                            'animation-delay': '1.1s'
                        });

                        $('.rupin').css({
                            'animation': 'pinPop2 1s forwards',
                            'animation-delay': '1.3s'
                        });

                        $('.swpin').css({
                            'animation': 'pinPop2 1s forwards',
                            'animation-delay': '1.5s'
                        });


                        $('.vtpin').css({
                            'animation': 'pinPop2 1s forwards',
                            'animation-delay': '1.7s'
                        });


                        $('.nppin').css({
                            'animation': 'pinPop2 1s forwards',
                            'animation-delay': '1.9s'
                        });

                        $('.mypin').css({
                            'animation': 'pinPop2 1s forwards',
                            'animation-delay': '2.1s'
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            observer.observe(document.querySelector('.stats'));

            function animateNumbers() {
                animateNumber('total-assets', 0, 499.3, '¥', '', 2);
                animateNumber('employees', 0, 127000, '', '', 2);
                animateNumber('overseas-sales', 0, 1.2, '', 'M', 2);
                animateNumber('countries-available', 0, 100, '', '+', 2);
            }

            function animateNumber(id, start, end, prefix = '', suffix = '', duration = 2) {
                const element = document.getElementById(id);
                gsap.fromTo(element, { innerHTML: start }, {
                    innerHTML: end,
                    duration: duration,
                    ease: 'power1.inOut',
                    onUpdate: function () {
                        let value = parseFloat(this.targets()[0].innerHTML);
                        if (id === 'total-assets' || id === 'overseas-sales') {
                            value = value.toFixed(1);
                        } else {
                            value = Math.ceil(value).toLocaleString();
                        }
                        element.innerHTML = prefix + value + suffix;
                    }
                });
            }


    </script>


    <!-- Features Section Script -->
    <script>
        $(document).ready(function() {
            if (window.innerWidth > 768) {
                $("body").niceScroll({
                    cursoropacitymax: 0,
                    scrollspeed: 60,
                    mousescrollstep: 40,
                });
            }

            $("img").attr("alt", "Dong Feng Motor, Singapore.");
            $("a").attr("alt", "Dong Feng Motor, Singapore.");
            $("a").attr("aria-label", "Dong Feng Motor, Singapore.");
            
            onScroll();
            $(window).on('scroll resize', onScroll);

            $(document).click(function(event) {
                if (!$(event.target).closest('.onScrollNav').length) {
                    $('.onScrollNav').removeClass('nav--open');
                }
            });

            $('.onScrollNav, #top-nav').click(function(event) {
                event.stopPropagation();
            });

            $(".nav-tabs-discover").click(function() {
                $(this).parent().toggleClass("open-parent");
            });

            $(".menu-button").click(function() {
                $("nav").addClass("nav--open");
            });

            $(".close-btn").click(function() {
                $("nav").removeClass("nav--open");
            });

            const inViewport = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-inViewport");
                    }
                });
            };
            const observer = new IntersectionObserver(inViewport);
            document.querySelectorAll('[data-inviewport]').forEach(el => observer.observe(el));

            function checkScroll() {
                var cElement = $('.c');
                var mainContentElement = $('.content-container');
                if (cElement.length && mainContentElement.length) {
                    var sectionOffset = cElement.offset().top - 109;
                    var scrollTop = $(window).scrollTop();
                    var mainContentBottom = mainContentElement.offset().top + mainContentElement.outerHeight();
                    if (scrollTop >= sectionOffset && scrollTop < mainContentBottom) {
                        cElement.addClass('highlight');
                    } else {
                        cElement.removeClass('highlight');
                    }
                }
            }
            checkScroll();
            $(window).scroll(checkScroll);

            if ($(window).outerWidth() < 769) {
                $(".tab-selector").mCustomScrollbar({ axis: "x", theme: "dark-thin" });
            }

            $(".tab-selector #spacious").addClass("selected");
            $(".tab-selector .bar").css({ "width": 1.45 * $(".tab-selector a#spacious").width(), "left": "1em" });
            $(".tab-selector .overlay").css("left", "20em");

            $(".tab-selector a").click(function() {
                var $this = $(this);
                var id = $this.attr("id");

                $(".tab-selector .tab").removeClass("selected active");
                $this.addClass("selected active");

                $(".main-content").hide();
                $(".main-content." + id).show();

                $(".tab-selector .bar").attr("class", "bar " + id);

                let left = 16;
                $this.prevAll().each(function() {
                    left += $(this).innerWidth();
                });

                let widthMultiplier = 1.17;
                if (id === 'spacious') widthMultiplier = 1.45;
                if (id === 'technology' || id === 'efficiency') widthMultiplier = 1.51;

                $(".tab-selector .bar").css({
                    width: widthMultiplier * $this.width(),
                    left: left + "px"
                });
                
                $(".overlay, .bar").css({
                    left: $this.position().left,
                    width: $this.innerWidth()
                });

                if ($(window).outerWidth() < 769) {
                    $('.tab-selector').mCustomScrollbar("scrollTo", left - 14);
                }
            });

            $(".wrapper-carousel").owlCarousel({
                margin: 5,
                loop: true,
                nav: true,
                dots: true,
                navText: ["<img src='images/box-features/arrow-left.svg' alt='Previous' />", "<img src='images/box-features/arrow-right.svg' alt='Next' />"],
                responsive: { 0: { items: 1 } }
            });
        });

        function onScroll() {
            if ($("body").getNiceScroll) {
                $("body").getNiceScroll().resize();
            }
            var window_top_position = $(window).scrollTop();
            if (window_top_position > 0) {
                $("#top-nav, nav").addClass("onScroll");
            } else {
                $("#top-nav, nav").removeClass("onScroll");
            }
        }
    </script>



</form>

    <?php wp_footer(); ?>
</body>

</html>