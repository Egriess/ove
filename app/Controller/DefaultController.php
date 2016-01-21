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
		$address = $_POST['address'];
     	$adressToDisplay=$optionManager->getAdress($address);
     
		// Recuperer l'adresse en texte

		// Les passer a la vue

		$this->show('default/backoffice', ['currentadresse' => $adressToDisplay]);
	}

	public function register(){
		$this->show('default/register');
	}

	public function onepage(){
		$optionManager= new \Manager\OptionsManager();
		// Recuperer les coordonnees
		//$address = $_POST['address'];
     	//$adressToDisplay=$optionManager->getAdress($address);
     
		// Recuperer l'adresse en texte + coords

		// Les passer a la vue

		$this->show('default/onepage', ['currentadresse' => $adressToDisplay]);
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

}