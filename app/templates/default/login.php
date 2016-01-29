<?php $this->layout('layout', ['title' => 'Login page']) ?>
<?php $this->start('main_content') ?>
<style>
body{
background: #00d2ff; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #00d2ff , #3a7bd5); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #00d2ff , #3a7bd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
</style>
<?php if(isset($errorConnection)) : ?>
<div class="alert alert-danger">
	Login ou mot de passe incorrect
</div>
<?php endif ?>
<div id="loginform"class="container">
	<form class="form-signin" method="POST">
		<h2>Connectez vous</h2>
		<input type="text" name="login" id="login-input" class="form-control" placeholder="Adresse mail" required >
		<input type="password" name="password" id="password-input" class="form-control" placeholder="Password" required>
		<button class="btn btn-lg btn-primary btn-block expand-right" name="login-submit" type="submit">Connexion</button>
	</form>
</div>	
<?php $this->stop('main_content') ?>
