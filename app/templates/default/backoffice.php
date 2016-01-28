<?php $this->layout('layout', ['title' => 'Gestion et édition']) ?>

<?php $this->start('main_content') ?>

	<header>
		<h1 id="text_shadow" style="text-align:center; text-shadow: rgb(150, 150, 150) 4px 4px 2px;" > ADMINISTRATION DE </h1><br>
				
		<a href="/page">Voir la page <?= $_SESSION['user']['page_name'] ?></a>
	
	</header>
	
	<input type="hidden" name="" value="<?php $Lat ?>">
	<input type="hidden" name="" value="<?php $Lng ?>">


	<div id="sliderback">
				<!--
					change Slider images
				-->
			<div id="accordion">
				<h3>Section 1</h3>
				<div>
					<form  enctype="multipart/form-data" action="#" method="post">
						<img src="assets/imgs/<?= $imgslider[0] ?>" />
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_slider_1" class="upload"/>
						</div>
						<input type="submit" name="submit_slider_1" value="Envoyer">	
					</form>
				</div>
			
				
				<h3>Section 2</h3>
				<div>	
					<form  enctype="multipart/form-data" action="#" method="post">
						<img src="assets/imgs/<?= $imgslider[1] ?>" />
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_slider_2" class="upload"/>
						</div>
						<input type="submit" name="submit_slider_2" value="Envoyer">	
					</form>
				</div>
			</div>
				<form  enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $imgslider[2] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input id="uploadBtn" type="file" name="img_slider_3" class="upload"/>
					</div>
					<input type="submit" name="submit_slider_3" value="Envoyer">	
				</form>

				<form  enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $imgslider[3] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input id="uploadBtn" type="file" name="img_slider_4" class="upload"/>
					</div>
					<input type="submit" name="submit_slider_4" value="Envoyer">	
				</form>

				<form  enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $imgslider[4] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input id="uploadBtn" type="file" name="img_slider_5" class="upload"/>
					</div>
					<input type="submit" name="submit_slider_5" value="Envoyer">	
				</form>
			</div>
				

	</div>			
					<!-- Header Manager -->
	<div id="backheader">
		
					<!-- POP UP edit -->
		<a href="#titlebackgroundpopup" class="hinge">Choisir l'arrière plan</a>
		<a href="#titlecolorpopup" class="hinge">Choisir la couleur du menu</a>
		<a href="#titlepopup" class="hinge">Editer le titre du site</a>
		<a href="#gallerypopup" class="hinge">Choisir les image de la galerie</a>

					<div id="titlepopup" class="white-popup mfp-with-anim mfp-hide">

						<form action="#" method="post" accept-charset="utf-8">

							<span>Choisir le titre du site</span><br>
							<input type="text" name="title" value="" placeholder="Votre titre"><br>

							<span>Choisir la couleur du texte</span><br>
							<input type="color" value="#383535" name="textcolor"><br>

							<span>Choisir le style d'ecriture</span><br>

							<select name="fonts">
								<option style="font-family:'Roboto';"value="Roboto">Roboto</option>
								<option style="font-family:'Raleway';"value="Raleway">Raleway</option>
								<option style="font-family:'Ubuntu';"value="Ubuntu">Ubuntu</option>
								<option style="font-family:'Droid Sans';"value="Droid">Droid</option>
								<option style="font-family:'IM Fell Double Pica';"value="IM Fell Double Pica">IM Fell Double Pica</option>
								<option style="font-family:'Lora';"value="Lora">Lora</option>
								<option style="font-family:'Open Sans Condensed';"value="Open Sans Condensed">Open Sans Condensed</option>
							</select><br>

							
							<input type="submit" name="submit_title" value="envoyer">
						</form>
					</div>


					<div id="titlebackgroundpopup" class="white-popup mfp-with-anim mfp-hide">

						<span> Choisir l'arrière plan(couleur unis)</span>

						<form action="#" method="post" accept-charset="utf-8">

							<input type="color" value="#383535" name="textcolorbg"><br>	

							<span>Choix de dégradé</span><br>
							<select name="gradient">

								<option value="to right">to right</option>
								<option value="to left">to left</option>

							</select><br>

							Couleur 1<input type="color" value="#383535" name="textcolorbg1"><br>
							Couleur 2<input type="color" value="#383535" name="textcolorbg2"><br>

							<hr><input type="submit" name="submit_bg" value="envoyer"><br>
						</form>
					</div>

					<div id="titlecolorpopup" class="white-popup mfp-with-anim mfp-hide">

						<span> Choisir la couleur du menu</span>
						<input type="color" value="#fad345" name="menucolor">
					</div>

	</div>
			
					<div id="gallerypopup" class="white-popup mfp-with-anim mfp-hide">
					<span> Choisir les images</span>


	

	<div id="testimoniaux">
			<a href="#testimonialpopup" class="hinge">Editer le testimonial</a>
			<div id="testimonialpopup" class="white-popup mfp-with-anim mfp-hide">

				<!--
					name change
				-->
				<form class="name" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 25 caractères</span>
					<label>nom et prénom</label>
					<input type="text" name="name_area" value="<?= $names[0] ?>"maxlength="25"> 
					<input type="submit" name="submit_name1" value="Envoyer">
				</form>

				<form class="name" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 25 caractères</span>
					<label>nom et prénom</label>
					<input type="text" name="name_area" value="<?= $names[1] ?>"maxlength="25">
					<input type="submit" name="submit_name2" value="Envoyer">
				</form>

				<form class="name" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 25 caractères</span>
					<label>nom et prénom</label>
					<input type="text" name="name_area" value="<?= $names[2] ?>"maxlength="25">
					<input type="submit" name="submit_name3" value="Envoyer">
				</form>

				<!--
					change avatar
				-->
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

				<!--
					change text
				-->
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
					<p><?= $names[0] ?></p>
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
					<p><?= $names[1] ?></p>
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
					<p><?= $names[2] ?></p>
				</div>

				<div class="sponsorData">
					<div class="sponsorDescription">
						<p id="back100text"><?= $testis[2] ?></p>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>



<div id="maps">
	<div class="container">
		<div id="map"></div>
			<div id="floating-panel">
				<form action="/saveAdress" method="POST" accept-charset="utf-8">
				<!--deux hidden qui se remplissent quand on clique sur trouver l'adresse-->
				<input type="hidden" name="lat" value="<?=  $lat; ?>">
				<input type="hidden" name="lon" value="<?=  $lon; ?>">
      			<input id="address" name="address" type="textbox" value="" placeholder="Entrer votre nouvelle adresse">
      			<input id="submit" name="button" type="submit" value="Valider">
      			<input id="setMap" type="button" value="Trouver l'adresse">
     		 </form>

			<h3>Mon adresse actuel :</h3>
     		<p><?=  $currentadresse; ?></p>
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
		<div id="email">
			<div class="container">
				<h2>Formulaire SMTP</h2>
				<p>Compte gmail requis.</p>
				<form action="#" method="POST" accept-charset="utf-8">

					<label>votre adresse mail</label>
					<input type="email" name="email_contact" value="" placeholder="ex: john.doe@domain.com">
					<p><?= $email_contact; ?></p>
					<label>mot de passe de votre compte mail</label>
					<input type="password" name="password_mail" value="<?= $password_mail; ?>" placeholder="Votre mot de passe">
					<input type="submit" name="submit_mail" value="Valider">
				</form>
			</div>
		</div>
	</div>
	

<?php $this->stop('main_content') ?>