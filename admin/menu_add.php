<?php

include("koneksi.php");

$query = "insert into menu(nama, harga, tipe, status, gambar) values(?,?,?,?,?)";
$stmt = $conn ->prepare($query);
$stmt->bindParam(1, $_POST['nama']);
$stmt->bindParam(2, $_POST['harga']);
$stmt->bindParam(3, $_POST['tipe']);
$stmt->bindParam(4, $_POST['status']);

$nama_file 		= $_FILES['gambar']['name'];
$ukuran_file 	= $_FILES['gambar']['size'];
$tipe_file		= $_FILES['gambar']['type'];
$temporary_file = $_FILES['gambar']['tmp_name'];
$path			= "../img/".$_POST['tipe']."/".$nama_file ;

// die(var_dump($path));
$nama = "/". $_POST['tipe']."/".$nama_file;
$upload 		= move_uploaded_file($temporary_file, $path);
$stmt->bindParam(5, $nama);

$stmt_ex = $stmt->execute();

if ($stmt_ex){
	echo "1";
	header("location:menu.php");
} 
else {
	echo $stmt_ex;
	header("location:menu.php");
}
?>