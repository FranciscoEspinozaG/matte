$(function() {

    var posicionScroll = $(window).scrollTop();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > posicionScroll) {
            // console.log('scrollDown');
            $('#menu img').css({
                'height': '30px',
                'transition': '.3s ease all'});
        } else {
            //  console.log('scrollUp')
            $('#menu img').css({
                'height': '35px',
                'transition': '.3s ease all'});
        }
        posicionScroll = scroll;
        // console.log(posicionScroll)
    });

    var posicion = $('#plantas').offset();
    // console.log(posicion);

    $('.tituloContacto').on('click', function(){
        $('#inputsFormulario').toggleClass('esconde-formulario')
    });

    $('.owl-header').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        animateOut: 'fadeOut',
        autoplayHoverPause:true,
        margin:0,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    
    $('.owl-mobile').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false,
        margin:0,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    $('.owl-plantas').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        margin:20,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-esquicios').owlCarousel({
        loop:false,
        autoplay:false,
        margin:0,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    var elem = document.querySelector('.grid');
    var msnry = new Masonry( elem, {
    // options
    itemSelector: '.grid-item',
    columnWidth: 200
    });

    // element argument can be a selector string
    //   for an individual element
    var msnry = new Masonry( '.grid', {
    // options
    });

});