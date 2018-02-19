<?php
include_once ("koneksi.php");
session_start();
$username = $_POST['user_id'];
$password = $_POST['passwd'];

if (!isset ($username) || !isset ($password)){
	header("location:login.php");
	$_SESSION['empty'];
}
else {
	$stmt = $conn->prepare("SELECT * FROM user where user_id=:user");
	$params =  array(
		':user' => $username,
	);
	$stmt->execute($params);
		$jumlahuser = $stmt->rowCount(); 
		if ( $jumlahuser == true ){
				$data = $stmt->fetch(PDO::FETCH_OBJ);
			#if cek  user
				if ($username == $data->user_id && $password == $data->password) {
						$_SESSION['username'] = $data->user_id;
						$masuk = $_SESSION['username'];
						header("location:index.php");}
				else {
						$error = "Username And Password is not match";
							header("location:login.php?error=$error");
					}
			#if validasi user
			} #if validasi jumlah
		else {
				$error = "username or password can't blank";
							// header("location:login.php?error=$error");
			}
		}#tutup else
?>