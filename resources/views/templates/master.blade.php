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

        <!-- banner-bottom -->
        <div id="about" class="banner-bottom">
            <div class="container">
                <h3 class="head">A<span>brief description <i>about</i> teaching</span></h3>
                <div class="agileits_banner_bottom_grids">
                    <div class="col-md-6 agileits_banner_bottom_grid_l">
                        <h4>Aliquam a nunc non erat lobortis</h4>
                        <p><i>Vestibulum nec consequat nisl. Aliquam vehicula egestas commodo.
                                Pellentesque lorem magna, pulvinar sed lacinia et, venenatis in mi.</i>Nullam sodales rutrum
                            nisl, gravida porttitor lectus porta et.
                            Duis purus arcu, semper at magna faucibus, elementum maximus ligula.
                            Etiam imperdiet posuere odio gravida vehicula. Nulla consectetur massa
                            eget tincidunt suscipit. Integer vitae ex eros. Cras ornare dignissim
                            scelerisque.</p>
                    </div>
                    <div class="col-md-6 agileits_banner_bottom_grid_r">
                        <div class="agileits_banner_btm_grid_r">
                            <img src="images/3.jpg" alt=" " class="img-responsive"/>
                            <div class="agileits_banner_btm_grid_r_pos">
                                <img src="images/2.jpg" alt=" " class="img-responsive"/>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //banner-bottom -->

        <!-- banner-bottom1 -->
        <div class="banner-bottom1">
            <div class="col-md-6 agile_banner_bottom1_left">
            </div>
            <div class="col-md-6 agile_banner_bottom1_right">
                <h4>Duis at enim sit amet velit mattis</h4>
                <p>Aliquam a tellus nec leo commodo imperdiet sit amet sit amet lacus.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                    turpis egestas.</p>
                <ul>
                    <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Morbi eu velit eget libero
                        pretium
                    </li>
                    <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Pellentesque habitant morbi</li>
                    <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Senectus et netus et malesuada
                    </li>
                    <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Fames ac turpis egestas</li>
                    <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Tellus nec leo commodo imperdiet
                    </li>
                    <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Habitant morbi tristique senectus
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //banner-bottom1 -->

        <!-- testimonials -->
            @yield('testimonials')
        <!-- //testimonials -->
        <!-- newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="col-md-7 w3ls_newsletter_left">
                    <h3>N<span>Subscribe to our newsletter</span></h3>
                    <p>Suspendisse lacinia rutrum tincidunt.</p>
                </div>
                <div class="col-md-5 w3ls_newsletter_right">
                    <form action="#" method="post">
                        <input type="email" name="Email" value="Email" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <input type="submit" value=" ">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //newsletter -->

        <!-- footer -->
        @include('templates.partials.footer')
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