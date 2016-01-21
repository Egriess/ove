<?php 
namespace Manager;

class OptionsManager extends \W\Manager\Manager 
{
	//Récupère la valeur associés à un component éditable.
	public function GetOptionValue($postId)
	{
		//...
	}

	function saveAdress($address){

		$sql = "UPDATE options SET option_value = :option_value  WHERE option_name = 'adresse'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':option_value', $address);
		$stmt->execute();
	}

	function getAdress($address){

		$sql="SELECT option_value from options where option_name = 'adresse'";
		$stmt = $this->dbh-> query($sql);
		$adresse = $stmt->fetch(\PDO::FETCH_ASSOC);
		return $adresse['option_value'];

	}

	function saveLatLon($lat, $lon){
		$sql = "(UPDATE options SET option_value = :option_value  WHERE option_name = 'latitude') UNION (UPDATE options SET option_value = :option_value  WHERE option_name = 'longitude')";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':option_value', $lat);
		$stmt->bindParam(':option_value', $lon);
		$stmt->execute();
	}
}