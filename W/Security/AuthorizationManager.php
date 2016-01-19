<?php

namespace W\Security;

use \W\Session\SessionManager;
use \W\Security\AuthentificationManager;

/**
 * Gère l'accès aux pages en fonction des droits utilisateurs
 */
class AuthorizationManager
{

	/**
	 * Vérifie les droits d'accès de l'utilisateur en fonction de son rôle
	 * @param  string  $role Le rôle pour lequel on souhaite vérifier les droits d'accès
	 * @return boolean       True si droit d'accès, false sinon
	 */
	public function isGranted($role)
	{
		$app = getApp();
		$roleProperty = $app->getConfig('security_role_property');

		//récupère les données en session sur l'utilisateur
		$authentificationManager = new AuthentificationManager();
		$loggedUser = $authentificationManager->getLoggedUser();

		//si utilisateur non connecté
		if (!$loggedUser){
			//redirige vers le login
			$this->redirectToLogin();
		}

		if (!empty($loggedUser[$roleProperty]) && $loggedUser[$roleProperty] === $role){
			return true;
		}

		return false;
	}

	/**
	 * Redirige vers la page de connexion
	 */
	public function redirectToLogin()
	{
		$app = getApp();

		$controller = new \W\Controller\Controller();
		$controller->redirectToRoute($app->getConfig('security_login_route_name'));
	}

}