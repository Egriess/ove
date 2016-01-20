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
			<a href="#testimonialpopup" class="hinge">Editer le testimonial</a>
			<div id="testimonialpopup" class="white-popup mfp-with-anim mfp-hide">

				<form enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $avatars[0] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input type="file" name="img_avatar_1" value="Modifier">
					<input type="submit" name="submit_avatar_1" value="Envoyer">	
				</form>

				<form enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $avatars[1] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input type="file" name="img_avatar_2" value="Modifier">
					<input type="submit" name="submit_avatar_2" value="Envoyer">	
				</form>

				<form enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $avatars[2] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input type="file" name="img_avatar_3" value="Modifier">
					<input type="submit" name="submit_avatar_3" value="Envoyer">	
				</form>



				<form action="#" method="POST" accept-charset="utf-8">
					<textarea name="testi-area" placeholder=""><?= $testis[0] ?></textarea>
					<input type="submit" name="submit_text1" value="submit">
				</form>

				<form action="#" method="POST" accept-charset="utf-8">
					<textarea name="testi-area" placeholder=""><?= $testis[1] ?></textarea>
					<input type="submit" name="submit_text2" value="submit">
				</form>

				<form action="#" method="POST" accept-charset="utf-8">
					<textarea name="testi-area" placeholder=""><?= $testis[2] ?></textarea>
					<input type="submit" name="submit_text3" value="submit">
				</form> 
			
		</div>
	</div>
	
<?php $this->stop('main_content') ?>