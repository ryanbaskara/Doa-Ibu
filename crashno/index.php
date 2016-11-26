<?php
	include '../test/getGrup.php';
	include 'topStories.php';
	$temp = topStories();
	
	
	if(isset($_COOKIE['jenis_kelamin'])){
		$jk=$_COOKIE['jenis_kelamin'];
		$auth=$_COOKIE['access_token'];
	}
	else {
		$jk="none";
		$auth = "EPOw1awLNdrVPcflSlKhRiWk1KStBaJUOS4ftxLL";
	}
	
	$dataJK= ambilDataCoCe($jk);
	$namaGrup = getGroup($dataJK, $auth);
	
	ini_set('max_execution_time', 60);
?>

<!DOCTYPE html>
<html lang="en">
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
							<?php getImageFeed($dataJK[0], $auth, 0); ?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<a href="<?php echo getIdFeed($dataJK[0], $auth, 0); ?>"><h2><?php getTitleFeed($dataJK[0], $auth, 0); ?></h2></a>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
						<div class="item">
							<?php getImageFeed($dataJK[1], $auth, 0); ?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<a href="<?php echo getIdFeed($dataJK[1], $auth, 0); ?>"><h2> <?php getTitleFeed($dataJK[1], $auth, 0); ?> </h2></a>
									<br>
								</div>
							</div><!-- /header-text -->
						</div>
						<div class="item">
							<?php getImageFeed($dataJK[2], $auth, 0); ?>
							<!-- Static Header -->
							<div class="header-text hidden-xs">
								<div class="col-md-12 text-center">
									<a href="<?php echo getIdFeed($dataJK[2], $auth, 0); ?>"><h2><?php getTitleFeed($dataJK[2], $auth, 0); ?></h2></a>
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
			<?php
			$jenis_kelamin=$_COOKIE['jenis_kelamin'];
			if($jenis_kelamin=='L')
				include 'content-atas-male.php';
			else if($jenis_kelamin=='P')
				include 'content-atas-female.php';
			else
				include 'content-atas-none.php';
			?>
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
			<?php
			if($jenis_kelamin=='L')
				include 'content-bawah-male.php';
			else if($jenis_kelamin=='P')
				include 'content-bawah-female.php';
			else
				include 'content-bawah-none.php';
			?>
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
	<?php if (!isset($_COOKIE['jenis_kelamin'])) { ?>
		$(window).load(function()
		{
		    $('#myModal').modal('show');
		});
	<?php } ?>

</script>

</body>
</html>
