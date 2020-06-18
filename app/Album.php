<?php 

namespace App;

require_once "app/Controller.php";

class Album extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function input() {
		
		$idart = $_POST['artist_id'];
		$id = $_POST["album_id"];
		$nama = $_POST['album_name'];

		$sql = "INSERT INTO album (artist_id , album_id , album_name) VALUES ( :artist_id , :album_id,  :album_name)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $idart);
		$stmt->bindParam(":album_id", $id);
		$stmt->bindParam(":album_name", $nama);

		$stmt->execute();

		return false;

	}

	public function tampil()
	{
		$sql = "SELECT * FROM album";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;

	}

	public function edit($id)
	{
		$sql = "SELECT * FROM album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id",$id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$idart = $_POST['artist_id'];
		$id = $_POST['album_id'];
		$nama = $_POST['album_name'];

		$sql = "UPDATE album SET artist_id=:artist_id , album_id=:album_id , album_name=:album_name WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id" , $idart);
		$stmt->bindParam(":album_id" , $id);
		$stmt->bindParam(":artist_name" , $nama);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id" , $id);
		$stmt->execute();

		return false;
	}

}

 ?>