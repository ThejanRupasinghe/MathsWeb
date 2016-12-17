<html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/uploadbutton.css') }}">

    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

    <script type="text/javascript">
        jQuery(function ($) {
            $("#files").shieldUpload();
        });
    </script>
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




</head>
<body>
<div class="container">
    @include('Login.adminNavbar')
    <div class=" col-lg-4 col-lg-offset-3">
        <div class="page-header">
            <h1 class="col-lg-offset-3">Upload Paper</h1></div>



        @if (Session::has('msg'))
            <div class="alert alert-success">{{ Session::get('msg') }}</div>
        @endif
        @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif



   <form class="" action="/upload/paper" method="post" enctype="multipart/form-data">
                              {{method_field('PATCH')}}
      <input type="hidden" name="_token" value="{{csrf_token()}}">

       <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="form-group">
                  <input class="form-control" placeholder="Enter Name to display" value="{{old('relationship')}}" type="text"
              name="name" id="phone" onkeyup="Validate(this)" required/>
               </div>
           </div>
           </div>




       <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="form-group">
                   <select class="form-control" name="exam" required>
                       <option value="">-- Select Exam --</option>
                       <option value="c1">O/L</option>
                       <option value="c2">A/L</option>

                   </select>

               </div>
           </div>
       </div>




       <div class="row">
           <div class="col-md-12">
               <div class="form-group"><select class="form-control" name="subject" required>
                       <option value="">-- Select Subject --</option>
                       <option value="c1">Mathematics</option>
                       <option value="c2">Chemistry</option>
                       <option value="c3">Physics</option>


                   </select></div>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12">
               <div class="form-group"><select class="form-control" name="grade" required>
                       <option value="">-- Select Grade --</option>
                       <option value="13">13</option>
                       <option value="12">12</option>
                       <option value="11">11</option>
                       <option value="10">10</option>
                       <option value="9">9</option>
                       <option value="8">8</option>
                       <option value="7">7</option>

                   </select></div>
           </div>
       </div>

       <div class="row">
            <div class="col-md-12">
                <input type="file" id="inputimages" name="paper"/>
           </div>
    </div>
    <div class="col-md-12">
            <button type="submit" class="btn btn-primary pull-right" value="post">
            Submit
            </button>
    </div>
          {{csrf_field()}}
    </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">
    function readURL(input) {
        if(input.files && input.files[0]){
            var reader=new FileReader();
            reader.onload=function (e) {
                $('#showimages').attr('src',e.target.result);

            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputimages").change(function () {
        readURL(this);

    });
</script>



</body>

</html>