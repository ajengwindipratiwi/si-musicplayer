<?php 

namespace App;

include "app/Controller.php";

class Played extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function input() {
		
		$idart = $_POST['artist_id'];
		$idalb = $_POST['album_id'];
		$idtrk = $_POST['track_id'];
		$ply = $_POST['played'];

		$sql = "INSERT INTO played (artist_id , album_id , track_id , played) VALUES ( :artist_id , :album_id , :track_id , :played)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":artist_id", $idart);
		$stmt->bindParam(":album_id", $idalb);
		$stmt->bindParam(":track_id", $idtrk);
		$stmt->bindParam(":played", $ply);

		$stmt->execute();

		return false;

	}

	public function tampil()
	{
		$sql = "SELECT * FROM played";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;

	}

}

 ?>