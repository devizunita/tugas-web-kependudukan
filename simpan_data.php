<?php
		//koneksi
	require_once('koneksi.php');

	//ambil data dari from
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$gender=$_POST['gender'];
	$alamat=$_POST['alamat'];
	$status=$_POST['status'];
	$golongan=$_POST['golongan'];

	$query="INSERT INTO  tb_kdr  VALUES('$nik', '$nama', '$gender', '$alamat', '$status' , '$golongan')";
	$simpan=mysqli_query($conn,$query);


	//langsung pindah ke laman tampil data
	header('location: tampil_data.php');



	if ($simpan) {
		echo "Data Berhasil Disimpan";
		}else{
			echo "Data Gagal Disimpan";
		}
	?>

	<a href="tampil_data.php">Kembali untuk lihat data </a>