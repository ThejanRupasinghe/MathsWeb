@extends('templates.master')

@section('body')

	@include('templates.partials.navbar',['home'=>'null','downloads'=>'null','gallery'=>'null','results'=>'null','contact'=>'active'])

	@section('testimonials')
		@include('home.partials.testimonials')
	@endsection

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
		<div class="agileits_mail_grids1">
			<h4>Our Branches</h4>
			<div class="col-md-4 agileits_mail_grids1_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24198.114028131447!2d-73.71929096044927!3d40.701189400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c263af79029215%3A0x2f3dd94700e16099!2sElmont+Union+Free+School!5e0!3m2!1sen!2sin!4v1469878776668"></iframe>
			</div>
			<div class="col-md-4 agileits_mail_grids1_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3224205.7175991116!2d-119.40173469419155!3d37.89213840751937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sschool+in+Nevada%2C+United+States!5e0!3m2!1sen!2sin!4v1469878984811"></iframe>
			</div>
			<div class="col-md-4 agileits_mail_grids1_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3225689.8916453766!2d-119.4018645668692!3d37.85823635085354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sschool+in+California%2C+United+States!5e0!3m2!1sen!2sin!4v1469879031059"></iframe>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //Mail -->
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


