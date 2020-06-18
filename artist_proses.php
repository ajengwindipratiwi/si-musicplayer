<?php 

include "app/Artist.php";

$art = new App\Artist();

if ($_POST['btnsimpan']) {
	$art->input();
	header("location:artist_tampil.php");
}

if ($_POST['btnedit']) {
	$art->update();
	header("location:artist_tampil.php");
}

if ($_GET('delete-id')) {
	$art->delete($_GET['delete-id']);
	header("location:artist_tampil.php");
}

 ?>