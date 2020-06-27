<?php 

	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$tlp = $_POST['tlp'];
		$jk = $_POST['jk'];
		$goldar = $_POST['goldar']; 
		$agama = $_POST['agama'];
		$prestasi = $_POST['prestasi'];

		echo "<br><h1 align='center'> DATA DIRI </h1><br>";
		echo "<table align='center' cellpadding = '10px'>
				<hr><br>
				<tr><td> Nama </td><td> : $nama </td></tr>
				<tr><td> Alamat </td><td> : $alamat </td></tr>
				<tr><td> Tlp </td><td> : $tlp </td></tr>
				<tr><td> Jenis Kelmain </td><td> : $jk </td></tr>
				<tr><td> Golongan Darah </td><td> : $goldar </td></tr>
				<tr><td> Agama </td><td> : $agama </td></tr>
				<tr><td> Prestasi </td><td> : $prestasi </td></tr></table><br><br>";
	}

 ?>	
 <a href="form.html"><center>Kembali</center></a>
