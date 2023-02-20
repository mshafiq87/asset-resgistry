<!-- Bootstrap CDN -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<!-- Bootstrap CDN -->

<!-- Main Js -->
<script src="assets/js/main.js"></script>
<!-- Main Js -->

<!-- Slick Slider CDN -->
<script src="assets/slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- Wow Js CDN -->
<script src="assets/js/wow.min.js"></script>
<!-- AOS ANIMTAION CDN -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
new WOW().init();
AOS.init();
</script>


<script>
$('.slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});

$('.testimonials-items').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
});
</script>