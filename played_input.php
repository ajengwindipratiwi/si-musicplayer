<!DOCTYPE html>
<html>
<head>
	<title>UTS PEMROGRAMAN WEB</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>

<div>
	
	<!-- ini untuk header -->
	<div class="header">

		<?php  include "header.php"; ?>
	
	</div>

	<!-- ini untuk menu -->
	<div class="menu">

		<?php  include "menu.php"; ?>
	
	</div>


	<!-- ini untuk utama -->
	<div class="utama">
	
		<br>
		<center>
		<font color="#3d3d3e">
			<font face="Courier New">
		<h2>TAMBAH DAFTAR PUTAR</h2>
			</font>
		</font>
		</center>
		<br>
	<form method="POST" action="played_proses.php">
		<table>
			<tr>
				<td>ID ARTIS</td>
				<td><input type="text" name="artist_id"></td>
			</tr>
			<tr>
				<td>ID ALBUM</td>
				<td><input type="text" name="album_id"></td>
			</tr>
			<tr>
				<td>ID TRACK</td>
				<td><input type="text" name="track_id"></td>
			</tr>
			<tr>
				<td>PLAYED</td>
				<td><input type="date" name="played"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnsimpan" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		<?php  include "footer.php"; ?>
	
	</div>

</div>

</body>
</html>