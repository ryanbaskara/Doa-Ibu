<header>
	<?php 
		if($jk=='L') echo "<div class='navbar navbar-default navbar-fixed-top' role='navigation'>";
			else if($jk=='P') echo 	"<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>";
			else echo "<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>";
	?>

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Hackathon Kurio 2K16</a>
        </div>
        <div class="navbar-collapse collapse">
        	<ul class="nav navbar-nav">
				<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
			</ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	          <?php if (@$_COOKIE['login']==1) {
	          ?>
	          <li><a href="logout.php">Logout</a></li>
	          <?php
	          } else {?>
	            <li><a href="#loginModal" data-toggle='modal'>Login</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#daftarModal" data-toggle='modal'">Daftar</a></li>
	          <?php } ?>
	          </ul>
	        </li>
          </ul>
        </div>
      </div>
    </div>  
</header>