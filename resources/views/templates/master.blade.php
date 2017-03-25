<!DOCTYPE html>
<html>
    <head>
        <title>Tharindu Pathirana</title>

        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="Tharindu Pathirana"/>
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <!-- //for-mobile-apps -->

        <!--CDN LINKS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>

        <!--Local Links-->
        <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.js') }}" type="text/javascript"></script>

        <!--Custom CSS-->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ URL::asset('css/fonts.css') }}" rel="stylesheet" type="text/css" media="all"/>
        @yield('styling')

        <!--Custom JS-->
        <!--Add if you have-->

        <!--Fonts-->
        <link href='//fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
              rel='stylesheet' type='text/css'>

        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!--//start-smoth-scrolling -->

        <!-- animation-effect -->
        <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('js/wow.min.js') }}"></script>
        <script>
            new WOW().init();
        </script>
        <!-- //animation-effect -->

    </head>

    <body>

        @yield('body')

        <!-- footer -->
        {{--@include('templates.partials.footer')--}}
        <!-- //footer -->

        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear'
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //here ends scrolling icon -->

        @yield('scripts')
    </body>
</html>