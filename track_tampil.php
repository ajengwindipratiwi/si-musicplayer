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
		<h2>Hello Music Lovers, Welcome to MUSIC IS LIFE</h2>
		<br>
		<h3>"DAFTAR TRACK"</h3>
			</font>
		</font>
		</center>
		<br>
	<a href="track_input.php">Tambah Data Track</a>
		<br><br>
	<?php 

	include "app/Track.php";

	$trk = new App\Track();
	$rows = $trk->tampil();

	 ?>

	 <table>
	 	<tr>
	 		<th>ID TRACK</th>
	 		<th>NAMA TRACK</th>
	 		<th>ID ARTIS</th>
	 		<th>ID ALBUM</th>
	 		<th>WAKTU</th>
	 		<th>EDIT</th>
	 		<th>HAPUS</th>
	 	</tr>
	 	<?php foreach ($rows as $row ) { ?>
	 	<tr>
	 		<td><?php echo $row['track_id']; ?></td>
	 		<td><?php echo $row['track_name']; ?></td>
	 		<td><?php echo $row['artist_id']; ?></td>
	 		<td><?php echo $row['album_id']; ?></td>
	 		<td><?php echo $row['time']; ?></td>
	 		<td><a href="track_edit.php?id=<?php echo $row['track_id']; ?>">Edit</a></td>
	 		<td><a href="track_proses.php?delete-id=<?php echo $row['track_id']; ?>">Delete</a></td>
	 	</tr>
	 <?php } ?>
	 </table>
	<br>
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		<?php  include "footer.php"; ?>
	
	</div>

</div>

</body>
</html>