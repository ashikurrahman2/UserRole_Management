<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/index-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Dec 2024 10:04:00 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Jomijoma Limited | @yield('title')</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}frontend/assets/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/assets/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/search.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/aos.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/aos2.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/menu.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/styles.css">
    <link rel="stylesheet" id="color" href="{{asset('/')}}frontend/assets/css/colors/green.css">
</head>

<body class="th-15 homepage-4">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('frontend.layouts.header')
        <!-- END HEADER SEARCH -->

        @yield('content')

        @include('frontend.layouts.footer')

        <!-- ARCHIVES JS -->
        <script src="{{asset('/')}}frontend/assets/js/jquery-3.5.1.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/jquery-ui.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/tether.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/moment.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/bootstrap.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/mmenu.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/mmenu.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/aos.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/aos2.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/slick.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/fitvids.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/jquery.waypoints.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/typed.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/jquery.counterup.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/isotope.pkgd.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/smooth-scroll.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/lightcase.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/owl.carousel.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/ajaxchimp.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/newsletter.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/jquery.form.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/jquery.validate.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/search.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/searched.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/forms-2.js"></script>
        <script src="{{asset('/')}}frontend/assets/js/color-switcher.js"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>

        <!-- Slider Revolution scripts -->
        <script src="{{asset('/')}}frontend/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="{{asset('/')}}frontend/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <script>
            var typed = new Typed('.typed', {
                strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });

        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }, ]
            });

        </script>

        <!-- MAIN JS -->
        <script src="{{asset('/')}}frontend/assets/js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>
