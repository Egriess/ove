<?php $this->layout('layout', ['title' => 'Connexion!']) ?>

<?php $this->start('main_content') ?>
	
	<section id="texthome">
	<h2>Bienvenue sur Onepage Visual Editor</h2>
	<p class="describ"> Onepage Visual Editor vous permet de creer votre page perso
	 en un rien de temps et ce sans aucunes connaissances en développement web</p>
	 <h3> INSCRIVEZ VOUS </h3>
	
	
	<div id="regandlog">
		<h3><a href="<?= $this->url('login') ?>">Déja inscrit? Cliquez ici.</a></h3>
		<form id="reg" action="<?= $this->url('user_create') ?>" method="POST" accept-charset="utf-8">
			<input type="text" name="page_name" placeholder="Nom de votre page">
			<input type="text" name="mail" value="" placeholder="Votre adresse email">
			<input type="password" name="passwrd" value="" placeholder="Votre Mot de Passe">
			<input type="password" name="confirmpass" value="" placeholder="Confirmez votre mot de passe">
			<input type="submit" name="sendreg" value="S'INSCRIRE">
		</form>

	</div>
	</section>
	<footer id="homefooter">
		<p>Copyright &copy; 2016, Onepage Visual Editor</p>
	</footer>
<?php $this->stop('main_content') ?>
