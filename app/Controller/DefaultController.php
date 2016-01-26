<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function backoffice()
	{
		$optionManager= new \Manager\OptionsManager();
		// Recuperer les coordonnees
		//$address = $_POST['address'];
     	//$adressToDisplay=$optionManager->getAdress($address);
     
		// Recuperer l'adresse en texte

		// Les passer a la vue

		//$this->show('default/backoffice', ['currentadresse' => $adressToDisplay]);

		//$optionManager = new \Manager\OptionsManager();

		if(isset($_POST['submit_avatar_1']))
		{

			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_avatar_1']['tmp_name']);

			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_avatar_1']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_avatar_1']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_avatar_1']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeAvatar(1, $filePath);

		}
		elseif(isset($_POST['submit_avatar_2']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_avatar_2']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_avatar_2']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_avatar_2']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_avatar_2']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeAvatar(2, $filePath);
		} 
		elseif(isset($_POST['submit_avatar_3']))
		{
			// Upload du fichier (move_uploaded_file, etc.)
			$finfo = new \finfo(FILEINFO_MIME_TYPE);
			$mimeType = $finfo->file($_FILES['img_avatar_3']['tmp_name']);
			$allowed =array_search(
		        $mimeType, array('png' 	=> 'image/png',
							 	 'jpg'	=> 'image/jpeg',
								 'gif' 	=> 'image/gif'));
			$filePath = sha1_file($_FILES['img_avatar_3']['tmp_name']). '.' . $allowed;
			$destinationFilePath = 'assets/imgs/' . $filePath;
			// Récupération du Mime
			if ($allowed === false) {
		    	echo 'Le fichier n\'est pas une image';
		    	die();
		    }
			if ($_FILES['img_avatar_3']['error'] != UPLOAD_ERR_OK) {
				echo 'Erreur lors du téléchargement.';
				die();
			}
			if(move_uploaded_file($_FILES['img_avatar_3']['tmp_name'], $destinationFilePath)) {
			} else {
				echo 'Erreur lors de l\'enregistrement.';
			}

			$optionManager->changeAvatar(3, $filePath);
		}

		//rename
		if(isset($_POST['submit_name1']))
		{
			$optionManager->UpName(1, $_POST['name_area']);
		}
		if(isset($_POST['submit_name2']))
		{
			$optionManager->UpName(2, $_POST['name_area']);
		}
		if(isset($_POST['submit_name3']))
		{
			$optionManager->UpName(3, $_POST['name_area']);
		}

		//modification du text testimonial
		if(isset($_POST['submit_text1']))
		{
			$optionManager->UpdateTesti(1, $_POST['testi-area']);
		}
		if(isset($_POST['submit_text2']))
		{
			$optionManager->UpdateTesti(2, $_POST['testi-area']);
		}
		if(isset($_POST['submit_text3']))
		{
			$optionManager->UpdateTesti(3, $_POST['testi-area']);
		}

		//modification de la sectin text
		if(isset($_POST['submit_Sectiontext1']))
		{
			$optionManager->changeText(1, $_POST['sec_text']);
		}
		if(isset($_POST['submit_Sectiontext2']))
		{
			$optionManager->changeText(2, $_POST['sec_text']);
		}
		if(isset($_POST['submit_Sectiontext3']))
		{
			$optionManager->changeText(3, $_POST['sec_text']);
		}

		//testimoniaux
			//view name
		$optionNameToDisplay1 = $optionManager->getName(1);
		$optionNameToDisplay2 = $optionManager->getName(2);
		$optionNameToDisplay3 = $optionManager->getName(3);

			//view avatar
		$optionAvatarToDisplay1 = $optionManager->getAvatar(1);
		$optionAvatarToDisplay2 = $optionManager->getAvatar(2);
		$optionAvatarToDisplay3 = $optionManager->getAvatar(3);

			//view description
		$optionTestiToDisplay1 = $optionManager->GetTestimonial(1);
		$optionTestiToDisplay2 = $optionManager->GetTestimonial(2);
		$optionTestiToDisplay3 = $optionManager->GetTestimonial(3);
		
		//sextion_text
		$optionTextToDisplay1 = $optionManager->getText(1);
		$optionTextToDisplay2 = $optionManager->getText(2);
		$optionTextToDisplay3 = $optionManager->getText(3);

		$this->show('default/backoffice',[
			'names'		=> [$optionNameToDisplay1, $optionNameToDisplay2, $optionNameToDisplay3],
			'avatars'	=> [$optionAvatarToDisplay1, $optionAvatarToDisplay2, $optionAvatarToDisplay3],
			'testis'	=> [$optionTestiToDisplay1, $optionTestiToDisplay2, $optionTestiToDisplay3],
			'texts'		=> [$optionTextToDisplay1, $optionTextToDisplay2, $optionTextToDisplay3],
		]);

	}

	public function register(){
		$this->show('default/register');
	}


	public function onepage()
	{
		$optionManager = new \Manager\OptionsManager();

		//testimoniaux
			//view name
		$optionNameToDisplay1 = $optionManager->getName(1);
		$optionNameToDisplay2 = $optionManager->getName(2);
		$optionNameToDisplay3 = $optionManager->getName(3);

			//view avatar
		$optionAvatarToDisplay1 = $optionManager->getAvatar(1);
		$optionAvatarToDisplay2 = $optionManager->getAvatar(2);
		$optionAvatarToDisplay3 = $optionManager->getAvatar(3);

			//view description
		$optionTestiToDisplay1 = $optionManager->GetTestimonial(1);
		$optionTestiToDisplay2 = $optionManager->GetTestimonial(2);
		$optionTestiToDisplay3 = $optionManager->GetTestimonial(3);

		//sextion_text
		$optionTextToDisplay1 = $optionManager->getText(1);
		$optionTextToDisplay2 = $optionManager->getText(2);
		$optionTextToDisplay3 = $optionManager->getText(3);

		$this->show('default/onepage',[
			'names'		=> [$optionNameToDisplay1, $optionNameToDisplay2, $optionNameToDisplay3],
			'avatars'	=> [$optionAvatarToDisplay1, $optionAvatarToDisplay2, $optionAvatarToDisplay3],
			'testis'	=> [$optionTestiToDisplay1, $optionTestiToDisplay2, $optionTestiToDisplay3],
			'texts'		=> [$optionTextToDisplay1, $optionTextToDisplay2, $optionTextToDisplay3],
		]);

	}

	public function login()
	{
		if(isset($_POST['login-submit'])) {
			// Si on a reçu une soumission de formulaire

			if(!isset($_POST['login']) || empty($_POST['login']) || !isset($_POST['password']) || empty($_POST['password'])) {
				// S'il manque des informations

				$this->redirectToRoute('login');
			}

			$authManager = new \W\Security\AuthentificationManager();

			$userId = $authManager->isValidLoginInfo($_POST['login'], $_POST['password']);

			if($userId) {
				// Les infos sont coherentes
				$usersManager = new \Manager\UsersManager();
				$user = $usersManager->find($userId);
				
				unset($user['password']);

				// Enregistrement des infos utilisateur en session
				$authManager->logUserIn($user);

				$this->redirectToRoute('todolist_list');
			}

			$this->show('default/login', ['errorConnection' => true]);
		}
		
		$this->show('default/login');
	}

	public function logoff()
	{
		$authManager = new \W\Security\AuthentificationManager();
		$authManager->logUserOut();
		$this->redirectToRoute('login');
	}

	//Fonction du controleur pour sauvergarder l'adresse en bdd
	// Controller Function to save the address in bdd
	public function saveAdress(){
				$optionManager = new \Manager\OptionsManager();
     		 	if(isset( $_POST["button"])){
					$address = $_POST['address'];
     		 		$optionManager -> saveAdress($address);
     		 		$optionManager -> saveLatLon($lat, $lon);
     		 	}

     		 	$this->redirectToRoute('backoffice');

	}

	public function getAdress(){
		$optionManager = new \Manager\OptionsManager();
		
		$address = $_POST['address'];
     	$adressToDisplay=$optionManager->getAdress($address);
     	$this->show('default/backoffice', ['currentadresse' => $adressToDisplay]);

	
	}

	/*
	* TESTIMONIAL
	*/
	//name
	public function UpdateName()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionUpNameToDisplay1 = $optionManager->UpName(1, $newName);
		$optionUpNameToDisplay2 = $optionManager->UpName(2, $newName);
		$optionUpNameToDisplay3 = $optionManager->UpName(3, $newName);
		$this->show('default/backoffice',['text'=>[$optionUpNameToDisplay1, $optionUpNameToDisplay2, $optionUpNameToDisplay3]]);
	}

	//avatar
	public function ChangeAva()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionChangeAvaToDisplay = $optionManager->changeAvatar($avatarNb, $newUrl);
		$this->show('default/backoffice',['backoffice'=>$optionChangeAvaToDisplay]);
	}

	public function SubAva()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionToDisplay = $optionManager->submitAvatar();
		$this->show('default/backoffice',['Submit'=>$optionToDisplay]);
	}

	//function description
	public function Uptesti()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionUpTestiToDisplay1 = $optionManager->UpdateTesti(1, $newText);
		$optionUpTestiToDisplay2= $optionManager->UpdateTesti(2, $newText);
		$optionUpTestiToDisplay3 = $optionManager->UpdateTesti(3, $newText);
		$this->show('default/backoffice',['Testi'=>[$optionUpTestiToDisplay1, $optionUpTestiToDisplay2, $optionUpTestiToDisplay3]]);
	}


	/*
	* SECTION_TEXT
	*/

	public function changeText()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionUpTextToDisplay1 = $optionManager->changeText(1, $newSecText);
		$optionUpTextToDisplay2= $optionManager->changeText(2, $newSecText);
		$optionUpTextToDisplay3 = $optionManager->changeText(3, $newSecText);
		$this->show('default/backoffice',['text'=>[$optionUpTextToDisplay1, $optionUpTextToDisplay2, $optionUpTextToDisplay3]]);
	}

	/*
	* CONTACT_FORM
	*/
	public function contact()
	{


		// $errName, $errEmail, $errMessage, $errHuman, $name, $email, $message, $human
		$_POST['name'];
		$_POST['email'];
		print_r($_POST);
		// Si j'ai recu une soumission du formulaire mail
		// Si j'ai tous les champs
			// Si erreur dans

		$optionManager = new \Manager\OptionsManager();

		if (isset($_POST["submit"])) 
		{
	  		$name = $_POST['name'];
	  		$email = $_POST['email'];
	  		$message = $_POST['message'];
	 		$human = intval($_POST['human']);
	 		/*$from = 'Demo Contact Form'; 
	 		$to = 'example@domain.com'; 
	 		$subject = 'Message from Contact Demo ';*/
	 		
	 		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
	 
	 		// Check if name has been entered
	 		if (!isset($_POST['name'])) {
	 			$errName = 'Please enter your name';
	 		}
	 		
	 		// Check if email has been entered and is valid
	 		if (!isset($_POST['email']) || !filter_var(isset($_POST['email']), FILTER_VALIDATE_EMAIL)) {
	 			$errEmail = 'Please enter a valid email address';
	 		}
	 		
	 		//Check if message has been entered
	 		if (!isset($_POST['message'])) {
	 			$errMessage = 'Please enter your message';
	 		}
	 		//Check if simple anti-bot test is correct
	 		if ($human !== 5) {
	 			$errHuman = 'Your anti-spam is incorrect';
	 		}
	 
		 // If there are no errors, send the email
			if (!$errName && !$errEmail && !$errMessage && !$errHuman)
			{
			 	if (mail ($to, $subject, $body, $from))
			 	{
			 		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
			 	}
			 	else
			 	{
			 		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
			 	}
			}
	 	$this->redirectToRoute('onepage');
	 	}
	}
}