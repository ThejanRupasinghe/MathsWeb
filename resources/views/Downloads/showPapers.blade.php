<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Paper Store </title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/thumbnail-galary.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
    <!-- start-smoth-scrolling -->
    <!-- animation-effect -->

    <script src="{{ URL::asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <![endif]-->










    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- //for-mobile-apps -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
    <!-- start-smoth-scrolling -->
    <!-- animation-effect -->
    <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('js/wow.min.js') }}"></script>


















</head>

<body>

<!-- Navigation -->
<div class="banner1">
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="../home/index.blade.php"><span>T</span>eaching</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--shylock">
                        <div class="agileinfo_social_icons">
                            <ul class="agileinfo_social_icons1">
                                <li><a href="#" class="facebook"></a></li>
                                <li><a href="#" class="twitter"></a></li>
                                <li><a href="#" class="google"></a></li>
                                <li><a href="#" class="pinterest"></a></li>
                            </ul>
                        </div>
                        <ul class="nav navbar-nav">
                            <li><a href="/index" class="hvr-bounce-to-bottom">Home</a></li>
                            <li><a href="/services" class="hvr-bounce-to-bottom">Services</a></li>
                            <li><a href="/portfolio" class="hvr-bounce-to-bottom" >Portfolio</a></li>
                            <li class="active" ><a href="Downloads">Downloads</a></li>
                            <li><a href="/mail" class="hvr-bounce-to-bottom">Mail Us</a></li>

                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Paper Store</h1>
        </div>

        @foreach($papers as $paper)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="{{ URL::asset('files/pdf/'.$paper->name) }}">
                    <img class="img-responsive" src="http://placehold.it/400x300?text={{$paper->name}}" alt="">
                </a>

            </div>
        @endforeach


        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="{{ URL::asset('files/pdf/5.pdf') }}">
                <img class="img-responsive" src="http://placehold.it/400x300?text=rocks" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#">
                <img class="img-responsive" src="http://placehold.it/400x300" alt="">
            </a>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="{{ URL::asset('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
