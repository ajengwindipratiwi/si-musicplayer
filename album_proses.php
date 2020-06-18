<?php 
include "app/Controller.php";
include "app/Album.php";

$alb = new App\Album();

if ($_POST['btnsimpan']) {
	$alb->input();
	header("location:album_tampil.php");
}

if ($_POST['btnedit']) {
	$alb->update();
	header("location:album_tampil.php");
}

if ($_GET('delete-id')) {
	$alb->delete($_GET['delete-id']);
	header("location:album_tampil.php");
}

 ?>