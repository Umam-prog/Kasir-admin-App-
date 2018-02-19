<?php 

$server = "ec2-174-129-221-240.compute-1.amazonaws.com";
$database = "d1nhc1qlm62r9k";
$user = "rytunwlkntkiub";
$pass = "aa04e2f3a40fc883b53690ec04b02a6f8a5e36b6880bd11a6d9d39ba66fcd059";

try {
	$conn = new PDO("pgsql:host=$server;dbname=$database",$user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

 ?>