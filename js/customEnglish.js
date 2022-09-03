// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


// isotope js
$(window).on('load', function () {
    $('.filters_menu li').click(function () {
        $('.filters_menu li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: false,
        masonry: {
            columnWidth: ".all"
        }
    })
});

// nice select


// owl carousel
$(window).on('load',function(){
$('.owl-carousel').owlCarousel({

    items:7,
    loop:false,
    center:false,
    margin:10,
    autoplay:false,
    autoplayTimeout:2000,
    autoplayHoverPause:true,

    // URLhashListener:true,
    // autoplayHoverPause:true,
    // startPosition: 'URLHash',
    
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:2
        },
        800:{
            items:3
        },
        1024:{
            items:4
        },
        1100:{
            items:5
        },
        1200:{
            items:6
        }
    }
});
});

