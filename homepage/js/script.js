$('.owl-carousel').owlCarousel({
    loop:true,
    stagePadding: 110,
    margin:190,
    nav:true,
    dots: false,
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
})