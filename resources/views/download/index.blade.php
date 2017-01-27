@extends('templates.master')

@section('body')

	@include('templates.partials.navbar',['home'=>'null','downloads'=>'active','gallery'=>'null','results'=>'null','contact'=>'null'])

<!-- Services -->
	<div class="services">
		<div class="container">
			<h3 class="head head_services" textcenter>P<span>&nbsp;&nbsp;Our Special Model<i> Papers</i></span></h3>
			<div class="agileinfo_services_grids">
				<a href="{{ URL::asset('files/pdf/5.pdf') }}" >
					<div class="col-md-4 agileinfo_services_grid">
						<div class="agileinfo_services_grid1">
							<h4>Model Paper 1</h4>
						</div>
					</div>
				</a>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
						<h4>suscipit turpis diam eget</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-link" aria-hidden="true"></span>
						<h4>augue diam consequat</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>
						<h4>Fusce ligula vel sapien</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
						<h4>Nullam turpis fringilla</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid1">
						<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
						<h4>Integer venenatis lobortis</h4>
						<p>Quisque consectetur, sem id sagittis sodales, augue diam consequat mi, 
							sed suscipit turpis diam eget nisl.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //Services -->
<!-- Services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<div class="col-md-6 w3agile_services_bottom_grid">
			</div>
			<div class="col-md-6 w3agile_services_bottom_grid">
				<h3>Integer venenatis massa lobortis porta ultricies nulla nec facilisis turpis</h3>
				<p>Etiam sit amet porta lectus, in convallis sapien. Nam quis erat lorem. 
					Nullam bibendum nisi eu fringilla vulputate. Fusce non ligula vel sapien 
					blandit cursus.</p>
				<div class="more">
					<a href="../contact/index.blade.php" class="hvr-bounce-to-bottom">Mail Us</a>
				</div>
			</div>
		</div>
	</div>
<!-- //Services-bottom -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-7 w3ls_newsletter_left">
				<h3>N<span>Subscribe to our newsletter</span></h3>
				<p>Suspendisse lacinia rutrum tincidunt.</p>
			</div>
			<div class="col-md-5 w3ls_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->

@endsection