<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/animate.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/effeckt.css') ?>">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/modals.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css.map') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery-2.2.0.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js"></script>
	
	<script type="text/javascript" src="<?= $this->assetUrl('js/buttons.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/core.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/header.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.magnific-popup.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/modal.js') ?>"></script>

	<script type="text/javascript" src="<?= $this->assetUrl('js/gallery.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/maps.js') ?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfOcKIL3WNVtPGJYuHeNsvYEYBOHW65U4&callback=initMap" async defer></script>
	
</head>
<body>
	
		<header>
		
			<nav class="navbar navbar-fixed-top">
				<h1>hello world</h1>
				<!-- POP UP edit end -->
				<ul class="nav nav-pills">
				  <li role="presentation"><a href="/login">Loginpage</a></li>
				  <li role="presentation"><a href="/backoffice">Backoffice</a></li>
				  <li role="presentation"><a href="/register">Register</a></li>
				  <li role="presentation"><a href="/page">Page coté client</a></li>
				  <li role="presentation"><a href="#">Menu5</a></li>
				  <li role="presentation"><a href="#">Menu6</a></li>  
				</ul>
			</nav>
		
	</header>

		<section>
			<?= $this->section('main_content') ?>
		
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>