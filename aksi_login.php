<?php 
//koneksi
require_once('koneksi.php');

if (!isset($_SESSION)) {
	session_start();
	# code...
}

//ambil data dari form
$username=mysqli_real_escape_string($conn, $_POST['username']);
$password=mysqli_real_escape_string($conn, $_POST['password']);

//masukkan data ke database
$query="SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
$data= mysqli_query($conn,$query);
 
//cek jumlah data yang ada
$login=mysqli_num_rows($data);

if($login > 0) {

	$_SESSION['username']= $username;
	// echo "selamat datang";
	header("location: tampil_data.php");
} else {
	// echo "gagal";
	header("location: login.php");
}

?>