<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN LOGIN</title>
        <link rel="stylesheet" href="{{ URL::asset('css/LogIn.css') }}"/>
        <script type="text/javascript" src="{{ URL::asset('js/LogIn.js') }}"></script>
    </head>

    <body>

        <div class="login-page container">

            <h1 class="info">ADMIN LOGIN</h1>

            <div class="form">
                @if (Session::has('msg'))
                    <div class="alert alert-danger">{{ Session::get('msg') }}</div>
                @endif

                <form class="login-form" method="post" action="/login/user">
                    {{method_field('PATCH')}}
                    <input  name="name" value="{{old('index')}}" placeholder="User name" required/>
                    <input type="password" name=password placeholder="password" required/>
                    <button>login</button>
                    {{csrf_field()}}
                </form>
            </div>
        </div>

    </body>
</html>