<!DOCTYPE html>
<html>
<head>

	<title>Pos Kita</title>
	<link rel="stylesheet" type="text/css" href="tp.css">

</head>
<body>

	<div class="awal">
	<?php 

		$fp = fopen("form.txt", "a+");

		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$tlp = $_POST['tlp'];
		$nama1 = $_POST['nama1'];
		$alamat1 = $_POST['alamat1'];
		$tlp1 = $_POST['tlp1'];

		$des = $_POST['des'];
		$jum = $_POST['jum'];
		$b = $_POST['b'];
		$p = $_POST['p'];
		$l = $_POST['l'];
		$t = $_POST['t'];
		$j = $_POST['j'];
		$layanan = $_POST['layanan'];

		$tarifb = $_POST['tarifb'];
		$tarifv = $_POST['tarifv'];
		$tarifj = $_POST['tarifj'];
		$tarifl = $_POST['tarifl'];
		$tarift = $_POST['tarift'];
		

	fputs($fp,"$nama|$alamat|$tlp|$nama1|$alamat1|$tlp1|$des|$jum|$b|$p|$l|$t|$j|$layanan|$tarifb|$tarifv|$tarifj|$tarifl|$tarift\n");
	fclose($fp);

	echo "<h1 align='center' id='h'>Data Tersimpan <br> Silahkan Cek Data Hasil Input</h1> <br>";

 	?>

		<div class="tombol">
			<button><a href=form.php>Lihat Data Input</a></button>
 			<button><a href=index.html>Kembali</a></button>
 		</div>
 		<br>
 	</div>
	
	<div class="footer">
		Tugas Proyek [1900018025] _ &copy; ElviraPC
	</div>
		
</body>
</html>
