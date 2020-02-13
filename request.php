<?php include('header.php'); ?>

	<section class="page_title cs s-pt-60 s-pb-10 s-pt-lg-130 s-pb-lg-60 page_title text-center">
					<div class="container-fluid">
						<div class="row">

							<div class="divider-60"></div>

							<div class="col-md-12 text-center">
								<h1>Request Quote</h1>
							</div>

							<div class="divider-50"></div>

						</div>

					</div>
					<ol class="breadcrumb full-width">
						<li class="breadcrumb-item">
							<a href="index.html">Home</a>
						</li>
						
						<li class="breadcrumb-item active">
							Request Quote
						</li>
					</ol>
				</section>
			</div>

<section class="ls s-pb-20 s-pb-md-60 s-pb-lg s-pb-xl-160 s-pt-75 c-mb-60 c-mb-md-0">
				<div class="container">

					<div class="row">
						<div class="col-sm-4 animate" data-animation="pullDown">
							<div class="icon-box text-center">
								<div class="icon-styled round bg-maincolor">
									<i class="fa fa-phone"></i>
								</div>
								<p>
									<strong>Phone:</strong> +91 989-063-8180<br>
									
								</p>
							</div>
						</div>

						<div class="col-sm-4 animate" data-animation="pullDown">
							<div class="icon-box text-center">
								<div class="icon-styled round bg-maincolor2">
									<i class="fa fa-map-marker"></i>
								</div>
								<p>Flat No 03, Shri sai building, 
												Lane 1, Dhore Nagar, old Sangavi, 
											Pune 411027
								</p>
							</div>
						</div>

						<div class="col-sm-4 animate" data-animation="pullDown">
							<div class="icon-box text-center">
								<div class="icon-styled round bg-maincolor3">
									<i class="fa fa-envelope-o"></i>
								</div>
								<p>
									<a href="mailto:info@example.com">sales@tectigon.co.in</a>
								</p>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="divider-60 d-none d-md-block"></div>

						<div class="col-lg-12 animate" data-animation="scaleAppear">

							<form class="contact-form c-gutter-10" method="post" action="contact-form-post.php">

								<div class="row c-mb-10">

									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="name">Full Name <span class="required">*</span></label>
											<input type="text" aria-required="true" size="30" value="" name="name" class="form-control" placeholder="Full Name">
										</div>
										<div class="form-group has-placeholder">
											<label for="email">Email address<span class="required">*</span></label>
											<input type="email" aria-required="true" size="30" value="" name="email"  class="form-control" placeholder="E-mail">
										</div>
										<div class="form-group has-placeholder">
											<label for="Mobile">Mobile</label>
											<input type="text" aria-required="true" size="30" value="" name="mobile" class="form-control" placeholder="Address">
										</div>
									</div>
									<div class="col-sm-6">

										<div class="form-group has-placeholder">
											<label for="message">Message</label>
											<textarea aria-required="true" rows="9" cols="45" name="message"  class="form-control" placeholder="Your Message"></textarea>
										</div>
									</div>
								</div>
								<div class="row mt-30">
									<div class="col-sm-12">
										<div class="form-group text-center">
											<button type="submit"  name="contact_submit" class="btn btn-maincolor"><span>Send Message</span></button>
										</div>
									</div>

								</div>
							</form>

						</div>
						<!--.col-* -->

					</div>
				</div>
			</section>

<?php include('footer.php') ?>