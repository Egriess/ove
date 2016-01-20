<?php 
namespace Manager;

class OptionsManager extends \W\Manager\Manager 
{
	//Récupère la valeur associés à un component éditable.
	public function GetOptionValue($postId)
	{
		//...
	}

	function saveAdress(){

		$sql = 'UPDATE options SET option_value  WHERE option_name = "adresse"';
		$stmt = $this->$dbh->prepare($sql);
		$stmt->execute();
	}


}