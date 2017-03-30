@extends('templates.master')

@section('body')

	@include('templates.partials.navbar',['home'=>'active','downloads'=>'null','gallery'=>'null','results'=>'null','contact'=>'null'])

	@include('home.partials.carousel')

    @include('home.partials.testimonials')


@endsection





