<!DOCTYPE html>
<html>
<head>
	<title>Hasil Input Data</title>
	<style type="text/css">
	body{
		background: #97998B;
		font-family: Lucida Bright;
		font-size: 14;
	}
	.hasil{
		margin: 90px auto;
		width: 500px;
		background: #BA7543;
		padding: 35px 25px;
		border-radius: 5px;
		word-spacing: 2px;		
		opacity: 0.9;
	}
	.link{
		text-align: center;			
	}
	button{
		padding: 4px 25px;
		border-radius: 5px;
		background-color: #69A5B4;
	}		
	</style>

</head>
<body>
	<div class="hasil">
	<?php 
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$tlp = $_POST['tlp']; 
		$jk = @$_POST['jk'];
		$goldar = @$_POST['goldar'];
		$agama = $_POST['agama'];
		$prestasi = $_POST['prestasi'];

		$error = false;

		echo "<br><h1 align='center'> DATA DIRI </h1><br>";
		echo "<table align='center' cellpadding = '10px'>
				<hr><br>";
		echo "<tr><td> Nama </td><td> : $nama	</td></tr>";
		echo "<tr><td> Alamat </td><td> : $alamat </td></tr>";
		echo "<tr><td> Tlp </td><td> : $tlp </td></tr>";		
		if( $jk == ''){
			echo "<tr><td> Jenis Kelamin </td><td> : Tidak dipilih </td></tr>";
			$error = true;
		} else{
			echo "<tr><td> Jenis Kelamin </td><td> : $jk </td></tr>"; 
		}
		
		if( $goldar == ''){
			echo "<tr><td> Golongan Darah </td><td> : Tidak dipilih </td></tr>";
			$error = true;
		} else{
			echo "<tr><td> Golongan Darah </td><td> : $goldar </td></tr>"; 
		}				
				
		echo "<tr><td> Agama </td><td> : $agama </td></tr>";

		if( $prestasi == ''){
			echo "<tr><td> Prestasi </td><td> : Tidak diisi </td></tr>";
			$error = true;
		} else{
			echo "<tr><td> Golongan Darah </td><td> : $prestasi </td></tr>"; 
		}

		echo "</table><br><br>";
	}
 	?>
 	<div class="link">
 	<button><a href="form.html"> Kembali</a></button></div>
 	</div>	
</body>
</html>

