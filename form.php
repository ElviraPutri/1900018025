<!DOCTYPE html>
<html>
<head>
	<title>Hasil Input Data Pos Kita</title>

	<link rel="stylesheet" type="text/css" href="tp.css">

</head>
<body id="hasil" class="isi" >

<div class="all">
	<h1 id="h1">DATA HASIL INPUT</h1>
	<br>
	<hr>
	<br>

<?php 

	$fp = fopen("form.txt", "a+");

	echo "<table align='center' border:0 cellpadding = 10>";
	while ($isi = fgets($fp,200)) {
		$pisah = explode('|', $isi);

		echo "<center>";
		echo "<tr><td>== DATA PENGIRIM === </td></tr>";		
		echo "<tr><td> Nama </td><td>: ".$pisah[0]."</td></tr>";
		echo "<tr><td> Alamat </td><td>: ".$pisah[1]."</td></tr>";
		echo "<tr><td> No. Tlp </td><td>: ".$pisah[2]."</td></tr>";

		echo "<tr><td>== DATA PENERIMA === </td></tr>";		
		echo "<tr><td> Nama </td><td>: ".$pisah[3]."</td></tr>";
		echo "<tr><td> Alamat </td><td>: ".$pisah[4]."</td></tr>";
		echo "<tr><td> No. Tlp </td><td>: ".$pisah[5]."</td></tr>";

		echo "<tr><td>== RINCIHAN PAKET === </td></tr>";
		echo "<tr><td> Deskripsi </td><td>: ".$pisah[6]."</td></tr>";
		echo "<tr><td> Jumlah </td><td>: ".$pisah[7]."</td></tr>";
		echo "<tr><td> Berat </td><td>: ".$pisah[8]."</td></tr>";
		echo "<tr><td> Volume </td><td>: P : ".$pisah[9]."cm,  L : ".$pisah[10]."cm,  T : ".$pisah[11]."cm</td></tr>";
		echo "<tr><td> Jarak </td><td>: ".$pisah[12]."</td></tr>";
		echo "<tr><td> Layanan </td><td>: ".$pisah[13]."</td></tr>";

		echo "<tr><td>== RINCIHAN TARIF LAYANAN PENGIRIMAN PAKET === </td></tr>";	
		echo "<tr><td> Tarif Berat </td><td>: ".$pisah[14]."</td></tr>";
		echo "<tr><td> Tarif Volume </td><td>: ".$pisah[15]."</td></tr>";
		echo "<tr><td> Tarif Jarak </td><td>: ".$pisah[16]."</td></tr>";
		echo "<tr><td> Tarif Layanan </td><td>: ".$pisah[17]."</td></tr>";
		echo "<tr><td> Total Tarif </td><td>: ".$pisah[18]."</td></tr>";
		
		echo "<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
		echo "</center>";
	}
	echo "</table>";

 ?>

	<br><br>
	<center>
	<a href="index.html">: : Kembali Ke Menu Awal : :</a>
	</center>
	<br>
 </div>

	<div class="footer">
		Tugas Proyek [1900018025] _ &copy; ElviraPC
	</div>	

</body>
</html>
