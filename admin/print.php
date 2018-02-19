<?php
// memanggil library FPDF
require "koneksi.php";
require('../library/pdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'Laporan Penjualan Selera Uni',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Selama Uni Menjabat Sebagai Direktur',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'ID',1,0);
$pdf->Cell(85,6,'Pesanan',1,0);
$pdf->Cell(27,6,'Harga',1,0);
$pdf->Cell(40,6,'Waktu',1,1);
 
$pdf->SetFont('Arial','',10);
 
// include 'koneksi.php';
// $mahasiswa = mysqli_query($connect, "select * from mahasiswa");
// while ($row = mysqli_fetch_array($mahasiswa)){
  
// }
 
$stmt = $conn->query("SELECT * FROM payment");
$p ="";
	while($data = $stmt->fetch(PDO::FETCH_OBJ)){
		  $pdf->Cell(20,40,$data->id,1,0);
			$datas = json_decode($data->pesanan);
			foreach ($datas as $key => $value) {
				$p = $value->nama . " " .$value->jumlah . "\n". $p;
				# code...
			}
			$pdf->cell(85,40,$p,1,0);
			$pdf->Cell(27,40,$data->jumlah,1,0);
			$pdf->Cell(40,40,$data->waktu,1,1); 
		}

$pdf->Output();
?>