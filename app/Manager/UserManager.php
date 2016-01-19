<?php 
namespace Manager;

class UserManager extends \W\Manager\UserManager 
{
	//Récupère le mail d'un utilisateur en base de donnée.
	public function GetUserMail()
	{
		//...
	}

	public function getUserByUsernameOrEmail($usernameOrEmail);
}