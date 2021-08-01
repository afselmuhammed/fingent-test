/*=====================================================================================
                            $(document).ready(function()
======================================================================================*/

$(window).load(function () {
    $('.our-clients-slider').flickity({
        cellAlign: 'left',
        contain: true,
        pageDots: false, 
        freeScroll: true,
        autoPlay: true
    });
    $("html").removeClass('loaded-completebody');
    $(".loaderz").fadeOut();
    new WOW().init();
});



$(document).ready(function () {

    /*----------------------- BG-Image Wrapper Starts ---------------------------*/

    $(".img-wrapper-old").each(function () {
        var imageUrl = $(this).find('img').attr("src");
        $(this).find('img').css("visibility", "hidden");
        $(this).css('background-image', 'url(' + imageUrl + ')').css("background-repeat", "no-repeat").css("background-size", "cover").css("background-position", "50% 50%");
    });

    $(".img-wrapper").each(function () {
        var imageUrl = $(this).find('img').attr("src"),
            imageUrl = imageUrl.replace(/ /g, '%20'),
            imageUrl = imageUrl.replace("(", '%28'),
            imageUrl = imageUrl.replace(")", '%29');
        $(this).find('img').css("visibility", "hidden");
        $(this).css('background-image', 'url(' + imageUrl + ')').css("background-repeat", "no-repeat").css("background-size", "cover").css("background-position", "50% 50%");
    });

    /*----------------------- BG-Image Wrapper Ends ---------------------------*/

    $('.menu-toggle').click(function(){
        $(this).closest('body').toggleClass('mobile-menu-open');
    });
    
    $(document).click(function() {
        $('body').removeClass('mobile-menu-open');
    });
    
    $('nav.nav-navbar, .menu-toggle').click(function(event){
        event.stopPropagation();
    });
    
    $('li.have-drop>a').click(function(){
        $(this).parent().find('ul.dropdown-ul').slideToggle();
        $(this).parent().toggleClass('active');
    })
    
    $(".banner-box button").click(function() {
        var video = $("#banner_video").get(0);
        video.play();
        $(this).closest('.banner-box').find('.banner-img').css({'opacity': '0','z-index': '-1'});
        $(this).closest('.banner-box').find('#banner_video').css({'opacity': '1','z-index': 'initial'});
        $(this).css({'opacity': '0','z-index': '-1'});
        return false;
    });

    $("#banner_video").bind("pause ended", function() {
        $(".banner-img").css({'opacity': '1','z-index': '1'});
        $('#banner_video').css({'opacity': '0','z-index': '-1'});
        $(".banner-box button").css({'opacity': '1','z-index': '3'});
    });
    

    /*----------------------- Testimonial Slide Starts ------------------------*/

    $('.banner-slider').slick({
        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToScroll: 1,
        pauseOnHover: true,
        nav: true,
        arrows: false
    });
    $('.banner-slider').show();
    
    $('.service-slider').slick({
        slidesToShow: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToScroll: 1,
        pauseOnHover: true,
        nav: true,
        arrows: true
    });
    
    $('.our-society-slider').slick({
        slidesToShow: 1,
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
        slidesToScroll: 1,
        pauseOnHover: true,
        nav: true,
        arrows: true,
        asNavFor: '.our-societythumb-slider'
    });
    $('.our-societythumb-slider').slick({
        slidesToShow: 3,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToScroll: 1,
        pauseOnHover: true,
        nav: true,
        arrows: false,
        asNavFor: '.our-society-slider',
        focusOnSelect: true,
        variableWidth: true
    });
    
    

    /*----------------------- Testimonial Slide Ends ------------------------*/

    /*----------------------- Service Details Slide Starts ------------------------*/

    $('.service-det-slider').slick({
        slidesToShow: 4,
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
        slidesToScroll: 1,
        pauseOnHover: true,
        nav: true,
        arrows: true,
        appendArrows: $("section.service-slider-wrp h4 span"),
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerMode: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 991,
                settings: {
                    centerMode: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    centerMode: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 550,
                settings: {
                    centerMode: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    /*----------------------- Service Details Slide Ends ------------------------*/



    $('.contact-tab-main ul.nav-tabs li a').click(function(){
        var now_id = $(this).attr('href');
        var $prev_id = $('.contact-tab-main .tab-content>.tab-pane.active');
        if(!$(now_id).hasClass('active')){
            if($(now_id).hasClass('anim-left')){
                $prev_id.addClass('anim-right');
                $(now_id).removeClass('anim-left');
            }else{
                $prev_id.addClass('anim-left');
                $(now_id).removeClass('anim-right');
            }
        }
    });



    /*----------------------- Video Fancybox Starts ---------------------------*/


    /*----------------------- Video Fancybox Ends ---------------------------*/

    particlesJS('particles-js',
  
  {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}

);

    /*----------------------- Ripple Effect Light Starts ---------------------------*/

    Waves.init();
    Waves.attach('.butter, .toplinks a, a.reach-btn, a.contact-btn ', ['waves-float', 'waves-light']);


    /*----------------------- Ripple Effect Light Ends ---------------------------*/



    /*----------------------- Input Style Starts ------------------------*/

    (function () {
        // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
        if (!String.prototype.trim) {
            (function () {
                // Make sure we trim BOM and NBSP
                var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                String.prototype.trim = function () {
                    return this.replace(rtrim, '');
                };
            })();
        }

				[].slice.call(document.querySelectorAll('.input__field')).forEach(function (inputEl) {
            // in case the input is already filled..
            if (inputEl.value.trim() !== '') {
                classie.add(inputEl.parentNode, 'input--filled');
            }

            // events:
            inputEl.addEventListener('focus', onInputFocus);
            inputEl.addEventListener('blur', onInputBlur);
        });

        function onInputFocus(ev) {
            classie.add(ev.target.parentNode, 'input--filled');
        }

        function onInputBlur(ev) {
            if (ev.target.value.trim() === '') {
                classie.remove(ev.target.parentNode, 'input--filled');
            }
        }
    })();

    /*----------------------- Input Style Ends ------------------------*/


    /*----------------------- Gallery Fancy Box Starts ----------------------*/


    $("a.fancybox").fancybox({
        helpers: {
            overlay: {
                locked: false
            }
        }
    });


    /*----------------------- Gallery Fancy Box Ends ----------------------*/


    /*----------------------- Carousel Caption Lettering Starts ---------------------------*/


    /*----------------------- Carousel Caption Lettering Ends ---------------------------*/


    /*----------------------- Fade This Starts ---------------------------*/

    new WOW().init();

    /*----------------------- Fade This Ends ---------------------------*/


    /*----------------------- Date Picker Starts ------------------------*/

    //    $('input.date-pickers').datepicker();

    /*----------------------- Date Picker Ends ------------------------*/


    /*----------------------- Menu Lock Starts ---------------------------*/

    //    $(window).scroll(function() {
    //        var scroll = $(window).scrollTop();
    //    });
    //    var didScroll;
    //    var lastScrollTop = 0;
    //    var delta = 2;
    //    var navbarHeight = $('header').outerHeight();
    //    $(window).scroll(function(event) {
    //        didScroll = true;
    //    });
    //    setInterval(function() {
    //        if (didScroll) {
    //            hasScrolled();
    //            didScroll = false;
    //        }
    //    }, 250);
    //
    //    function hasScrolled() {
    //        var st = $(this).scrollTop();
    //        if (Math.abs(lastScrollTop - st) <= delta)
    //            return;
    //        if (st > lastScrollTop && st > navbarHeight) {
    //            $('header').removeClass('show_header').addClass('hide_header');
    //        } else {
    //            if (st + $(window).height() < $(document).height()) {
    //                $('header').removeClass('hide_header').addClass('show_header');
    //            }
    //        }
    //        lastScrollTop = st;
    //    }


    /*----------------------- Menu Lock Ends ---------------------------*/







    /*----------------------- Contact Map Starts ---------------------------*/

    
    if ($('#contact_map_id').length > 0) { 
    //Google Map 
        var map;
        var iconBase = 'images/'
    
        function initialize() {
            var styles = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#3e606f"},{"weight":2},{"gamma":0.84}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#1a3541"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#29768a"},{"lightness":-37}]},{"featureType": "road.highway","elementType": "labels.text","stylers": [{"visibility": "on"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#193341"}]}];
            
            var locations = [
              ['Qatar', 25.285199, 51.512937, 3],
              ['Kuwait', 29.328638, 47.956918, 2],
              ['UAE', 24.440173, 54.364938, 1]
            ];
            
            var mapOptions1 = {
                zoom: 6,
                scrollwheel: false,
                disableDefaultUI: true, 
                center: new google.maps.LatLng(25.285199 + 1.5, 51.512937)
            };
            var map = new google.maps.Map(document.getElementById('contact_map_id'),
                mapOptions1);
    
            var marker, i;

            for (i = 0; i < locations.length; i++) {  
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                title: 'Exelledia',
                icon: iconBase + 'map-icon.png'
            });
            }
    
            map.setOptions({
                styles: styles
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            initialize();
        });
        
    }

    /*----------------------- Contact Map ends ---------------------------*/


});
 $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
  
  function goBack() {
    window.history.back();
}
  
  
  
  	  // Select all links with hashes
