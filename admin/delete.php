<?php 
include "koneksi.php";

$query = "delete from menu  where id=?";
$stmt = $conn ->prepare($query);
$stmt->bindParam(1, $_GET['id']);
$stmt_ex = $stmt->execute();
if ($stmt_ex){
	// die(var_dump($stmt_ex + $_POST['id']));
	header("location:menu.php");
	var_dump("berhasil");
} 
else {
	echo $stmt_ex;
	header("location:menu.php");
}
?>

 ?>