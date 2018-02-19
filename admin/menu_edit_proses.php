<?php

include("koneksi.php");

$query = "update menu set nama=?, harga=?, tipe = ?, status = ?,gambar = ? where id=?";
$stmt = $conn ->prepare($query);
$stmt->bindParam(1, $_POST['nama']);
$stmt->bindParam(2, $_POST['harga']);
$stmt->bindParam(3, $_POST['tipe']);
$stmt->bindParam(4, $_POST['status']);


if($_FILES['gambar']['name'] != ""){
$nama_file 		= $_FILES['gambar']['name'];
$ukuran_file 	= $_FILES['gambar']['size'];
$tipe_file		= $_FILES['gambar']['type'];
$temporary_file = $_FILES['gambar']['tmp_name'];
$path			= "../img/".$_POST['tipe']."/".$nama_file ;

// die(var_dump($path));
$nama = "/". $_POST['tipe']."/".$nama_file;
$upload 		= move_uploaded_file($temporary_file, $path);
$stmt->bindParam(5, $nama);
}else {
	$stmt->bindParam(5, $_POST['gambar_nama']);
}

$stmt->bindParam(6, $_POST['id']);
$stmt_ex = $stmt->execute();

if ($stmt_ex){
	header("location:menu.php");
	var_dump("berhasil");
} 
else {
	echo $stmt_ex;
	header("location:menu.php");
}
?>