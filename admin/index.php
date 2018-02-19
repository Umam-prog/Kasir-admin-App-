<!DOCTYPE>
<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("location:login.php");
}
?>

<html>
		<head>
			<title> Admin IMK</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="../css/admin.css">
			<script src="../js/jquery-1.11.3.js"></script>
			<script src="../js/bootstrap.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		</head>
<body style="background-color : #f5f5f5;">
		<div id="wrapper">
			<div id="sidebar-wrapper">
					<div class="btn-toogle">
					<div class="kiri"></div>
					<div class="kanan"><a href="#" id="menu-toggle"><img src="../img/toggle.png" ></a></div>
			</div>
			<img class = "img_user" src="../img/profile.png">
			<div class="user_id">
					<h3>User ID : <?php echo $_SESSION['username']; ?> </h3> 
			</div>
			<ul class="sidebar-nav">
				<li><a href="index.php">&nbsp  <span class="glyphicon glyphicon-home"></span>&nbsp  Dashboard </a></li>
				<li><a href="menu.php">&nbsp  <span class="glyphicon glyphicon-briefcase"></span>&nbsp  Menu</a></li>
				<li><a href="report.php"> &nbsp <span class="glyphicon glyphicon-book"></span>&nbsp  Report</a></li>
			</ul>
			</div>
		<div id="main-content">
			<div  class="container-fluid main" >
					<nav  class="nav-top">
							<a href="logout.php" class="btn btn-danger button-logout" >LOG OUT</a>
							<h5 class="welcome"></h5>	
					</nav>
						<div class="jumbotron" style="border-bottom : 2px solid #222;">
						<h2 style="text-align:right;font-family:'Font Digital';"> 
						Admin Salero UNi</h2>
						<h2 style="text-align:right;"> <i>Kelompok 5 IMK</i></h2>
					</div>	
					<hr style ="background-color:#222;height:5px; width:100%;border-radius:10px;">
			</div>
		</div>
</div>
<script>
//java script buat nav side 
 $("#menu-toggle").click( function (e){
  e.preventDefault();
  $("#wrapper").toggleClass("menuDisplayed");
  });
</script>
</body>
</html>