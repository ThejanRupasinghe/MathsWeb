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

</head>
<body>
<div class="container">
    <div class=" col-lg-4 col-lg-offset-3">
        <div class="page-header">
            <h1 class="col-lg-offset-3">Upload Photo</h1></div>



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



        <form class="" action="/upload/photo" method="post" enctype="multipart/form-data">
            {{method_field('PATCH')}}
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <select class="form-control" name="class">
                            <option value="">-- Select Exam --</option>
                            <option value="c1">O/L</option>
                            <option value="c2">A/L</option>

                        </select>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group"><select class="form-control" name="subject">
                            <option value="">-- Select Subject --</option>
                            <option value="c1">Mathematics</option>
                            <option value="c2">Chemistry</option>
                            <option value="c3">Physics</option>


                        </select></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group"><select class="form-control" name="grade">
                            <option value="">-- Select Grade --</option>
                            <option value="c1">10</option>
                            <option value="c2">9</option>
                            <option value="c3">8</option>

                        </select></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="file" id="inputimages" name="image"/>
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