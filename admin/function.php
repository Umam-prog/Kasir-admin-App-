<?php 

function show($conn, $query){
	$query = "select * from menu where tipe='$query'";
	foreach($conn->query($query) as $data){
		if($data["status"] == "active")
			echo "<div class='data_image data col-md-3 col-sm-3 col-lg-3'>";
		else{
			echo "<div class='disable data col-md-3 col-sm-3 col-lg-3'>";
			echo "<img class='sold' src='img/sold.png'>";
		}

		echo "<img class='data_img' src='img".$data["gambar"]."'>";
		echo "<h3 class='data_nama'>".$data["nama"]."</h3>";
		echo "<h3 class='data_harga'>Rp".$data["harga"]."</h3>";
		echo "</div>";
	}
}

?>