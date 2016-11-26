	<!-- Modal -->
	  <div class="modal fade " id="myModal" role="dialog">
	    <div class="modal-dialog">
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	           <a class="btn btn-danger btn-xm" data-dismiss="modal" style="float:right">X</a>
	          <h4 class="modal-title text-center">Jenis Kelamin</h4>
	        </div>
	        <div class="modal-body">
	          <div class="col-md-6 text-center">
	          	<a href="cek_awal.php?jk=L">
	          	<img src="images/boy.png">
	          	<h4>Laki-Laki</h4>
	          	</a>
	          </div>
	          <div class="col-md-6 text-center">
	          	<a href="cek_awal.php?jk=L">
	          	<img src="images/girl.png">
	          	<h4> Perempuan </h4>
	          	</a>
	          </div>
	          <br>
	        </div>
	        <div class="modal-footer">
	          &nbsp;
	        </div>
	      </div>
	    </div>
	  </div>

	<div class="modal fade " id="loginModal" role="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <a class="btn btn-danger btn-xm" data-dismiss="modal" style="float:right">X</a>
	            <div class="modal-header">
	                <h2>Login</h2>
	            </div>
	                <div class="modal-body">
	                    <form action="fungsi.php" method="post" role="form-group">
	                        <div class="form-group">
	                            <label for="email">Email : </label>
	                            <div class="input-group">
	                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
	                                <input type="email"  class="form-control" name="email" id="username" placeholder="Email"></div>
	                        </div>
	                        <div class="form-group">
	                            <label for="pwd">Password : </label>
	                            <div class="input-group">
	                                <span class="input-group-addon"><span class="fa fa-lock"></span></span>
	                                <input type="password" class="form-control" name="password" id="pswd" placeholder="Password"></div>
	                        </div>
	                       <button type="submit" class="btn btn-danger raised" name="login">Login</button>
	                    </form>

	                </div>
	            
	        </div>
	    </div>
	  </div>

	  <div class="modal fade " id="daftarModal" role="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <a class="btn btn-danger btn-xm" data-dismiss="modal" style="float:right">X</a>
	            <div class="modal-header">
	                <h2>Daftar</h2>
	            </div>
	                <div class="modal-body">
	                    <form action="fungsi.php" method="post" role="form-group">
	                        <div class="form-group">
	                            <label for="name">Name : </label>
	                            <div class="input-group">
	                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
	                                <input type="text"  class="form-control" name="nama" id="nama" placeholder="Name"></div>
	                        </div>
	                        <div class="form-group">
	                            <label for="email">Email : </label>
	                            <div class="input-group">
	                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
	                                <input type="email"  class="form-control" name="email" id="username" placeholder="Email"></div>
	                        </div>
	                        <div class="form-group">
	                            <label for="pwd">Password : </label>
	                            <div class="input-group">
	                                <span class="input-group-addon"><span class="fa fa-lock"></span></span>
	                                <input type="password" class="form-control" name="password" id="pswd" placeholder="Password"></div>
	                        </div>
	                        <div class="form-group">
	                            <label for="jk">Jenis Kelamin : </label>
	                            <div class="input-group">
	                            	<div class="radio">
									  <label><input type="radio" value="L" name="jenis_kelamin">Laki-Laki</label>
									</div>
									<div class="radio">
									  <label><input type="radio" value="P" name="jenis_kelamin">Perempuan</label>
									</div>
	                            </div>
	                        </div>
	                       <button type="submit" class="btn btn-danger raised" name="register">Daftar</button>
	                    </form>

	                </div>
	            
	        </div>
	    </div>
	  </div>