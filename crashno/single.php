<?php 
	include 'feed.php';
?>
<!DOCTYPE html>
<html lang="en">

<body>
	<?php include 'navbar.php'; ?>
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="single-page container">
		<div class="row">
			<div id="main-content" class="col-md-9">
				<div class="box" style="border:0;">
					<div class="thumbnail">
				      <h1 class="article-name"><?php echo $json['title']; ?></h1>
				      <div class="media">
						  <div class="media-left media-middle">
						    <a href="<?php echo $json['source']['url'] ?>">
						      <img class="pull-left img-circle" src="<?php echo $json['source']['icon'] ?>" alt="..." width="5%">
						    </a>
						  </div>
						  <div class="media-body">
						    <div class="info">
							<h5>By <a href="<?php echo $json['source']['url'] ?>"><?php echo $json['source']['name']; ?></a></h5>
							<!-- <span><i class="fa fa-calendar"></i>25/3/2015</span>  -->
							</div>
						  </div>
						</div>
				      <img src="<?php echo $json['thumbnail']['url']; ?>">
					  <div class="caption">
					        <div class="line"></div>
						<?php echo $json['content'][1]['text']; ?>
						<div class="line"></div>
				      </div>
				    </div>
				</div>
				
				<div class="box">
					<div class="box-header header-natural">
						<h2>Related Article</h2>
					</div>
					<div class="box-content">
						<div class="row">
							<div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>Youtube</span>
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
							</div>
							<div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>Youtube</span>
											<a href="single.html">
												<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
											</a>
											<p>Video's Name</p>
										</div>
										<img src="images/2.jpg" />
									</div>
									<h3 class="vid-name"><a href="#">Video's Name</a></h3>
									<div class="info">
										<h5>	By <a href="#">Kelvin</a></h5>
										<span><i class="fa fa-calendar"></i>25/3/2015</span> 
										<span><i class="fa fa-heart"></i>1,200</span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="wrap-vid">
									<div class="zoom-container">
										<div class="zoom-caption">
											<span>Youtube</span>
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
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar">
				<div class="col-md-3">
					<!---- Start Widget ---->
					<div class="widget wid-gallery">
						<div class="heading"><h4>Top Stories</h4></div>
						<div class="content">
							<div class="col-md-12">
								<div class="row">
									<a href="single.php?id=<?php echo $temp[0]['id']; ?>"><img src="<?php echo $temp[0]['gambar'] ?>" />
									<h5 class="top-name">
									<br>
										<a href="single.php?id=<?php echo $temp[0]['id']; ?>"><?php echo $temp[0]['judul']; ?></a>
									</h5>

									<div class="top-name">
										<hr class="style-line">
										<a href="single.php?id=<?php echo $temp[1]['id']; ?>"><?php echo $temp[1]['judul']; ?></a><hr class="style-line"> 
										<a href="single.php?id=<?php echo $temp[2]['id']; ?>"><?php echo $temp[2]['judul']; ?></a><hr class="style-line"> 
										<a href="single.php?id=<?php echo $temp[3]['id']; ?>"><?php echo $temp[3]['judul']; ?></a><hr class="style-line"> 
										<a href="single.php?id=<?php echo $temp[4]['id']; ?>"><?php echo $temp[4]['judul']; ?></a><hr class="style-line"> 
										<a href="single.php?id=<?php echo $temp[5]['id']; ?>"><?php echo $temp[5]['judul']; ?></a><hr class="style-line">
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

	<?php
		include 'modal.php';
	?>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 5,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,4]
      });

    });
    </script>
	
</body>
</html>
