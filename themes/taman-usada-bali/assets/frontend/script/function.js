    $('#toggle-search').on('click', function(){
        $('#kolom-show').toggle('display:inline-block');
        $('#kolom-hide').toggle('display:none');
        $('#kolom-hide2').toggle('display:none');
    });


    $(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready
        /*
        ################
        Add navbar background color when scrolled
        */
        $(window).scroll(function() {
            if ($(window).scrollTop() > 56) {
            $(".navbar").addClass("navbar-scrolled");
            } else {
            $(".navbar").removeClass("navbar-scrolled");
            }
        });
        // If Mobile, add background color when toggler is clicked
        $(".navbar-toggler").click(function() {
            if (!$(".navbar-collapse").hasClass("show")) {
            $(".navbar").addClass("bg-dark");
            } else {
            if ($(window).scrollTop() < 56) {
                $(".navbar").removeClass("bg-dark");
            } else {
            }
            }
        });
        // ############

    // document ready

        var owl = $(".programs-item");
        owl.owlCarousel({
            loop:true,
            lazyLoad:true,
            nav:true,
            dots:false,
            navText:["<button class='btn btn-outline-secondary px-4 bt-prev'><i class='fas fa-arrow-left'></i></button>",
            "<button class='btn btn-outline-secondary px-4 bt-next'><i class='fas fa-arrow-right'></i></button>"],
            margin:20,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2.5
                },
                992:{
                    items:3.5
                }
            }
        });

        var bowl = $(".testimoni-item");
        bowl.owlCarousel({
            loop:true,
            margin:10,
            responsive:{
                0:{
                    items:1
                }
            }
        });

        var progs1 = $(".img-program");
        progs1.owlCarousel({
            loop:true,
            margin:10,
            responsive:{
                0:{
                    items:1
                }
            }
        });

        var package = $(".program-package");
        package.owlCarousel({
            loop:true,
            autoplay: true,
            autoplaySpeed:500,
            nav: false,
            dots: true,
            margin:20,            
            responsive:{
                0:{
                    items:1
                },
                992:{
                    items:2
                }
            }
        });

        var recent = $(".recent-blogs");
        recent.owlCarousel({
            loop:true,
            margin:10,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2.5
                },
                1000:{
                    items:3.5
                }
            }
        });

    });
    
    
    /* Start Isotopeeeeeee */

    var $gallery = $('.gallery-list').isotope({
        itemSelector: '.gallery-item',
        layoutMode: 'fitRows'
    });
    $('.gallery-category button').click(function(){
        $('.gallery-category button').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.gallery-list').isotope({
            filter: selector
        });
        return false;
    });

    /* End Isotopeee */ 


    


    