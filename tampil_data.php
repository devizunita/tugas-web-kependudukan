<?php 

	//memanggil file koneksi
	require_once('koneksi.php');
	
	require_once('keamanan.php');
	//include('koneksi.php');


	//ambil data daridatabase
	$query="SELECT * FROM  tb_kdr ";
	$data=mysqli_query($conn,$query);



	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Penduduk</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet"  href="bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />	

</head>
<body background="3.png">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      		<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        		Menu
        		</a>
     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="logout.php">Keluar</a></div>
  			</li>
			</ul>
		</div>
	</nav>

	<section class="table" >
	<h1 align="center">Data Penduduk</h1>

		<table border="1" align="center">
			<tr>
				<th>Nik</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>Alamat</th>
				<th>Status</th>
				<th>Golongan</th>
				<th>Keterangan</th>
			</tr>

		<?php
			while ($row=mysqli_fetch_assoc($data)) { 	
		?>
			<tr>
				<td><?php echo $row['nik'];?></td>
				<td><?php echo $row['nama'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['alamat'];?></td>
				<td><?php echo $row['status'];?></td>
				<td><?php echo $row['golongan'];?></td>
				<td>
					<a href="edit_data.php?nik=<?php echo $row['nik']; ?>">"Edit"</a>
					<a href="hapus_data.php?nik=<?php echo $row['nik'];?>" onclick="return confirm('Yakin nih mau dihapus??')">Delete
				</td>
			</tr>
				<?php
				    }
				?>
		</table>
	</section>

	<div  align="center" class="sap">
		<h1 >Input Data</h1>
	
		<form method="post" action="simpan_data.php">
			<table border="0" align="center">
				<tr>
					<td>Masukkan Nik</td>
					<td></td>
					<td><input type="text" name="nik" required="required" ></td>
				</tr>
				<tr>
					<td>Masukkan Nama</td>
					<td></td>
					<td><input type="text" name="nama" required="required"></td>
				</tr>
				<tr>
					<td>Masukkan Gender</td>
					<td></td>
					<td><input type="radio" value="L" name="gender" >laki-laki<input type="radio" value="P" name="gender">Perempuan</td>
				</tr>
				<tr>
					<td>Masukkan Alamat</td>
					<td></td>
					<td><input type="text" name="alamat" required="required"></td>
				</tr>
				<tr>
					<td>Masukkan Status</td>
					<td></td>
					<td><input type="text" name="status" required="required"></td>
				</tr>
				<tr>
					<td>Masukkan Golongan</td>
					<td></td>
					<td><input type="radio" value="WNI" name="golongan" >WNI<input type="radio" value="WNA" name="golongan">WNA</td>
				</tr>
					<tr align="center">
						<td><button type="submit" class="btn btn-outline-primary" ><i class="material-icons ">turned_in_not</i>Save</button></td>
						<td></td>
						<td><button type="reset" class="btn btn-outline-danger"><i class="material-icons ">delete</i>Batal</button>
						</td>
				</tr>
		</form>
	</div>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>