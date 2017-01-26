@extends('templates.master')

@section('nav-bar')
	@include('templates.partials.navbar',['home'=>'active','downloads'=>'null','gallery'=>'null','results'=>'null','contact'=>'null'])

	@include('home.partials.carousel')
@endsection