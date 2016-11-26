<?php
	include '../test/getGrup.php';

	$jk="none";
	$auth = "EPOw1awLNdrVPcflSlKhRiWk1KStBaJUOS4ftxLL";
	$dataJK= ambilDataCoCe($jk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.365bootstrap.com">
	
    <title>Hackathon Kurio 2016</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	 <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<?php include 'navbar.php'; ?>	

	<div class="body featured container">
		<div class="row">
			<div class="col-sm-12">
				<!-- Carousel -->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<?php
							getImageFeed($dataJK[0], $auth, 0);
							?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<h2>
									<?php
										getTitleFeed($dataJK[0], $auth, 0);
									?>
									</h2>
									<br>
									<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
						<div class="item">
							<?php
							getImageFeed($dataJK[1], $auth, 0);
							?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<h2>
									<?php
										getTitleFeed($dataJK[1], $auth, 0);
									?>
									</h2>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
						<div class="item">
							<?php
							getImageFeed($dataJK[2], $auth, 0);
							?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<h2>
									<?php
										getTitleFeed($dataJK[2], $auth, 0);
									?>
									</h2>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div><!-- /carousel -->
			</div>
		</div>
	</div>
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container">
		<div class="row">
			<div id="main-content"><!-- background not working -->
				<div class="col-md-9">
					<div class="box">
						<div class="box-header header-vimeo">
							<h2>Vimeo</h2>
						</div>
						<div class="box-content">
							<div class="row">
								<div class="col-md-6">
									<div class="wrap-vid">
										<div class="zoom-container">
											<div class="zoom-caption">
												<span class="vimeo">Vimeo</span>
												<a href="single.html">
													<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
												</a>
												<p>Video's Name</p>
											</div>
											<img src="images/2.jpg" />
										</div>
										<h3 class="vid-name"><a href="#">Video's Name</a></h3>
										<div class="info">
											<h5>By <a href="#">Kelvin</a></h5>
											<span><i class="fa fa-calendar"></i>25/3/2015</span> 
											<span><i class="fa fa-heart"></i>1,200</span>
										</div>
									</div>
									<p class="more">Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt porta lorem vitae accumsan.</p>
								</div>
								<div class="col-md-6">
									<div class="post wrap-vid">
										<div class="zoom-container">
											<div class="zoom-caption">
												<span class="vimeo">Vimeo</span>
												<a href="single.html">
													<i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
												</a>
												<p>Video's Name</p>
											</div>
											<img src="images/1.jpg" />
										</div>
										<div class="wrapper">
											<h5 class="vid-name"><a href="#">Video's Name</a></h5>
											<div class="info">
												<h6>By <a href="#">Kelvin</a></h6>
												<span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="post wrap-vid">
										<div class="zoom-container">
											<div class="zoom-caption">
												<span class="vimeo">Vimeo</span>
												<a href="single.html">
													<i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
												</a>
												<p>Video's Name</p>
											</div>
											<img src="images/2.jpg" />
										</div>
										<div class="wrapper">
											<h5 class="vid-name"><a href="#">Video's Name</a></h5>
											<div class="info">
												<h6>By <a href="#">Kelvin</a></h6>
												<span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="post wrap-vid">
										<div class="zoom-container">
											<div class="zoom-caption">
												<span class="vimeo">Vimeo</span>
												<a href="single.html">
													<i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
												</a>
												<p>Video's Name</p>
											</div>
											<img src="images/3.jpg" />
										</div>
										<div class="wrapper">
											<h5 class="vid-name"><a href="#">Video's Name</a></h5>
											<div class="info">
												<h6>By <a href="#">Kelvin</a></h6>
												<span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="post wrap-vid">
										<div class="zoom-container">
											<div class="zoom-caption">
												<span class="vimeo">Vimeo</span>
												<a href="single.html">
													<i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
												</a>
												<p>Video's Name</p>
											</div>
											<img src="images/1.jpg" />
										</div>
										<div class="wrapper">
											<h5 class="vid-name"><a href="#">Video's Name</a></h5>
											<div class="info">
												<h6>By <a href="#">Kelvin</a></h6>
												<span><i class="fa fa-heart"></i>1,200 / <i class="fa fa-calendar"></i>25/3/2015</span>
												<span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="box">
						<div class="box-header header-natural">
							<h2>Natural</h2>
						</div>
						<div class="box-content">
							<div class="row">
								<div class="col-md-6">
									<img src="images/6.jpg" />
									<h3><a href="#">Marshall, Will, and Holly on a Routine Expedition</a></h3>
									<span><i class="fa fa-heart"></i> 1,200 / <i class="fa fa-calendar"></i> 25/3/2015 / <i class="fa fa-comment-o"> / </i> 10 <i class="fa fa-eye"></i> 945</span>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half"></i>
									</span>
									<p>Marshall, Will, and Holly on a routine expedition, met the greatest earthquake ever known. High on the rapids, it struck their tiny raft! And plunged them down a thousand feet below…...</p>
								</div>
								<div class="col-md-6">
									<img src="images/7.jpg" />
									<h3><a href="#">Your Tread Must be Light and Sure as Though Your Path...</a></h3>
									<span><i class="fa fa-heart"></i> 1,200 / <i class="fa fa-calendar"></i> 25/3/2015 / <i class="fa fa-comment-o"> / </i> 3 <i class="fa fa-eye"></i> 1007</span>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half"></i>
									</span>
									<p>There once was a story about a man who could turn invisible. I thought it was only a story… until it happened to me. Ok, so here’s how it works: there’s this stuff called...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar">
				<div class="col-md-3">
					<!---- Start Widget ---->
					<div class="widget wid-gallery">
						<div class="heading"><h4>Trending</h4></div>
						<div class="content">
							<div class="col-md-12">
								<div class="row">
									<a href="#"><img src="images/4.jpg" /></a>
									<h5 class="top-name">
										<a href="#">Ini Namenya</a>
										
									</h5>

									<div class="top-name">
										<hr class="style-line">
										<a href="#">Trending 1</a><hr class="style-line"> 
										<a href="#">Trending 2</a><hr class="style-line"> 
										<a href="#">Trending 3</a><hr class="style-line"> 
										<a href="#">Trending 4</a><hr class="style-line"> 
										<a href="#">Trending 5</a><hr class="style-line">
									</div>

								</div>
							</div>
						</div>
					</div>

					<!---- Start Widget ---->
					<div class="widget wid-gallery">
						<div class="heading"><h4>Top Stories</h4></div>
						<div class="content">
							<div class="col-md-12">
								<div class="row">
									<a href="#"><img src="images/4.jpg" />
									<h5 class="top-name">
										<a href="#">Ini Namenya</a>
									</h5>

									<div class="top-name">
										<hr class="style-line">
										<a href="#">Top Stories 2</a><hr class="style-line"> 
										<a href="#">Top Stories 3</a><hr class="style-line"> 
										<a href="#">Top Stories 4</a><hr class="style-line"> 
										<a href="#">Top Stories 5</a><hr class="style-line"> 
										<a href="#">Top Stories 6</a><hr class="style-line">
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-content">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<div class="box">
								<div class="box-header header-natural">
									<h2>Natural</h2>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-md-12">
											<img src="images/6.jpg" />
											<h3><a href="#">Marshall, Will, and Holly on a Routine Expedition</a></h3>
											<span><i class="fa fa-heart"></i> 1,200 / <i class="fa fa-calendar"></i> 25/3/2015 / <i class="fa fa-comment-o"> / </i> 10 <i class="fa fa-eye"></i> 945</span>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</span>
											<p>Marshall, Will, and Holly on a routine expedition, met the greatest earthquake ever known. High on the rapids, it struck their tiny raft! And plunged them down a thousand feet below…...</p>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box">
								<div class="box-header header-natural">
									<h2>Natural</h2>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-md-12">
											<img src="images/6.jpg" />
											<h3><a href="#">Marshall, Will, and Holly on a Routine Expedition</a></h3>
											<span><i class="fa fa-heart"></i> 1,200 / <i class="fa fa-calendar"></i> 25/3/2015 / <i class="fa fa-comment-o"> / </i> 10 <i class="fa fa-eye"></i> 945</span>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</span>
											<p>Marshall, Will, and Holly on a routine expedition, met the greatest earthquake ever known. High on the rapids, it struck their tiny raft! And plunged them down a thousand feet below…...</p>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box">
								<div class="box-header header-natural">
									<h2>Natural</h2>
								</div>
								<div class="box-content">
									<div class="row">
										<div class="col-md-12">
											<img src="images/6.jpg" />
											<h3><a href="#">Marshall, Will, and Holly on a Routine Expedition</a></h3>
											<span><i class="fa fa-heart"></i> 1,200 / <i class="fa fa-calendar"></i> 25/3/2015 / <i class="fa fa-comment-o"> / </i> 10 <i class="fa fa-eye"></i> 945</span>
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half"></i>
											</span>
											<p>Marshall, Will, and Holly on a routine expedition, met the greatest earthquake ever known. High on the rapids, it struck their tiny raft! And plunged them down a thousand feet below…...</p>
										</div>	
									</div>
								</div>
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="copy-right">
			<p>Copyright 2015 - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> Designed by 365Bootstrap.com</p>
		</div>
	</footer>
	<!-- Footer -->
	  
	  <?php
	  	include 'modal.php';
	  ?>

	<!-- JS -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo-1").owlCarousel({
        autoPlay: 3000,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [400,1]
      });
	  $("#owl-demo-2").owlCarousel({
        autoPlay: 3000,
        items : 3,
        
      });
    });
    </script>
	
	
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
	
	$(window).load(function()
	{
	    $('#myModal').modal('show');
	});
	
</script>

</body>
</html>