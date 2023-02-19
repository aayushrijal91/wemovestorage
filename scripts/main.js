// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#prices"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(".testimonial-slider").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    centerMode: true,
    centerPadding: "100px",
    autoplay: true,
    responsive: [
        {
            breakpoint: 1600,
            settings: {
                slidesToShow: 1,
                centerPadding: "100px",
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
                centerPadding: "50px",
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                centerPadding: "160px",
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                centerMode: false,
            }
        }
    ]
});

let priceBox = $(".price-box").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false
});

$('.price-target[target=1]').css('opacity', 1);

$('.box-size').on('change', function () {
    let inputVal = $(this).val();
    $(".price-target").css('opacity', '0');
    $(`.price-target[target=${inputVal}]`).css('opacity', 1);

    priceBox.slick('slickGoTo', parseInt(inputVal) - 1);
});

let emailText = $("#admin-email").html();
let newText = emailText.replaceAll('.', '<span class="text-primary">.</span>');
$("#admin-email").html(newText);
