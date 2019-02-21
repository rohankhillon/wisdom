<?php
include("header.php");
?>		
		<!-- End header -->
		
		<!-- Begin page name -->
		<section class="page-name color-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-name-content">
							<h1>Class Details</h1>
							<ul class="bread-crumbs">
								<li><a href="index-2.php">Home</a></li>
								<li><a href="classes.php">Our Classes</a></li>
								<li><p>Class Details</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End page name -->
		<!-- Begin single classes content -->
		<main class="single-classes-content">
			<!-- Begin class desc section -->
			<article class="class-article">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="class-post">
								<img src="img/class-img.jpg" alt="class-img">
								<div class="class-desc">
									<h2>Ballet Class</h2>
									<p class="price">32$</p>
									<ul class="post-info">
										<li><p>Age group: <span>3 - 8 years</span></p></li>
										<li><p>Class Size: <span>18 students</span></p></li>
										<li><p>Teacher: <span>Sarah Doe</span></p></li>
										<li><p><i class="mdi mdi-clock-outline"></i><span>11:00 am - 8:00 pm</span></p></li>
										<li><a href="https://goo.gl/maps/AcCpq9DDC332" target="_blank"><i class="mdi mdi-map-marker"></i><span>123 Broadway, NY 10006, USA</span></a></li>
									</ul>
								</div>
								<div class="class-text">
									<p>In non ullamcorper quam, at suscipit magna. Maecenas sit amet magna magna. Nullam aliquam dolor ut ipsum sagittis mollis. Vivamus porta eu augue in bibendum. Sed semper quam a ipsum accumsan placerat. Aenean nec metus lorem. Cras quis massa et quam molestie malesuada in et ipsum. Morbi pulvinar nulla nibh, nec viverra lorem fermentum et. Curabitur quis erat nulla. Nullam lobortis sem vel magna luctus, pulvinar molestie enim mollis.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
			<!-- End class desc section -->
		
			<!-- Begin class schedule section -->
			<section class="schedule-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Class Schedule</h3>
						</div>
						<div class="col-md-12">
							<div class="main-schedule">
								<div class="schedule-head">
									<p class="h5">Monday</p>
									<p class="h5">Tuesday</p>
									<p class="h5">Wednesday</p>
									<p class="h5">Thursday</p>
									<p class="h5">Friday</p>
									<p class="h5">Saturday</p>
								</div>
								<div class="schedule-body">
									<div class="schedule-row">
										<div class="schedule-block color-2">
											<h6>Group 1</h6>
											<p>9 am - 11 am</p>
										</div>
										<div class="schedule-block color-4">
											<h6>Group 2</h6>
											<p>9 am - 11 am</p>
										</div>
										<div class="schedule-block">
										</div>
										<div class="schedule-block color-3">
											<h6>Group 3</h6>
											<p>9 am - 11 am</p>
										</div>
										<div class="schedule-block">
										</div>
										<div class="schedule-block">
										</div>
									</div>
									<div class="schedule-row">
										<div class="schedule-block">
										</div>
										<div class="schedule-block color-2">
											<h6>Group 1</h6>
											<p>11 am - 13 am</p>
										</div>
										<div class="schedule-block color-4">
											<h6>Group 2</h6>
											<p>11 am - 13 am</p>
										</div>
										<div class="schedule-block">
										</div>
										<div class="schedule-block color-3">
											<h6>Group 3</h6>
											<p>11 am - 13 am</p>
										</div>
										<div class="schedule-block">
										</div>
									</div>
									<div class="schedule-row">
										<div class="schedule-block">
										</div>
										<div class="schedule-block">
										</div>
										<div class="schedule-block color-2">
											<h6>Group 1</h6>
											<p>13 am - 15 am</p>
										</div>
										<div class="schedule-block color-4">
											<h6>Group 2</h6>
											<p>13 am - 15 am</p>
										</div>
										<div class="schedule-block">
										</div>
										<div class="schedule-block color-3">
											<h6>Group 3</h6>
											<p>13 am - 15 am</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End class schedule section -->
			
			<!-- Begin class another blocks -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<!-- Begin enroll form -->
						<form action="#" class="enroll-form">
							<h3>Enroll to a Class</h3>
							<div class="inner-enroll-form column-2">
								<div class="input-wrap">
									<label for="child-name">Child Name</label>
									<input type="text" name="child-name" id="child-name">
								</div>
								<div class="input-wrap">
									<label for="parent-name">Parent Name</label>
									<input type="text" name="parent-name" id="parent-name">
								</div>
							</div>
							<div class="inner-enroll-form column-3">
								<div class="input-wrap">
									<label for="phone-email">Phone</label>
									<input type="email" name="phone-email" id="phone-email">
								</div>
								<div class="input-wrap">
									<label for="child-age">Child Age</label>
									<input type="text" name="child-age" id="child-age">
								</div>
								<div class="input-wrap">
									<label for="group">Group</label>
									<select name="group" id="group">
										<option value="0" disabled selected hidden>Select Class</option>
										<option value="1">Group 1</option>
										<option value="2">Group 2</option>
										<option value="3">Group 3</option>
									</select>
								</div>
							</div>
							<label for="enroll-message">Enter Your Message</label>
							<textarea id="enroll-message"></textarea>
							<div class="button-wrap">
								<button type="submit" class="color-4">Send</button>
							</div>
						</form>
						<!-- End enroll form -->
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="classes-gallery">
							<h3>Photo Gallery</h3>
							<div class="gallery-wrap">
								<div class="gallery-card">
									<a href="img/class-gallery-1.jpg" class="color-2" data-featherlight="image">
										<img src="img/class-gallery-1.jpg" alt="gallery">
										<span class="hide-desc h5">Learn With Fun</span>
									</a>
								</div>
								<div class="gallery-card">
									<a href="img/class-gallery-2.jpg" class="color-2" data-featherlight="image">
										<img src="img/class-gallery-2.jpg" alt="gallery">
										<span class="hide-desc h5">Learn With Fun</span>
									</a>
								</div>
								<div class="gallery-card">
									<a href="img/class-gallery-3.jpg" class="color-2" data-featherlight="image">
										<img src="img/class-gallery-3.jpg" alt="gallery">
										<span class="hide-desc h5">Learn With Fun</span>
									</a>
								</div>
								<div class="gallery-card">
									<a href="img/class-gallery-4.jpg" class="color-2" data-featherlight="image">
										<img src="img/class-gallery-4.jpg" alt="gallery">
										<span class="hide-desc h5">Learn With Fun</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End class another blocks -->
		
			<!-- Begin home classes -->
			<section class="classes-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2>Our Classes</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="classes-slider">
								<div class="slider color-4" id="classes-slider">
									<div class="card">
										<div class="classes-preview-card">
											<a href="single-classes.php" class="classes-logo"><img src="img/classes-1.jpg" alt="classes"></a>
											<ul class="classes-info-wrap">
												<li class="classes-info color-2">
													<h6>Age group</h6>
													<p>2 - 6 years</p>
												</li>
												<li class="classes-info color-4">
													<h3>56 $</h3>
												</li>
												<li class="classes-info color-1">
													<h6>Class size</h6>
													<p>15</p>
												</li>
											</ul>
											<div class="classes-text">
												<a href="single-classes.php" class="h3">Art Class</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<a href="single-classes.php" class="button color-1">Details</a>
											</div>
										</div>
									</div>
		
									<div class="card">
										<div class="classes-preview-card">
											<a href="single-classes.php" class="classes-logo"><img src="img/classes-2.jpg" alt="classes"></a>
											<ul class="classes-info-wrap">
												<li class="classes-info color-2">
													<h6>Age group</h6>
													<p>3 - 8 years</p>
												</li>
												<li class="classes-info color-4">
													<h3>32 $</h3>
												</li>
												<li class="classes-info color-1">
													<h6>Class size</h6>
													<p>18</p>
												</li>
											</ul>
											<div class="classes-text">
												<a href="single-classes.php" class="h3">Sport Section</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<a href="single-classes.php" class="button color-3">Details</a>
											</div>
										</div>
									</div>
		
									<div class="card">
										<div class="classes-preview-card">
											<a href="single-classes.php" class="classes-logo"><img src="img/classes-3.jpg" alt="classes"></a>
											<ul class="classes-info-wrap">
												<li class="classes-info color-2">
													<h6>Age group</h6>
													<p>2 - 10 years</p>
												</li>
												<li class="classes-info color-4">
													<h3>20 $</h3>
												</li>
												<li class="classes-info color-1">
													<h6>Class size</h6>
													<p>26</p>
												</li>
											</ul>
											<div class="classes-text">
												<a href="single-classes.php" class="h3">Swimming Class</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<a href="single-classes.php" class="button color-4">Details</a>
											</div>
										</div>
									</div>
		
									<div class="card">
										<div class="classes-preview-card">
											<a href="single-classes.php" class="classes-logo"><img src="img/classes-2.jpg" alt="classes"></a>
											<ul class="classes-info-wrap">
												<li class="classes-info color-2">
													<h6>Age group</h6>
													<p>6 - 10 years</p>
												</li>
												<li class="classes-info color-4">
													<h3>40 $</h3>
												</li>
												<li class="classes-info color-1">
													<h6>Class size</h6>
													<p>18</p>
												</li>
											</ul>
											<div class="classes-text">
												<a href="single-classes.php" class="h3">Sport Section</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<a href="single-classes.php" class="button color-2">Details</a>
											</div>
										</div>
									</div>
		
									<div class="card">
										<div class="classes-preview-card">
											<a href="single-classes.php" class="classes-logo"><img src="img/classes-1.jpg" alt="classes"></a>
											<ul class="classes-info-wrap">
												<li class="classes-info color-2">
													<h6>Age group</h6>
													<p>5 - 9 years</p>
												</li>
												<li class="classes-info color-4">
													<h3>50 $</h3>
												</li>
												<li class="classes-info color-1">
													<h6>Class size</h6>
													<p>15</p>
												</li>
											</ul>
											<div class="classes-text">
												<a href="single-classes.php" class="h3">Art Class</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												<a href="single-classes.php" class="button color-5">Details</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End home classes -->
		</main>
		<!-- End single classes content -->
		<!-- Begin footer -->
		<?php
