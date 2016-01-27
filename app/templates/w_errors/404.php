<?php $this->layout('layout', ['title' => 'La page demandé n\'existe pas !']) ?>

<?php $this->start('main_content'); ?>
<h1>La page demandé n\'existe pas !</h1>
<a href="<?= $this->url('home') ?>">Retour sur la page d'accueil</a>
<?php $this->stop('main_content'); ?>
