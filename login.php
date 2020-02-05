<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet"  href="bootstrap.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
     	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />	

</head>
<body background="1.png">
	<form method="POST" action="aksi_login.php">
		<div  class="yoi" align="center" >
			<h1>Login</h1>
			<table>
				<tr>
					<td>Username</td>
					
					<td><input type="text" name="username" class="form-control" required="required"></td>
				</tr>
				<tr>
					<td>Password</td>
				
					<td><input type="password" name="password" class="form-control" required="required"></td>
				</tr>
				<tr><td></td>
				<td><button type="submit" name="login" class="btn btn-outline-primary" ></i>Login</button><button type="reset" class="btn btn-outline-danger">Batal</button>
				</td>
				</tr>
			</table>
		</div>
	</form>
</body>
</html>