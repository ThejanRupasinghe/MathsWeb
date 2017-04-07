@extends('templates.master')

@section('body')

	@include('templates.partials.navbar',['home'=>'null','downloads'=>'null','gallery'=>'null','results'=>'null','contact'=>'active'])

	<!-- Mail -->
	<div class="mail">
		<div class="container">
			<h3 class="head head2 text-center">C<span class="col-xs-offset-1"><i>Contact Me</i></span></h3>

			<div class="agileits_mail_grids text-center">

				<div class="col-md-4">

					<div class="agileits_mail_grid_lft_grid text-center">
						<ul>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+9471 - 741 00 98</li>
							<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>apechemistrypanthiya@gmail.com</li>
						</ul>
					</div>

				</div>

				<div class="col-md-7 col-md-offset-1 agileits_mail_grid_right">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if (Session::has('msg'))
						<div class="alert alert-success">{{ Session::get('msg') }}</div>
					@endif
					<div class="agileits_mail_grid_right1">
						<form action="{{route("sendMail")}}" method="post">
							<span>
								<i>Name</i>
								<input type="text" name="name" placeholder="Enter your name" required="" value="{{ old('name') }}">
							</span>
							<span>
								<i>Email</i>
								<input type="email" name="email" placeholder="Enter your email" required="" value="{{ old('email') }}">
							</span>
							<span>
								<i>Subject</i>
								<input type="text" name="subject" placeholder="Subject of your message" required="" value="{{ old('subject') }}">
							</span>
							<span>
								<i>Message</i>
								<textarea name="message" placeholder="Type your message here..." required="">{{ old('message') }}</textarea>
							</span>
							<input type="submit" value="Submit Now">
							{{csrf_field()}}
						</form>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Mail -->

@endsection


