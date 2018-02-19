<!DOCTYPE>
<?php
session_start();
if (isset($_SESSION['username'])) {
	header("location:admin.php");
}
?>
<html>
	<head>
		<title> Proyek IMK</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="../js/bootstrap.js"></script>

	</head>
<body>
	<div class="container-fluid body">
		<div class="container-fluid">
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="navbar-header">
							<a hef="index.php" class="navbar-brand">Admin IMK</a> 
					</div>

				</nav>
		</div>

		<div class="container" style="margin-top : 3.7%; ">
			<div class="col-md-4 col-sm-12 col-xs-12 col badan">
			<form action="login_proses.php" method="post"> 
			<div id="badan1">
				<div class="col-md-12 badan1" >
							<h2 align="center"> Please Login </h2></br>
							<div class="form-group has-feedback">
							<input type="text" name="user_id" maxlength="30" class="form-control input-lg transparent-input username" placeholder="User ID">
							<span class="glyphicon glyphicon-user form-control-feedback white"></span> </br>
						</div>
						 
						 <div class="form-group has-feedback">
							<input type="password" name="passwd" maxlength="30" class="form-control input-lg transparent-input " placeholder="Password"><span class="glyphicon glyphicon-lock form-control-feedback white"></span></br>
						
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="form-control btn-block submit">
						</div>
						
					</div> <!-- tutup class col-md-12 -->
			 	</div>
			 </form>
		</div><!--tutup class col-md-4 col-md-offset-8 col col-sm-12 col-xs-12 badan -->
		</div> <!--tutup container-->
	</div>
</body>
</html>
