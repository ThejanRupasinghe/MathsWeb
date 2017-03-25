@extends('templates.master')

@section('body')

	@include('templates.partials.navbar',['home'=>'null','downloads'=>'active','gallery'=>'null','results'=>'null','contact'=>'null'])

	<!-- Services -->
	<div class="services">
		<div class="container">
			<h3 class="head head_services" textcenter>P<span>&nbsp;&nbsp;Our Special Model<i> Papers</i></span></h3>
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
					{{ $papers->links() }}
			</div>
		</div>
	</div>
<!-- //Services -->

@endsection