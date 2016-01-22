<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET|POST','/login','Default#login','login'],	// Page de connexion
		['GET|POST','/register','Default#register','register'],	// Page d inscription
		['GET',	'/logoff','Default#logoff','logoff'],   // Page de déco 
		['GET|POST', '/backoffice', 'Default#backoffice', 'backoffice'], // Page de gestion et édition
		['GET', '/page', 'Default#onepage', 'onepage'],

		['POST', '/saveAdress', 'Default#saveAdress', 'saveAdress' ],
		['GET', '/getAdress', 'Default#getAdress', 'getAdress' ],
		['POST', '/updateTitle', 'Default#updateTitle', 'updateTitle'], // 
		['GET', '/getTitle', 'Default#getTitle', 'getTitle'],
	);