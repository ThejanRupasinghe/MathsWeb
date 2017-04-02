@extends('templates.master')

@section('body')

	@include('templates.partials.navbar',['home'=>'null','downloads'=>'active','gallery'=>'null','results'=>'null','contact'=>'null'])

   <!-- //Services -->
   <div class="services">
	   <div class="container">
		   {{--<h3 class="head head_services">P<span>&nbsp;&nbsp;Our Special Model<i> Papers</i></span></h3>--}}

		   <div class="row">
			   <div class="col-lg-7 col-lg-offset-1">
				   <ul id="myTab" class="nav nav-tabs text-center" role="tablist">
					   <li role="presentation" class="{{$active_paper}}" style="font-weight: 600"><a href="{{url('documents/papers')}}" role="tab" aria-controls="home" aria-expanded="true">Model Papers</a></li>
					   <li role="presentation" class="{{$active_note}}" style="font-weight: 600"><a href="{{url('documents/notes')}}" role="tab" aria-controls="learning">Notes</a></li>
					   <li role="presentation" class="{{$active_video}}" style="font-weight: 600"><a href="#playing" role="tab" aria-controls="playing">Videos</a></li>
				   </ul>
			   </div>
		   </div>

		   <div class="agileinfo_services_grids">
			   @foreach($papers as $paper)
				   <a href="files/pdf/{{$paper->name}}.pdf" target="_blank">
					   <div class="col-md-4 agileinfo_services_grid">
						   <div class="agileinfo_services_grid1">
							   <h4>{{$paper->name}}</h4>
						   </div>
					   </div>
				   </a>
			   @endforeach
			   <div class="clearfix"> </div>
			   <div class="text-center">{{ $papers->links() }}</div>
		   </div>
	   </div>
   </div>



@endsection