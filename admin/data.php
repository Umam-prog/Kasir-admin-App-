<?php

include("koneksi.php");

if($_POST['total'] != 0){

	$query = "insert into payment(pesanan, jumlah) values(?,?)";
	$stmt = $conn ->prepare($query);
	$stmt->bindParam(1, json_encode($_POST['item']));
	$stmt->bindParam(2, $_POST['total']);
	$stmt_ex = $stmt -> execute();

	if ($stmt_ex){
		echo "1";
	} 
	else {
		echo $stmt_ex;
	}
}
?>