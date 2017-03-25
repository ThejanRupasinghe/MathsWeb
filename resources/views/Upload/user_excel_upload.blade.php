@extends('templates.master')

@section('body')

    @include('Login.adminNavbar')
    <div class="container">
        <div class=" col-lg-4 col-lg-offset-3">
            <div class="page-header">
                <h1 class="col-lg-offset-3">Upload Student Excel Sheet</h1></div>

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


            <form class="" action="/upload/user_excel" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="user_excel"/>
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