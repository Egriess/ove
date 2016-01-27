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
		

		if(isset($_POST['page_name']) && isset($_POST['passwrd']) && isset($_POST['mail']) &&
			!empty($_POST['page_name']) && !empty($_POST['passwrd']) && !empty($_POST['mail'])) 
		{
	
			// Si on a toutes les infos
			
			$usersManager = new \Manager\UsersManager();
			$usersManager->insert([
					'page_name' => $_POST['page_name'],
					'passwrd' 	=> password_hash($_POST['passwrd'], PASSWORD_DEFAULT),
					'mail' 		=> $_POST['mail']
				]);

			$usersManager->insertInit([
					'page_name' => $_POST['page_name'],
					'passwrd' 	=> password_hash($_POST['passwrd'], PASSWORD_DEFAULT),
					'mail' 		=> $_POST['mail']
				]);
		}

		$this->redirectToRoute('backoffice');
	}
}