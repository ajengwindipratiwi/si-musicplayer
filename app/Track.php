<?php 

namespace App;

include "app/Controller.php";

class Track extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function input() {
		
		$id = $_POST['track_id'];
		$nama = $_POST['track_name'];
		$idart = $_POST['artist_id'];
		$idalb = $_POST['album_id'];
		$time = $_POST['time'];


		$sql = "INSERT INTO track (track_id , track_name , artist_id, album_id , time VALUES ( :track_id , :track_name ,:artist_id, :album_id, :time)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_id", $id);
		$stmt->bindParam(":track_name", $nama);
		$stmt->bindParam(":artist_id", $idart);
		$stmt->bindParam(":album_id", $idalb);
		$stmt->bindParam(":time", $time);

		$stmt->execute();

		return false;

	}

	public function tampil()
	{
		$sql = "SELECT * FROM track";
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
		$sql = "SELECT * FROM track WHERE track_id=:track_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_id",$id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$id = $_POST['track_id'];
		$nama = $_POST['track_name'];
		$idart = $_POST['artist_id'];
		$idalb = $_POST['album_id'];
		$time = $_POST['time'];

		$sql = "UPDATE track SET track_id=:track_id , track_name=:track_name , artist_id=:artist_id , album_id=:album_id, time=:time WHERE track_id=:track_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_name" , $nama);
		$stmt->bindParam(":track_id" , $id);
		$stmt->bindParam(":artist_id" , $idart);
		$stmt->bindParam(":album_id" , $idalb);
		$stmt->bindParam(":time" , $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM artist WHERE track_id=:trackid";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":track_id" , $id);
		$stmt->execute();

		return false;
	}

}

 ?>