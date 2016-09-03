<!DOCTYPE html>
<html>
<head>
	<title>dasboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-default" align="center">
			<div class="omb_login">
				    <h3 class="omb_authTitle" style="">Sign up</a></h3>
				    <div class="row omb_row-sm-offset-3 omb_socialButtons">
				      <div class="col-xs-4 col-sm-2">
				        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
				          <i class="fa fa-facebook visible-xs"></i>
				          <span>Facebook</span>
				        </a>
				      </div>
				      <div class="col-xs-4 col-sm-2">
				        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
				          <i class="fa fa-twitter visible-xs"></i>
				          <span>Twitter</span>
				        </a>
				      </div>
				      <div class="col-xs-4 col-sm-2">
				        <a href="#" class="btn btn-lg btn-block omb_btn-google">
				          <i class="fa fa-google-plus visible-xs"></i>
				          <span>Google+</span>
				        </a>
				      </div>
				    </div>

				    <div class="row omb_row-sm-offset-3 omb_loginOr">
				      <div class="col-xs-12 col-sm-6">
				        <hr class="omb_hrOr">
				        <span class="omb_spanOr">OR</span>
				      </div>
				    </div>

				<div class="panel-heading"><b>Login</b></div>
				<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">		
					<table>
						<div class="row omb_row-sm-offset-3">
					      	<div class="col-xs-12 col-sm-6">
					        <form class="omb_loginForm" action="" autocomplete="off" method="POST">
					          <div class="input-group">
					            <span class="input-group-addon"><i class="fa fa-user"></i></span>
					            <input type="text" class="form-control" name="username" placeholder="username">
					          </div>
						
							
							 <span class="help-block"></span>

					          <div class="input-group">
					            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
					            <input type="password" class="form-control" name="password" placeholder="Password">
					          </div>
					          <span class="help-block"></span>
		          				<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		        			</form>
							</div>
		   				</div>
						    <div class="row omb_row-sm-offset-3">
						      <div class="col-xs-12 col-sm-3">
						        <label class="checkbox">
						          <input type="checkbox" value="remember-me">Remember Me
						        </label>
						      </div>
						      <div class="col-xs-12 col-sm-3">
						        <p class="omb_forgotPwd">
						          <a href="#">Forgot password?</a>
						        </p>
						      </div>
						    </div>
					</table>
				</form>
		</div>
	</div> 
</body>
</html>