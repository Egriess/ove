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
		$optionManager = new \Manager\OptionsManager();

		if(isset($_POST['submit_avatar_1'])) {

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

		}elseif(isset($_POST['submit_avatar_2'])) {
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
		} elseif(isset($_POST['submit_avatar_3'])) {
			// Upload du fichier (move_uploaded_file, etc.)
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

		if(isset($_POST['submit_text1'])){
			$optionManager->UpdateTesti(1, $_POST['testi-area']);
		}
		if(isset($_POST['submit_text2'])){
			$optionManager->UpdateTesti(2, $_POST['testi-area']);
		}
		if(isset($_POST['submit_text3'])){
			$optionManager->UpdateTesti(3, $_POST['testi-area']);
		}
		
		$optionAvatarToDisplay1 = $optionManager->getAvatar(1);
		$optionAvatarToDisplay2 = $optionManager->getAvatar(2);
		$optionAvatarToDisplay3 = $optionManager->getAvatar(3);

		$optionTestiToDisplay1 = $optionManager->GetTestimonial(1);
		$optionTestiToDisplay2 = $optionManager->GetTestimonial(2);
		$optionTestiToDisplay3 = $optionManager->GetTestimonial(3);

		$this->show('default/backoffice',[
			'avatars'=> [$optionAvatarToDisplay1, $optionAvatarToDisplay2, $optionAvatarToDisplay3],
			'testis'=> [$optionTestiToDisplay1, $optionTestiToDisplay2, $optionTestiToDisplay3],
		]);
	}

	public function register(){
		$this->show('default/register');
	}

	public function onepage()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionAvatarToDisplay1 = $optionManager->getAvatar(1);
		$optionAvatarToDisplay2 = $optionManager->getAvatar(2);
		$optionAvatarToDisplay3 = $optionManager->getAvatar(3);

		$optionTestiToDisplay1 = $optionManager->GetTestimonial(1);
		$optionTestiToDisplay2 = $optionManager->GetTestimonial(2);
		$optionTestiToDisplay3 = $optionManager->GetTestimonial(3);

		$this->show('default/onepage',[
			'avatars'=> [$optionAvatarToDisplay1, $optionAvatarToDisplay2, $optionAvatarToDisplay3],
			'testis'=> [$optionTestiToDisplay1, $optionTestiToDisplay2, $optionTestiToDisplay3],
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

	/*
	* TESTIMONIAL
	*/
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

	public function GetTesti()
	{
		/*
		$optionManager = new \Manager\OptionsManager();
		$optionTestiToDisplay1 = $optionManager->GetTestimonial(1);
		$optionTestiToDisplay2 = $optionManager->GetTestimonial(2);
		$optionTestiToDisplay3 = $optionManager->GetTestimonial(3);
		$this->show('default/backoffice',['testis'=>[$optionTestiToDisplay1, $optionTestiToDisplay2, $optionTestiToDisplay3]]);
		*/
	}

	public function Uptesti()
	{
		$optionManager = new \Manager\OptionsManager();
		$optionUpTestiToDisplay1 = $optionManager->UpdateTesti(1, $newText);
		$optionUpTestiToDisplay2= $optionManager->UpdateTesti(2, $newText);
		$optionUpTestiToDisplay3 = $optionManager->UpdateTesti(3, $newText);
		$this->show('default/backoffice',['textTesti'=>[$optionUpTestiToDisplay1, $optionUpTestiToDisplay2, $optionUpTestiToDisplay3]]);
	}

}