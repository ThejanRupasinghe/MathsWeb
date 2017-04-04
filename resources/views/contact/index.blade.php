@extends('templates.master')

@section('body')

	@include('templates.partials.navbar',['home'=>'null','downloads'=>'null','gallery'=>'null','results'=>'null','contact'=>'active'])

	<!-- Mail -->
	<div class="mail">
		<div class="container">
			<h3 class="head head2 text-center">C<span class="col-xs-offset-1"><i>Contact Me</i></span></h3>

			<div class="agileits_mail_grids text-center">

				{{--<div class="col-md-4 col-md-offset-5">--}}

					<div class="agileits_mail_grid_lft_grid text-center">
						<ul>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+9477 - 323 49 13</li>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+9471 - 741 00 98</li>
							<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>No.172, Kamathawatta Road, Rajagiriya.</li>
							<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>tharinduthathsara20@gmail.com</li>
						</ul>
					</div>

				{{--</div>--}}

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Mail -->

@endsection


