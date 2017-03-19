@extends('templates.master')

@section('body')

    @include('Login.adminNavbar')
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
                            <input class="form-control" placeholder="Enter Name to display" value="{{old('relationship')}}" type="text"
                                   name="name" id="phone" onkeyup="Validate(this)" required/>
                        </div>
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
    <hr>
@endsection

@section('scripts')
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
@endsection