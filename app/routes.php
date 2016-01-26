<?php

	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'home'], 		// Page home et register
		['POST','/user/create',	'Users#create',	'user_create'], // création d'un user
		['GET|POST','/login','Default#login','login'],	// Page de connexion
		['GET',	'/logoff','Default#logoff','logoff'],   // Page de déco 
		['GET|POST', '/backoffice', 'Default#backoffice', 'backoffice'], // Page de gestion et édition
		['GET', '/page', 'Default#onepage', 'onepage'],
		['GET', '/[a:username]', 'Default#getDynpage', 'page'],
		['GET', '/404', 'w_errors#404', '404'], 		// gestion de la page d'erreur

		['POST', '/saveAdress', 'Default#saveAdress', 'saveAdress' ],
		['GET', '/getAdress', 'Default#getAdress', 'getAdress' ],
		['POST', '/updateTitle', 'Default#updateTitle', 'updateTitle'], // 
		['GET', '/getTitle', 'Default#getTitle', 'getTitle'],
	);

	