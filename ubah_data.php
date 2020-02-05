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

//memasukkan data ke database
	$query="UPDATE  tb_kdr  SET nama='$nama', alamat='$alamat', gender='$gender', status='$status', golongan='$golongan' WHERE nik='$nik' ";
	$ubah=mysqli_query($conn,$query);

//langsung pindah ke laman tampil data
	header('location: tampil_data.php');




 ?>