<?php 

include "app/Track.php";

$trk = new App\Track();

if ($_POST['btnsimpan']) {
	$trk->input();
	header("location:track_tampil.php");
}

if ($_POST['btnedit']) {
	$trk->update();
	header("location:track_tampil.php");
}

if ($_GET('delete-id')) {
	$trk->delete($_GET['delete-id']);
	header("location:track_tampil.php");
}

 ?>