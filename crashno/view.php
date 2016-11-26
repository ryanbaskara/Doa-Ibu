<?php 
	include 'feed_lainnya.php';
?>
<!DOCTYPE html>
<html lang="en">

<body>
	<?php include 'navbar.php'; ?>
</body>
	<div id="page-content" class="index-page container">
		<div class="col-md-12">
				<div class="box">
						<div class="box-header header-natural">
							<h2><?php echo $json['name'] ?></h2>
						</div>
						<div class="box-content">
							<div class="row">
							<?php 
								$counter=0;
								for($i=0;$i<count($id_categories);$i++){
									$temp=ambil($id_categories[$i]);
									foreach ($temp['data'] as $hasil) {
										?><div class="col-md-4">
											<img src="<?php echo $hasil['thumbnail']['url']?>" />
											<h3><a href="single.php?id=<?php echo $hasil['id'] ?>"><?php echo $hasil['title']; ?></a></h3>
										</div>
										<?php
										$counter++;
										if ($counter==6) break;
									}
									if($counter==6) break;
								}
							?>
							</div>
						</div>
				</div>
		</div>
	</div>
</html>