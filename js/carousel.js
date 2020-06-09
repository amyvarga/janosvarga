$(document).ready(function(){
    $('.minor-carousel-wrapper').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 400,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
});
