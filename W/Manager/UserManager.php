<?php

namespace W\Manager;

/**
 * Classe requise par l'AuthentificationManager, éventuellement à extender par la UserManager de l'appli
 */
class UserManager extends Manager
{

	/**
	 * Récupère un utilisateur en fonction de son email ou de son pseudo
	 * @param string $usernameOrEmail Le pseudo ou l'email d'un utilisateur
	 * @return mixed L'utilisateur, ou false si non trouvé
	 */
	public function getUserByUsernameOrEmail($usernameOrEmail)
	{

		$app = getApp();

		$sql = "SELECT * FROM " . $app->getConfig('security_user_table') . 
				" WHERE " . $app->getConfig('security_username_property') . " = :username OR " . 
				$app->getConfig('security_email_property') . " = :email LIMIT 1";
		$dbh = ConnectionManager::getDbh();
		$sth = $dbh->prepare($sql);
		$sth->bindValue(":username", $usernameOrEmail);
		$sth->bindValue(":email", $usernameOrEmail);
		if ($sth->execute()){
			$foundUser = $sth->fetch();
			if ($foundUser){
				return $foundUser;
			}
		}

		return false;
	}

	/**
	* Teste si un email est présent en base de données
	* @param string $email L'email à tester
	* @return boolean true si présent en base de données, false sinon
	*/
	public function emailExists($email)
	{

	   $app = getApp();

	   $sql = "SELECT ".$app->getConfig('security_email_property')." FROM " . $app->getConfig('security_user_table') .
	           " WHERE " . $app->getConfig('security_email_property') . " = :email LIMIT 1";
	   $dbh = ConnectionManager::getDbh();
	   $sth = $dbh->prepare($sql);
	   $sth->bindValue(":email", $email);
	   if ($sth->execute()){
	       $foundUser = $sth->fetch();
	       if ($foundUser){
	           return true;
	       }
	   }

	   return false;
	}

	/**
	 * Teste si un pseudo est présent en base de données
	 * @param string $username Le pseudo à tester
	 * @return boolean true si présent en base de données, false sinon
	 */
	public function usernameExists($username)
	{

	    $app = getApp();

	    $sql = "SELECT ".$app->getConfig('security_username_property')." FROM " . $app->getConfig('security_user_table') .
	            " WHERE " . $app->getConfig('security_username_property') . " = :username LIMIT 1";
	    $dbh = ConnectionManager::getDbh();
	    $sth = $dbh->prepare($sql);
	    $sth->bindValue(":username", $username);
	    if ($sth->execute()){
	        $foundUser = $sth->fetch();
	        if ($foundUser){
	            return true;
	        }
	    }

	    return false;
	}

}