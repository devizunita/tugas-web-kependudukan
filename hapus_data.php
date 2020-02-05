<?php 
//koneksi
require_once('koneksi.php');

$nik=$_GET['nik'];

//echo $id;
$query="DELETE FROM  tb_kdr  WHERE nik= '$nik'";
$data=mysqli_query($conn,$query);

//langsung pindah ke laman tampil data
	header('location: tampil_data.php');

 ?>