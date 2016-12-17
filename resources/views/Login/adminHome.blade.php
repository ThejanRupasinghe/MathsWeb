<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Teaching an Education School Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Teaching Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link rel="stylesheet" href="{{ URL::asset('css/simple-sidebar.css') }}"/>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->

    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
    <!-- start-smoth-scrolling -->
    <!-- animation-effect -->

    <script src="{{ URL::asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
</head>

<body>
<!-- banner -->
<div class="header">

 @include('Login.adminNavbar')
    @include('templates.partials.carousel')

</div>



<!-- //banner -->
<!-- banner-bottom -->
<div id="about" class="banner-bottom">
    <div class="container">
        <h3 class="head">A<span>brief description <i>about</i> teaching</span></h3>
        <div class="agileits_banner_bottom_grids">
            <div class="col-md-6 agileits_banner_bottom_grid_l">
                <h4>Aliquam a nunc non erat lobortis</h4>
                <p><i>Vestibulum nec consequat nisl. Aliquam vehicula egestas commodo.
                        Pellentesque lorem magna, pulvinar sed lacinia et, venenatis in mi.</i>Nullam sodales rutrum nisl, gravida porttitor lectus porta et.
                    Duis purus arcu, semper at magna faucibus, elementum maximus ligula.
                    Etiam imperdiet posuere odio gravida vehicula. Nulla consectetur massa
                    eget tincidunt suscipit. Integer vitae ex eros. Cras ornare dignissim
                    scelerisque.</p>
            </div>
            <div class="col-md-6 agileits_banner_bottom_grid_r">
                <div class="agileits_banner_btm_grid_r">
                    <img src="images/3.jpg" alt=" " class="img-responsive" />
                    <div class="agileits_banner_btm_grid_r_pos">
                        <img src="images/2.jpg" alt=" " class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
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
            <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Morbi eu velit eget libero pretium</li>
            <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Pellentesque habitant morbi</li>
            <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Senectus et netus et malesuada</li>
            <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Fames ac turpis egestas</li>
            <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Tellus nec leo commodo imperdiet</li>
            <li><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>Habitant morbi tristique senectus</li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //banner-bottom1 -->
<!-- testimonials -->
<div class="testimonials">
    <div class="container">
        <h3 class="head head1">C<span>our <i>clients</i> says</span></h3>
        <ul id="flexiselDemo1">
            <li>
                <div class="wthree_testimonials_grid_main">
                    <div class="wthree_testimonials_grid">
                        <h4>Suspendisse sagittis nibh sit amet nisi imperdiet</h4>
                        <p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
                            eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta,
                            convallis tortor a, ullamcorper magna.</p>
                        <div class="wthree_testimonials_grid_pos">
                            <img src="images/2.png" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="wthree_testimonials_grid1">
                        <h5>Mark Henry</h5>
                        <p>Teacher</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="wthree_testimonials_grid_main">
                    <div class="wthree_testimonials_grid">
                        <h4>Vestibulum sed convallis massa tincidunt</h4>
                        <p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
                            eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta,
                            convallis tortor a, ullamcorper magna.</p>
                        <div class="wthree_testimonials_grid_pos">
                            <img src="images/4.png" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="wthree_testimonials_grid1">
                        <h5>Linda Carl</h5>
                        <p>Teacher</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="wthree_testimonials_grid_main">
                    <div class="wthree_testimonials_grid">
                        <h4>Integer id erat porta convallis tortor</h4>
                        <p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
                            eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta,
                            convallis tortor a, ullamcorper magna.</p>
                        <div class="wthree_testimonials_grid_pos">
                            <img src="images/3.png" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="wthree_testimonials_grid1">
                        <h5>Michael Paul</h5>
                        <p>Teacher</p>
                    </div>
                </div>
            </li>
        </ul>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems:1,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems:1
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 1
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
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
                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value=" ">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-4 w3l_footer_grid">
            <h2><a href="index.html"><span>T</span>eaching</a></h2>
            <p>Vestibulum sed convallis massa, eu aliquet massa. Suspendisse
                lacinia rutrum tincidunt. Integer id erat porta, convallis tortor a,
                ullamcorper magna.</p>
        </div>
        <div class="col-md-3 w3l_footer_grid">
            <h3>Address</h3>
            <ul class="w3_address">
                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
            </ul>
        </div>
        <div class="col-md-2 w3l_footer_grid">
            <h3>Navigation</h3>
            <ul class="agileinfo_footer_grid_nav">
                <li><a href="/select/paper"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Upload Paper</a></li>
                <li><a href="/select/photo"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Upload Photo</a></li>
                <li><a href="/select/video"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Upload Video</a></li>
                <li><a href="/select/notice"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Post Notice</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3l_footer_grid">
            <h3>Social Media</h3>
            <ul class="agileinfo_social_icons1 agileinfo_social">
                <li><a href="#" class="facebook"></a></li>
                <li><a href="#" class="twitter"></a></li>
                <li><a href="#" class="google"></a></li>
                <li><a href="#" class="pinterest"></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="w3agile_footer_copy">
            <p>© 2016 Teaching. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>