include("footer.php");
?>		
			<!-- Begin footer top content -->
			<div class="footer-top-content">
				<div class="container">
					<div class="row row-flex">
						<!-- Begin footer tools -->
						<div class="col-xs-12 col-sm-6 col-md-5 col-lg-3">
							<div class="footer-tools">
								<a href="index-2.php" class="footer-logo"><img src="img/logo-white.png" alt="logo"></a>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem laudantium  sed do eiusmod tempor incididunt.</p>
								<form action="#" class="footer-subscribe">
									<input type="email" name="subscribe" placeholder="E-mail...">
									<button type="submit">
										<i class="mdi mdi-telegram"></i>
									</button>
								</form>
								<ul class="soc-list">
									<li>
										<a href="#" title="Instagram" target="_blank">
											<i class="mdi mdi-instagram"></i>
										</a>
									</li>
									<li>
										<a href="#" title="Twiter" target="_blank">
											<i class="mdi mdi-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" title="Facebook" target="_blank">
											<i class="mdi mdi-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" title="Google Plus" target="_blank">
											<i class="mdi mdi-google-plus"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- End footer tools -->
		
						<!-- Begin footer gallery -->
						<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-7 col-md-offset-0 col-lg-4 col-lg-offset-1">
							<div class="footer-gallery">
								<h3>Gallery</h3>
								<div class="gallery-wrap">
									<div class="gallery-card">
										<a href="img/gallery-popup-8.jpg" class="color-2" data-featherlight="image">
											<img src="img/footer-gallery-1.jpg" alt="gallery">
										</a>
									</div>
									<div class="gallery-card">
										<a href="img/gallery-popup-5.jpg" class="color-2" data-featherlight="image">
											<img src="img/footer-gallery-2.jpg" alt="gallery">
										</a>
									</div>
									<div class="gallery-card">
										<a href="img/gallery-popup-6.jpg" class="color-2" data-featherlight="image">
											<img src="img/footer-gallery-3.jpg" alt="gallery">
										</a>
									</div>
									<div class="gallery-card">
										<a href="img/gallery-popup-4.jpg" class="color-2" data-featherlight="image">
											<img src="img/footer-gallery-4.jpg" alt="gallery">
										</a>
									</div>
									<div class="gallery-card">
										<a href="img/gallery-popup-1.jpg" class="color-2" data-featherlight="image">
											<img src="img/footer-gallery-5.jpg" alt="gallery">
										</a>
									</div>
									<div class="gallery-card">
										<a href="img/gallery-popup-10.jpg" class="color-2" data-featherlight="image">
											<img src="img/footer-gallery-6.jpg" alt="gallery">
										</a>
									</div>
									<div class="gallery-card">
										<a href="img/gallery-popup-9.jpg" class="color-2" data-featherlight="image">
											<img src="img/footer-gallery-7.jpg" alt="gallery">
										</a>
									</div>
									<div class="gallery-card">
										<a href="img/gallery-popup-3.jpg" class="color-2" data-featherlight="image">
											<img src="img/footer-gallery-8.jpg" alt="gallery">
										</a>
									</div>
									<div class="gallery-card">
										<a href="img/gallery-popup-11.jpg" class="color-2" data-featherlight="image">
											<img src="img/footer-gallery-9.jpg" alt="gallery">
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End footer gallery -->
		
						<!-- Begin footer contact -->
						<div class="col-xs-12 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 col-lg-3 col-lg-offset-1">
							<div class="footer-contact">
								<h3>Contact us</h3>
								<p>Sed ut perspiciatis unde omnis iste ist</p>
								<ul>
									<li>
										<i class="mdi mdi-clock-outline"></i>
										<div class="footer-contact-text">
											<p>Mon - Fri</p>
											<p>9 am - 19 pm</p>
										</div>
									</li>
									<li>
										<i class="mdi mdi-map-marker"></i>
										<div class="footer-contact-text">
											<a href="https://goo.gl/maps/REc4kYSCiYt" target="_blank">San Francisco, CA <br> 94102, Some Str</a>
										</div>
									</li>
									<li>
										<i class="mdi mdi-phone"></i>
										<div class="footer-contact-text">
											<a href="tel:+123456789">+123-456-789</a>
											<a href="tel:+123456789">+123-456-789</a>
										</div>
									</li>
									<li>
										<i class="mdi mdi-email-open-outline"></i>
										<div class="footer-contact-text">
											<a href="mailto:alisena@gmail.com">alisena@gmail.com</a>
											<a href="mailto:site@gmail.com">site@gmail.com</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- End footer contact -->
					</div>
				</div>
			</div>
			<!-- End footer top content -->
			
			<!-- Begin footer bottom content -->
			<div class="footer-bottom-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>Powered by <a href="https://themeforest.net/user/buzline" target="_blank">Buzline.org</a> © All rights reserved</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End footer bottom content -->
		</footer>
		<!-- End footer -->
		<p class="back-top color-4" id="toTop"><i class="mdi mdi-chevron-up"></i></p>
		<div class="fade-bg"></div>
		<!-- ===> Juery 3.2.1 JS <==== -->
		<script src="../ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<!-- ===> Bootstrap 3 JS <==== -->
		<script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- Pie Chart JS -->
		<script src="libs/progress/jquery.easypiechart.min.js"></script>
		
		<!-- ===> Slick slider JS <==== -->
		<script src="../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
		
		<!-- ===> Feather Light JS <==== -->
		<script src="../cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
		
		<!-- Custom select -->
		<script src="../cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
		
		<!-- Data picker -->
		<script src="../cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script src="../cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		
		<!-- Google Map js -->
		<script async defer	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuHS2And3EtzpWBoMSqCIIiJzAEynp5ms&amp;callback=initMap"></script>
		
		<!-- ===> Common JS <==== -->
		<script src="js/common.js"></script>
	</body>

<!-- Mirrored from alisena-html.buzline.org/single-classes.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Jan 2019 04:17:38 GMT -->
</html>