<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/animate.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/effeckt.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/modals.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css.map') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/testimonial.css') ?>">

	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery-2.2.0.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.flip.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery-ui.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/testimonial.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/buttons.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/core.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/header.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.magnific-popup.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/modal.js') ?>"></script>
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
</body>
</html>