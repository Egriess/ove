<?php $this->layout('layout', ['title' => 'Gestion et édition']) ?>

<?php $this->start('main_content') ?>
	
	<div id="backheader">
		<a href="#titlepopup" class="hinge">Editer le titre du site</a>
					<!-- POP UP edit -->
					<div id="titlepopup" class="white-popup mfp-with-anim mfp-hide">
						You may put any HTML here. This is dummy copy. 
						It is not meant to be read. It has been placed here solely to demonstrate 
						the look and feel of finished, typeset text. Only for show. He who searches 
						for meaning here will be sorely disappointed.
					</div>

		<a href="#titlecolorpopup" class="hinge">Choisir la couleur du menu</a>
					<!-- POP UP edit -->
					<div id="titlecolorpopup" class="white-popup mfp-with-anim mfp-hide">
						<span> Choisir la couleur du menu</span>
						<input type="color" value="#fad345" name="textcolor">
					</div>
	</div>

	<div id="gallery">
		<div class="container">

		</div>
	</div>

	<div id="testimoniaux">
		<div class="container">
			
		</div>
	</div>
<?php $this->stop('main_content') ?>