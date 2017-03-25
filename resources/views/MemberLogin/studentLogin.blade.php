@extends('templates.master')

@section('body')

    @include('templates.partials.navbar',['home'=>'null','downloads'=>'active','gallery'=>'null','results'=>'null','contact'=>'null'])

    <div class="services">
        <div class="container text-center">
            <h3 class="head head_services text-center">S<span class=" col-xs-offset-1"><i>&nbsp;&nbsp;STUDENT LOGIN</i></span></h3>
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
    </div>

@endsection