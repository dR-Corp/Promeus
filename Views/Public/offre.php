<!DOCTYPE html>
<html>
	<?php include("_head.php") ?>
	<body>

		<!-- navbar-->
		<?php include("_navbar.php") ?>
		<!--  Modal -->
		<?php include("_modal.php") ?>

		<!-- Hero section-->
		<section class="hero d-flex align-items-end py-5 bg-cover bg-center" style="background: url(<?=ASSETS?>distribution/img/tool-detail-bg.jpg)">
		<div class="container index-forward py-5 py-lg-0">
			<div class="row align-items-end">
			<div class="col-lg-7 mb-4 mb-lg-0">
				<div class="media align-items-center"><img class="rounded-circle" src="<?=ASSETS?>distribution/img/tool-detail-thumb.jpg" alt="" width="80">
				<div class="media-body ml-3">
					<h1 class="text-white">HubSpot for Startups</h1>
					<ul class="list-inline mb-0 text-small">
					<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
					<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
					<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
					<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
					<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
					</ul>
				</div>
				</div>
			</div>
			<div class="col-lg-5 text-lg-right">
				<ul class="list-inline mb-0">
				<li class="list-inline-item m-1"><a class="btn btn-primary" href="#"> <i class="fas fa-link mr-2"></i>Website</a></li>
				<li class="list-inline-item m-1"><a class="btn btn-outline-light px-3" href="#" rel="tooltip" data-placement="top" title="Bookmark"><i class="fas fa-heart"></i></a></li>
				<li class="list-inline-item m-1"><a class="btn btn-outline-light px-3" href="#" rel="tooltip" data-toggle="modal" data-placement="top" title="Share" data-target="#shareModal"><i class="fas fa-reply"></i></a></li>
				<li class="list-inline-item m-1"><a class="btn btn-outline-light px-3" href="#" rel="tooltip" data-placement="top" title="Report"><i class="fas fa-info-circle"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		</section>

		<!--  Share modal -->
		<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content rounded-0 p-3">
			<button class="close d-inline-block ml-auto px-1" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<div class="modal-header border-0 px-4 py-0">
				<h5 class="modal-title" id="exampleModalCenterTitle">Share this tool</h5>
			</div>
			<div class="modal-body px-4">
				<ul class="list-inline mb-0">
				<li class="list-inline-item mr-1 mb-1"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
				<li class="list-inline-item mr-1 mb-1"><a class="social-link twitter" href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
				<li class="list-inline-item mr-1 mb-1"><a class="social-link tumblr" href="#"><i class="fab fa-tumblr fa-fw"></i></a></li>
				<li class="list-inline-item mr-1 mb-1"><a class="social-link linkedin" href="#"><i class="fab fa-linkedin fa-fw"></i></a></li>
				<li class="list-inline-item mr-1 mb-1"><a class="social-link whatsapp" href="#"><i class="fab fa-whatsapp fa-fw"></i></a></li>
				<li class="list-inline-item mr-1 mb-1"><a class="social-link pinterest" href="#"><i class="fab fa-pinterest fa-fw"></i></a></li>
				<li class="list-inline-item mr-1 mb-1"><a class="social-link" href="#"><i class="far fa-envelope fa-fw"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		</div>

		<section class="py-5">
		<div class="container py-5">
			<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<!-- About-->
				<div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
				<div class="card-body p-lg-5">
					<h2 class="h3 mb-4">About this tool</h2>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
					<p>looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
					<p class="mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
				</div>
				</div>
				<!-- Gallery-->
				<div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
				<div class="card-body p-lg-5">
					<h2 class="h3 mb-4">Gallery</h2>
					<div class="rounded overflow-hidden mb-3">
					<div class="owl-carousel tool-gallery-slider" data-slider-id="1"><a class="d-block" href="img/tool-gallery-1.jpg" data-lightbox="tool-gallery" title="Gallery item 1"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-gallery-1.jpg" alt="..."></a><a class="d-block" href="img/tool-gallery-2.jpg" data-lightbox="tool-gallery" title="Gallery item 2"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-gallery-2.jpg" alt="..."></a><a class="d-block" href="img/tool-gallery-3.jpg" data-lightbox="tool-gallery" title="Gallery item 3"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-gallery-3.jpg" alt="..."></a><a class="d-block" href="img/tool-gallery-4.jpg" data-lightbox="tool-gallery" title="Gallery item 4"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-gallery-4.jpg" alt="..."></a></div>
					</div>
					<div class="owl-thumbs row px-2" data-slider-id="1">
					<div class="owl-thumb-item col-3 px-2"><img class="w-100" src="<?=ASSETS?>distribution/img/tool-gallery-1.jpg" alt="..."></div>
					<div class="owl-thumb-item col-3 px-2"><img class="w-100" src="<?=ASSETS?>distribution/img/tool-gallery-2.jpg" alt="..."></div>
					<div class="owl-thumb-item col-3 px-2"><img class="w-100" src="<?=ASSETS?>distribution/img/tool-gallery-3.jpg" alt="..."></div>
					<div class="owl-thumb-item col-3 px-2"><img class="w-100" src="<?=ASSETS?>distribution/img/tool-gallery-4.jpg" alt="..."></div>
					</div>
				</div>
				</div>
				<!-- Video-->
				<div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
				<div class="card-body p-lg-5">
					<h2 class="h3 mb-4">Watch video</h2>
					<iframe class="w-100 border-0" height="315" src="https://www.youtube.com/embed/DMmd2kzN1-Y?controls=0&amp;showinfo=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				</div>
				<!-- Reviews-->
				<div class="card border-0 shadow-sm p-2 p-lg-0">
				<div class="card-body p-lg-5">
					<h2 class="h3 mb-4">Reviews</h2>
					<div class="mb-4">
						<div class="row mb-3">
							<div class="col-lg-8">
							<div class="media align-items-center"><img class="rounded-circle" src="<?=ASSETS?>distribution/img/author-3.png" alt="" width="40">
								<div class="media-body ml-2">
								<h6 class="mb-0">Yuval Halevi</h6>
								<p class="small text-muted mb-0 font-weight-bold">1 March , 2019 at 3:08 pm</p>
								</div>
							</div>
							</div>
							<div class="col-lg-4 text-lg-right">
							<ul class="list-inline mb-0 small ml-5 ml-lg-0">
								<li class="list-inline-item m-0"><i class="fas fa-star text-primary"></i></li>
								<li class="list-inline-item m-0"><i class="fas fa-star text-primary"></i></li>
								<li class="list-inline-item m-0"><i class="fas fa-star text-primary"></i></li>
								<li class="list-inline-item m-0"><i class="fas fa-star text-primary"></i></li>
								<li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-primary"></i></li>
							</ul>
							</div>
						</div>
						<div class="row pl-5">
							<div class="col-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="mb-4">
						<div class="row mb-3">
							<div class="col-lg-8">
							<div class="media align-items-center"><img class="rounded-circle" src="<?=ASSETS?>distribution/img/author-2.png" alt="" width="40">
								<div class="media-body ml-2">
								<h6 class="mb-0">Theodoros Moulos</h6>
								<p class="small text-muted mb-0 font-weight-bold">2 April , 2019 at 10:10 am</p>
								</div>
							</div>
							</div>
							<div class="col-lg-4 text-lg-right">
							<ul class="list-inline mb-0 small ml-5 ml-lg-0">
								<li class="list-inline-item m-0"><i class="fas fa-star text-primary"></i></li>
								<li class="list-inline-item m-0"><i class="fas fa-star text-primary"></i></li>
								<li class="list-inline-item m-0"><i class="fas fa-star text-primary"></i></li>
								<li class="list-inline-item m-0"><i class="fas fa-star text-primary"></i></li>
								<li class="list-inline-item m-0"><i class="fas fa-star-half-alt text-primary"></i></li>
							</ul>
							</div>
						</div>
						<div class="row pl-5">
							<div class="col-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
							</div>
						</div>
					</div><a class="btn btn-secondary" href="#reviewPanel" role="button" data-toggle="collapse" aria-expanded="false" aria-control="reviewPanel">Add a review</a>
					<div class="collapse" id="reviewPanel">
					<div class="pt-4">
						<form action="#">
						<div class="row">
							<div class="form-group col-lg-6">
							<label for="firstName">First name</label>
							<input class="form-control form-control-lg" id="firstName" type="text" name="first-name" placeholder="Your first name">
							</div>
							<div class="form-group col-lg-6">
							<label for="lastName">Last name</label>
							<input class="form-control form-control-lg" id="firstName" type="text" name="last-name" placeholder="Your last name">
							</div>
							<div class="form-group col-12">
							<div class="rating">
								<input id="one" type="radio" name="rating-star">
								<label class="small mb-0" for="one"><i class="fas fa-star"></i></label>
								<input id="two" type="radio" name="rating-star">
								<label class="small mb-0" for="two"><i class="fas fa-star"></i></label>
								<input id="three" type="radio" name="rating-star">
								<label class="small mb-0" for="three"><i class="fas fa-star"></i></label>
								<input id="four" type="radio" name="rating-star">
								<label class="small mb-0" for="four"><i class="fas fa-star"></i></label>
								<input id="five" type="radio" name="rating-star">
								<label class="small mb-0" for="five"><i class="fas fa-star"></i></label>
							</div>
							</div>
							<div class="form-group col-12">
							<label for="reviewMessage">Your review</label>
							<textarea class="form-control form-control-lg" id="reviewMessage" name="review-message" rows="5" placeholder="Add a small brief about your listing."></textarea>
							</div>
							<div class="form-group col-12 m-0">
							<button class="btn btn-primary" type="submit">Post your review</button>
							</div>
						</div>
						</form>
					</div>
					</div>
				</div>
				</div>
			</div>
			<div class="col-lg-4">
				<!-- Social widget-->
				<div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
				<div class="card-body p-lg-5">
					<h2 class="h3 mb-4">Social links</h2>
					<ul class="list-inline mb-0">
					<li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="list-inline-item"><a class="social-link twitter" href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="list-inline-item"><a class="social-link vimeo" href="#"><i class="fab fa-vimeo"></i></a></li>
					<li class="list-inline-item"><a class="social-link instagram" href="#"><i class="fab fa-instagram"></i></a></li>
					<li class="list-inline-item"><a class="social-link youtube" href="#"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
				</div>
				<!-- Categories widget-->
				<div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
				<div class="card-body p-lg-5">
					<h2 class="h3 mb-4">Categories</h2>
					<ul class="list-inline mb-0">
					<li class="list-inline-item m-1"><a class="btn btn-light" href="#">Marketing</a></li>
					<li class="list-inline-item m-1"><a class="btn btn-light" href="#">CRM</a></li>
					<li class="list-inline-item m-1"><a class="btn btn-light" href="#">Sales</a></li>
					<li class="list-inline-item m-1"><a class="btn btn-light" href="#">Productivity</a></li>
					</ul>
				</div>
				</div>
				<!-- Tags widget-->
				<div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
				<div class="card-body p-lg-5">
					<h2 class="h3 mb-4">Tags</h2>
					<ul class="list-inline mb-0">
					<li class="list-inline-item m-1"><a class="btn btn-light" href="#">Launch</a></li>
					<li class="list-inline-item m-1"><a class="btn btn-light" href="#">Planning</a></li>
					<li class="list-inline-item m-1"><a class="btn btn-light" href="#">Entrepreneur</a></li>
					</ul>
				</div>
				</div>
			</div>
			</div>
		</div>
		</section>
		<!-- Related items-->
		<section class="pb-5">
		<div class="container pb-5">
			<header class="text-center mb-5">
			<h2>You May Also Be Interested In</h2>
			</header>
			<div class="row">
			<div class="col-lg-4 mb-4">
					<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="#">
						<div class="tool-thumb rounded-circle" href="#"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-1.png" alt="..." width="40"></div>
						<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
						<ul class="list-inline tool-rating mb-0">
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						</ul>
						<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-bg-1.jpg" alt="..."></div></a>
					<div class="card-body p-4">
						<h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Curator</a></h3>
						<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
					</div>
					</div>
			</div>
			<div class="col-lg-4 mb-4">
					<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="#">
						<div class="tool-thumb rounded-circle" href="#"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-2.png" alt="..." width="40"></div>
						<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
						<ul class="list-inline tool-rating mb-0">
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						</ul>
						<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-bg-2.jpg" alt="..."></div></a>
					<div class="card-body p-4">
						<h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Elevatr</a></h3>
						<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
					</div>
					</div>
			</div>
			<div class="col-lg-4 mb-4">
					<div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="#">
						<div class="tool-thumb rounded-circle" href="#"><img class="img-fluid rounded-circle" src="<?=ASSETS?>distribution/img/tool-thumb-3.png" alt="..." width="40"></div>
						<div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
						<ul class="list-inline tool-rating mb-0">
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						<li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
						</ul>
						<div class="overlay-content"><img class="img-fluid" src="<?=ASSETS?>distribution/img/tool-bg-3.jpg" alt="..."></div></a>
					<div class="card-body p-4">
						<h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Germ.io</a></h3>
						<p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
					</div>
					</div>
			</div>
			</div>
		</div>
		</section>

		<!-- footer -->
		<?php include("_footer.php") ?>

		<!-- JavaScript files-->
		<?php include("_js_files.php") ?>

	</body>
</html>