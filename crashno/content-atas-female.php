<div id="main-content"><!-- background not working -->
	<div class="col-md-9">
		<div class="box">
			<div class="box-header header-vimeo">
				<h2><?php echo $namaGrup[0]; ?></h2>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="col-md-6">
						<div class="wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<a href="single.html">
										<i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
									</a>
								</div>
								<?php echo getImageFeed($dataJK[0], $auth, 1); ?>
							</div>
							<h3 class="vid-name"><a href="#"><?php echo getTitleFeed($dataJK[0], $auth, 1); ?></a></h3>
						</div>
					</div>
					<div class="col-md-6">
						<div class="post wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<a href="single.html">
										<i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
									</a>
								</div>
								<?php echo getImageFeed($dataJK[0], $auth, 2); ?>
							</div>
							<div class="wrapper">
								<h5 class="vid-name"><a href="#"><?php echo getTitleFeed($dataJK[0], $auth, 2); ?></a></h5>
							</div>
						</div>
						<div class="post wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<a href="single.html">
										<i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
									</a>
								</div>
								<?php echo getImageFeed($dataJK[0], $auth, 3); ?>
							</div>
							<div class="wrapper">
								<h5 class="vid-name"><a href="#"><?php echo getTitleFeed($dataJK[0], $auth, 3); ?></a></h5>
							</div>
						</div>
						<div class="post wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<a href="single.html">
										<i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
									</a>
								</div>
								<?php echo getImageFeed($dataJK[0], $auth, 4); ?>
							</div>
							<div class="wrapper">
								<h5 class="vid-name"><a href="#"><?php echo getTitleFeed($dataJK[0], $auth, 4); ?></a></h5>
							</div>
						</div>
						<div class="post wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<a href="single.html">
										<i class="fa fa-play-circle-o fa-3x" style="color: #fff"></i>
									</a>
								</div>
								<?php echo getImageFeed($dataJK[0], $auth, 5); ?>
							</div>
							<div class="wrapper">
								<h5 class="vid-name"><a href="#"><?php echo getTitleFeed($dataJK[0], $auth, 5); ?></a></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="box-header header-natural">
				<h2<?php echo $namaGrup[1]; ?></h2>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="col-md-4">
						<?php echo getImageFeed($dataJK[1], $auth, 1); ?>
						<h3><a href="#"><?php echo getTitleFeed($dataJK[1], $auth, 1); ?></a></h3>
					</div>
					<div class="col-md-4">
						<?php echo getImageFeed($dataJK[1], $auth, 2); ?>
						<h3><a href="#"><?php echo getTitleFeed($dataJK[1], $auth, 2); ?></a></h3>
					</div>
					<div class="col-md-4">
						<?php echo getImageFeed($dataJK[1], $auth, 3); ?>
						<h3><a href="#"><?php echo getTitleFeed($dataJK[1], $auth, 3); ?></a></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<?php echo getImageFeed($dataJK[1], $auth, 4); ?>
						<h3><a href="#"><?php echo getTitleFeed($dataJK[1], $auth, 4); ?></a></h3>
					</div>
					<div class="col-md-4">
						<?php echo getImageFeed($dataJK[1], $auth, 5); ?>
						<h3><a href="#"><?php echo getTitleFeed($dataJK[1], $auth, 5); ?></a></h3>
					</div>
					<div class="col-md-4">
						<?php echo getImageFeed($dataJK[1], $auth, 6); ?>
						<h3><a href="#"><?php echo getTitleFeed($dataJK[1], $auth, 6); ?></a></h3>
					</div>
				</div>
			</div>
		</div>

		<div class="box">
			<div class="box-header header-natural">
				<h2><?php echo $namaGrup[2]; ?></h2>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="col-md-4">
						<?php echo getImageFeed($dataJK[2], $auth, 1); ?>
						<h3><a href="#"><?php echo getTitleFeed($dataJK[2], $auth, 1); ?></a></h3>
					</div>
					<div class="col-md-4">
						<?php echo getImageFeed($dataJK[2], $auth, 2); ?>
						<h3><a href="#"><?php echo getTitleFeed($dataJK[2], $auth, 2); ?></a></h3>
					</div>
					<div class="col-md-4">
						<?php echo getImageFeed($dataJK[2], $auth, 3); ?>
						<h3><a href="#"><?php echo getTitleFeed($dataJK[2], $auth, 3); ?></a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
