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

	include "app/Track.php";

	$id = $_GET['id'];

	$trk = new App\Track();
	$row = $trk->edit($id);
	?>

		<br>
		<center>
		<font color="#3d3d3e">
			<font face="Courier New">
		<h2>EDIT DAFTAR TRACK</h2>
			</font>
		</font>
		</center>
		<br>
	<form method="POST" action="track_proses.php">
		<table>
			<tr>
				<td>ID TRACK</td>
				<td><input type="text" name="track_id" value="<?php echo $row['track_id']; ?>"></td>
			</tr>
			<tr>
				<td>NAMA TRACK</td>
				<td><input type="text" name="track_name" value="<?php echo $row['track_name']; ?>"></td>
			</tr>
			<tr>
				<td>ID ARTIS</td>
				<td><input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>"></td>
			</tr>
			<tr>
				<td>ID ALBUM</td>
				<td><input type="text" name="album_id" value="<?php echo $row['album_id']; ?>"></td>
			</tr>
			<tr>
				<td>WAKTU</td>
				<td><input type="text" name="time" value="<?php echo $row['time']; ?>"></td>
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