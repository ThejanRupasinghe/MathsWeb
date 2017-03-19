<!DOCTYPE html>
<html>
<head>
    <title>STUDENT LOGIN</title>
    <link rel="stylesheet" href="{{ URL::asset('css/LogIn.css') }}"/>
    <script type="text/javascript" src="{{ URL::asset('js/LogIn.js') }}"></script>
</head>

<body>

<div class="login-page container">

    <h1 class="info">STUDENT LOGIN</h1>

    <div class="form">
        @if (Session::has('msg'))
            <div class="alert alert-danger">{{ Session::get('msg') }}</div>
        @endif

        <form class="login-form" method="post" action="/show/download">
            {{method_field('PATCH')}}
            <input  name="studentId" value="{{old('index')}}" placeholder="Enter your student Id" required/>

            <button>login</button>
            {{csrf_field()}}
        </form>
    </div>
</div>

</body>
</html>