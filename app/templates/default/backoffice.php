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

				<form class="selectAvatar" enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $avatars[0] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input id="uploadBtn" type="file" name="img_avatar_1" class="upload"/>
					</div>
					<input type="submit" name="submit_avatar_1" value="Envoyer">	
				</form>

				<form class="selectAvatar" enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $avatars[1] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input id="uploadBtn" type="file" name="img_avatar_2" class="upload"/>
					</div>
					<input type="submit" name="submit_avatar_2" value="Envoyer">	
				</form>

				<form class="selectAvatar" enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $avatars[2] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input id="uploadBtn" type="file" name="img_avatar_3" value="Modifier" class="upload"/>
					</div>
					<input type="submit" name="submit_avatar_3" value="Envoyer">	
				</form>



				<form class="testitext" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 170 caractères</span>
					<textarea name="testi-area" placeholder="" maxlength="170"><?= $testis[0] ?></textarea>
					<input type="submit" name="submit_text1" value="Envoyer">
				</form>

				<form class="testitext" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 170 caractères</span>
					<textarea name="testi-area" placeholder="" maxlength="170"><?= $testis[1] ?></textarea>
					<input type="submit" name="submit_text2" value="Envoyer">
				</form>

				<form class="testitext" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 170 caractères</span>
					<textarea name="testi-area" placeholder="" maxlength="170"><?= $testis[2] ?></textarea>
					<input type="submit" name="submit_text3" value="Envoyer">
				</form> 
			
		</div>
	</div>

	<div id="testimoniaux">
		<div class="container">
			<!-- Testimonial 1-->
			<div class="testimonial">
				<div class="testiFlip">
					<img class="avat" alt="Avatar" src="assets/imgs/<?= $avatars[0] ?>">
					<p>John Doe</p>
				</div>

				<div class="sponsorData">
					<div class="sponsorDescription">
						<p><?= $testis[0] ?></p>
					</div>
				</div>
			</div>

			<!-- Testimonial 2-->
			<div title="Click to flip" class="testimonial">
				<div id="back50" class="testiFlip">
					<img class="avat" alt="Avatar" src="assets/imgs/<?= $avatars[1] ?>">
					<p>John Doe 2</p>
				</div>

				<div class="sponsorData">
					<div class="sponsorDescription">
						<p><?= $testis[1] ?></p>
						
					</div>
				</div>
			</div>

			<!-- Testimonial 3-->
			<div title="Click to flip" class="testimonial">
				<div id="back100" class="testiFlip">
					<img class="avat" alt="Avatar" src="assets/imgs/<?= $avatars[2]?>">
					<p>John Doe 3</p>
				</div>

				<div class="sponsorData">
					<div class="sponsorDescription">
						<p id="back100text"><?= $testis[2] ?></p>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<!--	section Text	-->
	<div id="text">
		<a href="#textpopup" class="hinge">Editer les textes du site</a>
			<!-- POP UP edit -->
		<div id="textpopup" class="white-popup mfp-with-anim mfp-hide">

			<form action="#" method="POST" accept-charset="utf-8">
				<textarea name="sec_text" placeholder="dit un truc: 'un truc?'"><?= $texts[0] ?></textarea>
				<input type="submit" name="submit_Sectiontext1" value="Envoyer">
			</form>
			<form action="#" method="POST" accept-charset="utf-8">
				<textarea name="sec_text" placeholder="dit un truc: 'un truc?'"><?= $texts[1] ?></textarea>
				<input type="submit" name="submit_Sectiontext2" value="Envoyer">
			</form>
			<form action="#" method="POST" accept-charset="utf-8">
				<textarea name="sec_text" placeholder="dit un truc: 'un truc?'"><?= $texts[2] ?></textarea>
				<input type="submit" name="submit_Sectiontext3" value="Envoyer">
			</form>

		</div>
		<div id="textes">
			<div class="container">
				<h2>text</h2>
				<hr>
				<div class="text" id="sectionText_1">
					<?= $texts[0] ?>
				</div>
				<div class="text"id="sectionText_2">
					<?= $texts[1] ?>
				</div>
				<div class="text"id="sectionText_3">
					<?= $texts[2] ?>
				</div>
			</div>
		</div>
	</div>
	
<?php $this->stop('main_content') ?>