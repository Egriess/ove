<?php

namespace Controller;

use \W\Controller\Controller;

class UsersController extends Controller
{
	/**
	 * Création d'un utilisateur
	 */
	public function create()
	{
		function securise($string)
		{
		
		if(ctype_digit($string))
		{
			$string = intval($string);
		}
		
		else
		{
			$string = mysql_real_escape_string($string);
			$string = addcslashes($string, '%_');
			$string = htmlspecialchars($string); 
		}
		
		return $string;
		}

		if(isset($_POST['page_name']) && isset($_POST['passwrd']) && isset($_POST['mail']) &&
			!empty($_POST['page_name']) && !empty($_POST['passwrd']) && !empty($_POST['mail'])) 
		{
	
			// Si on a toutes les infos
			$pagename 	= securise($_POST['page_name']);
			$passwrd 	= securise($_POST['passwrd']);
			$mail 		= securise($_POST['mail']);

			$usersManager = new \Manager\UsersManager();
			$usersManager->insert([
					'page_name' => $pagename,
					'passwrd' 	=> password_hash($passwrd, PASSWORD_DEFAULT),
					'mail' 		=> $mail
				]);

			$userSession = new \W\Security\AuthentificationManager();
			$userSession->logUserIn($user);

				$usersManager 	= new \Manager\UsersManager();
				$user 			= $usersManager->find($userId);
				unset($user['password']);
				// on instancie les datas de base en DB 
				$userID 	= $user['id'];
				$name 		= 'avatar_1';
				$value 		= 'gergregegregergegregregregrege';
				$initdata 	= new \Manager\OptionsManager();
				$initdata	->insertInit($userID, $name, $value);
			

		}

		$this->redirectToRoute('backoffice');
	}

	
}