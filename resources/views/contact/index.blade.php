@extends('templates.master')

@section('body')

	@include('templates.partials.navbar',['home'=>'null','downloads'=>'null','gallery'=>'null','results'=>'null','contact'=>'active'])

	<!-- Mail -->
	<div class="mail">
		<div class="container">
			<h3 class="head head2">C<span>any doubt <i>Contact Us</i></span></h3>
			<div class="agileits_mail_grids">
				<div class="col-md-5 agileits_mail_grid_left">
					<div class="agileits_mail_grid_lft_grid">
						<h4>Integer venenatis massa lobortis porta</h4>
						<ul>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Nulla nec facilisis turpis ac</li>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Eget ornare ex nisl nec lacus</li>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Ut tortor augue, placerat massa</li>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Quisque consectetur sagittis</li>
							<li><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>Curabitur mollis dignissim erat</li>
						</ul>
					</div>
					<div class="agileits_mail_grid_lft_grid1">
						<h4><span>Twitter</span> Posts</h4>
						<ul>
							<li><a href="mailto:info@example.com">@Mark Lii</a> consequat dui id turpis
								<a href="#">http://kjkjdu.com</a>auctor tellus eu nisi vehicula consequat.</li>
							<li><a href="mailto:info@example.com">@Henry Paul</a> sit amet elementum dolor
								<a href="#">http://ujkjyew.com</a>porttitor suscipit orci semper, bibendum.</li>
							<li><a href="mailto:info@example.com">@John Carl</a> augue diam consequat mi
								<a href="#">http://tellus.com</a>facilisis vitae, euismod vitae orci consequat.</li>
						</ul>
					</div>
				</div>
				<div class="col-md-7 agileits_mail_grid_right">
					<div class="agileits_mail_grid_right1">
						<form action="#" method="post">
								<span>
									<i>Name</i>
									<input type="text" name="Name" placeholder=" " required="">
								</span>
							<span>
									<i>Email</i>
									<input type="email" name="Email" placeholder=" " required="">
								</span>
							<span>
									<i>Subject</i>
									<input type="text" name="Subject" placeholder=" " required="">
								</span>
							<span>
									<i>Message</i>
									<textarea name="Message" placeholder=" " required=""></textarea>
								</span>
							<input type="submit" value="Submit Now">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Mail -->

@endsection


