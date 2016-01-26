<?php 
namespace Manager;

class OptionsManager extends \W\Manager\Manager 
{
	//Récupère la valeur associés à un component éditable.
	public function GetOptionValue($postId)
	{
		//...
	}

	public function ContactForm()
	{

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

	/*
	=====Contact Form=====
	*/
	public function insertMail($email_contact, $password_mail)
	{
		$sql= "INSERT INTO options (adresse_mail, pw_mail) VALUES (:ad_mail, pass_mail)";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':ad_mail', $email_contact);
		$stmt->bindParam(':pass_mail', $password_mail);
		$stmt->execute();
		/*$sql="(UPDATE options SET option_value = :ad_mail  WHERE option_name = 'adresse_mail') UNION (UPDATE options SET option_value = :pass_mail  WHERE option_name = 'pw_mail')";
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindParam(':ad_mail', $email_contact);
		$stmt->bindParam(':pass_mail', $password_mail);
		$stmt->execute();*/
	}

	public function viewMail()
	{
		$sql="SELECT option_value FROM option WHERE option_name = 'adresse_mail' ";
		$stmt = $this->dbh->query($sql);
		$showMail = $stmt->fetch(\PDO::FETCH_ASSOC);
		return $showMail['option_value'];
	}
	
}