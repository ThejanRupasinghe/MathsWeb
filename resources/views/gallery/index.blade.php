@extends('templates.master')

@section('styling')
	<link href="css/imagehover.css" rel="stylesheet" media="all">
	<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
@endsection

@section('body')

	@include('templates.partials.navbar',['home'=>'null','downloads'=>'null','gallery'=>'active','results'=>'null','contact'=>'null'])


	<!-- Portfolio -->
	<div class="portfolio">
		<div class="container">
			<h3 class="head head2">P<span>Latest <i>portfolio</i> grids</span></h3>
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
						<li role="presentation"><a href="#learning" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">Learning</a></li>
						<li role="presentation"><a href="#playing" role="tab" id="playing-tab" data-toggle="tab" aria-controls="playing">Playing</a></li>
						<li role="presentation"><a href="#painting" role="tab" id="painting-tab" data-toggle="tab" aria-controls="painting">Painting</a></li>
						<li role="presentation"><a href="#school" role="tab" id="school-tab" data-toggle="tab" aria-controls="school">School</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/6.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/6.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/1.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/1.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/7.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/7.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/8.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/8.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/9.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/9.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/10.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/10.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/11.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/11.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/12.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/12.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/13.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/13.jpg" alt=" " class="img-responsive" />
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="learning" aria-labelledby="learning-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/1.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/1.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/10.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/10.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/13.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/13.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="playing" aria-labelledby="playing-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/6.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/6.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/7.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/7.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/9.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/9.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="painting" aria-labelledby="painting-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/11.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/11.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/12.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/12.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="school" aria-labelledby="school-tab">
							<div class="w3_tab_img">
								<div class="col-md-4 w3_tab_img_left">
									<div class="demo">
										<a class="cm-overlay" href="images/8.jpg">
										  <figure class="imghvr-shutter-in-out-diag-2"><img src="images/8.jpg" alt=" " class="img-responsive">
											<figcaption>
											  <h3>Teaching</h3>
											  <p>Phasellus elementum ullamcorper urna, 
												eu rhoncus lacus rutrum non.</p>
											</figcaption>
										  </figure>
										</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<script src="js/jquery.tools.min.js"></script>
				<script src="js/jquery.mobile.custom.min.js"></script>
				<script src="js/jquery.cm-overlay.js"></script>
				<script>
					$(document).ready(function(){
						$('.cm-overlay').cmOverlay();
					});
				</script>
		</div>
	</div>
	<!-- //Portfolio -->
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