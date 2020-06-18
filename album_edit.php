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
	
	<?php 

	include "app/Album.php";

	$id = $_GET['id'];

	$alb = new App\Album();
	$row = $alb->edit($id);
	?>

		<br>
		<center>
		<font color="#3d3d3e">
			<font face="Courier New">
		<h2>EDIT DAFTAR ALBUM</h2>
			</font>
		</font>
		</center>
		<br>
	<form method="POST" action="album_proses.php">
		<table>
			<tr>
				<td>ID ARTIS</td>
				<td><input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>"></td>
			</tr>
			<tr>
				<td>ID ALBUM</td>
				<td><input type="text" name="album_id" value="<?php echo $row['album_id']; ?>"></td>
			</tr>
			<tr>
				<td>NAMA ALBUM</td>
				<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnedit" value="UPDATE"></td>
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