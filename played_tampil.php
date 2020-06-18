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
		<h3>"DAFTAR PUTAR"</h3>
			</font>
		</font>
		</center>
		
	<br>
	<a href="played_input.php">Tambah Daftar Putar</a>
	<br><br>
	<?php 

	include "app/Played.php";

	$ply = new App\Played();
	$rows = $ply->tampil();

	 ?>

	 <table>
	 	<tr>
	 		<th>ID ARTIS</th>
	 		<th>ID ALBUM</th>
	 		<th>ID TRACK</th>
	 		<th>PLAYED</th>
	 	</tr>
	 	<?php foreach ($rows as $row ) { ?>
	 	<tr>
	 		<td><?php echo $row['artist_id']; ?></td>
	 		<td><?php echo $row['album_id']; ?></td>
	 		<td><?php echo $row['track_id']; ?></td>
	 		<td><?php echo $row['played']; ?></td>
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