<?php 
namespace Manager;

class OptionsManager extends \W\Manager\Manager 
{
	//Récupère la valeur associés à un component éditable.
	public function GetOptionValue($postId)
	{
		//...
	}


	/*
	*function Header
	*/
		function updateTitle($title){
		$sql = "UPDATE options SET option_value = :option_value  WHERE option_name = 'header_title'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':option_value', $title);
		$stmt->execute();
	}

		function getTitle(){

		$sql="SELECT option_value FROM options WHERE option_name = 'header_title'";
		$stmt = $this->dbh-> query($sql);
		$row = $stmt->fetch(\PDO::FETCH_ASSOC);
		return $row['option_value'];

	}

	function updateColor($color){
		$sql = "UPDATE options SET option_value = :option_value  WHERE option_name = 'color_title'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':option_value', $color);
		$stmt->execute();
	/*
	* END function Header
	*/
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


	/*
	=====function Testimonial=====
	*/
	public function GetTestimonial($testiNb)
	{
		$sql="SELECT option_value FROM options WHERE option_name='testimonial_".$testiNb."'";
		$stmt= $this->dbh->query($sql);
		$row = $stmt->fetch(\PDO::FETCH_ASSOC);
		return $row['option_value'];
	}

	public function UpdateTesti($testiNb, $newText)
	{
		$sql="UPDATE options SET option_value ='$newText' WHERE option_name = 'testimonial_".$testiNb."'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':newText', $newText, \PDO::PARAM_INT);
		$stmt->execute();
	}
	//function change_slider img

	public function getImgSlider($sliderNb)
	{
		$sql="SELECT option_value FROM options WHERE option_name = 'slider_".$sliderNb."'";
		$stmt = $this->dbh->query($sql);
		$row = $stmt->fetch(\PDO::FETCH_ASSOC);
		return $row['option_value'];
	}

	public function changeImgSlider($sliderNb, $newUrl)
	{
		$sql ="UPDATE options SET option_value ='$newUrl' WHERE option_name = 'slider_".$sliderNb."'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':newUrl', $newUrl, \PDO::PARAM_INT);
		$stmt->execute();
	}
	//function change_avatar

	public function getAvatar($avatarNb)
	{
		$sql="SELECT option_value FROM options WHERE option_name = 'avatar_".$avatarNb."'";
		$stmt = $this->dbh->query($sql);
		$row = $stmt->fetch(\PDO::FETCH_ASSOC);
		return $row['option_value'];
	}

	public function changeAvatar($avatarNb, $newUrl)
	{
		$sql ="UPDATE options SET option_value ='$newUrl' WHERE option_name = 'avatar_".$avatarNb."'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':newUrl', $newUrl, \PDO::PARAM_INT);
		$stmt->execute();
	}

	//function rename
	public function getName($nameNb)
	{
		$sql="SELECT option_value FROM options WHERE option_name='name_".$nameNb."'";
		$stmt= $this->dbh->query($sql);
		$row = $stmt->fetch(\PDO::FETCH_ASSOC);
		return $row['option_value'];
	}

	public function UpName($nameNb, $newName)
	{
		$sql="UPDATE options SET option_value ='$newName' WHERE option_name = 'name_".$nameNb."'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':newName', $newName, \PDO::PARAM_INT);
		$stmt->execute();
	}

	/*
	=====Function Text=====
	*/

	public function getText($textNb)
	{
		$sql="SELECT option_value FROM options WHERE option_name = 'text_".$textNb."'";
		$stmt = $this->dbh->query($sql);
		$row = $stmt->fetch(\PDO::FETCH_ASSOC);
		return $row['option_value'];
	}

	public function changeText($textNb, $newSecText)
	{
		$sql ="UPDATE options SET option_value ='$newSecText' WHERE option_name = 'text_".$textNb."'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':newSecText', $newSecText, \PDO::PARAM_INT);
		$stmt->execute();
	}

	public function insertMail($email_contact, $password_mail)
	{	
		$email_contact		= $_POST["email_contact"];
		$password_mail		= $_POST["password_mail"];

		$sql = "INSERT INTO `ove`.`options` (\n"
	    . "	`id`, `option_name`, `option_value`, \n"
	    . "	`user_option_id`\n"
	    . ") \n"
	    . "VALUES \n"
	    . "	(NULL, 'adresse_mail', '".$email_contact."', '1'), \n"
	    . "	(NULL, 'pw_mail', '".$password_mail."', '1')";
	    $this->dbh->exec($sql);
	}
	// inserer les datas lorem ipsum de base à la création d'un user 
	
	public function insertInit($userID, $name, $value)
	{

		$sql = "INSERT INTO options (option_name, option_value) VALUES (:name, :value, :user_option_id)" ;
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':value', $value);
		$stmt->bindParam(':user_option_id', $userID);
		
		
		$stmt->execute();
	}

}

