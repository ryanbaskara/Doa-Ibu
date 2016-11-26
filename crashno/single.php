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
			
			</div>
			<div id="sidebar">
				<div class="col-md-3">
					<!---- Start Widget ---->
					<div class="widget wid-gallery">
						<div class="heading"><h4>Last Seen</h4></div>
						<div class="content">
							<div class="col-md-12">
								<div class="row">
									<div class="top-name">
										<hr class="style-line">
										<?php foreach ($data as $row) {
										?>
										<a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a><hr class="style-line"> <br>
										<?php
										} ?>
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
