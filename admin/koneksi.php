<?php 

$server = "localhost";
$database = "imk";
$user = "root";
$pass = "";

try {
	$conn = new PDO("mysql:host=$server;dbname=$database",$user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

 ?>