<?php 
//koneksi
require_once('koneksi.php');

$nik=$_GET['nik'];

//echo $id;
$query="SELECT * FROM tb_kdr WHERE nik= '$nik'";
$data=mysqli_query($conn,$query);

//menampung hasil
$row=mysqli_fetch_assoc($data);


 ?>


<!DOCTYPE html>
	<html>
	<head>
		<title>Data Penduduk</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet"  href="bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
	</head>

<body background="3.png"  class="sap">
<h1 align="center" >Ubah Data</h1>
		<form method="post" action="ubah_data.php">
				
				<table border="0" align="center">
					<tr>
						<td>Masukkan Nik</td>
						<td></td>
						<td><input type="text" name="nik" required="required" value="<?php echo $row['nik'];?>"></td>
					</tr>
					<tr>
						<td>Masukkan Nama</td>
						<td></td>
						<td><input type="text" name="nama" required="required" value="<?php echo $row['nama'];?>"></td>
					</tr>
					<tr>
						<td>Masukkan Gender</td>
						<td></td>
						<td><input type="radio" value="L" <?php if (!strcmp($row['gender'],"L")) {echo "CHECKED";
							# code...
						};?> name="gender" required="required">laki-laki
							<input type="radio" value="P" <?php if (!strcmp($row['gender'],"P")) {echo "CHECKED";
							# code...
						};?>  name="gender">Perempuan</td>
					</tr>
					<tr>
						<td>Masukkan Alamat</td>
						<td></td>
						<td><input type="text" name="alamat" required="required" value="<?php echo $row['alamat'];?>"></td>
					</tr>
					<tr>
						<td>Masukkan Status</td>
						<td></td>
						<td><input type="text" name="status" required="required" value="<?php echo $row['status'];?>"></td>
					</tr>
					<tr>
						<td>Masukkan Golongan</td>
						<td></td>
						<td><input type="radio" name="golongan" value="WNI" <?php if (!strcmp($row['golongan'],"WNI")) {echo "CHECKED";
						};?> required="required" >WNI
							<input type="radio"  name="golongan" value="WNA" <?php if (!strcmp($row['golongan'],"WNA")) {echo "CHECKED";
						};?>  >WNA</td>
					</tr>
					<tr align="center">
						<td><button type="submit" class="btn btn-outline-info" ><i class="material-icons ">turned_in_not</i>Save</button></td>
					</tr>
					

		
   </table>
</form>

</body>
</html>
