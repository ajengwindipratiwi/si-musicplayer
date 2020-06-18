<?php 

include "app/Played.php";

$ply = new App\Played();

if ($_POST['btnsimpan']) {
	$ply->input();
	header("location:played_tampil.php");
}

 ?>