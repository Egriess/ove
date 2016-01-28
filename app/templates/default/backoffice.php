<?php $this->layout('layout', ['title' => 'Gestion et édition']) ?>

<?php $this->start('main_content') ?>

	<header>
		<h1 id="text_shadow" style="text-align:center; text-shadow: rgb(150, 150, 150) 4px 4px 2px;" > ADMINISTRATION DE <?= $title[0] ?> </h1><br>
				
		<a href="/page">Voir la page <?= $title[0] ?></a>
		
	</header>
	
	<input type="hidden" name="" value="<?php $Lat ?>">
	<input type="hidden" name="" value="<?php $Lng ?>">
	
	<!--
		Section Slider Manager
	-->

	<div id="sliderback">
				<!--
					change Slider images
				-->
				<h3>Gestion des images du slider</h3>
				<img src="assets/imgs/<?= $imgslider[0] ?>" />
				<img src="assets/imgs/<?= $imgslider[1] ?>"/>
				<img src="assets/imgs/<?= $imgslider[2] ?>" />
				<img src="assets/imgs/<?= $imgslider[3] ?>" />
				<img src="assets/imgs/<?= $imgslider[4] ?>" />
				<br>
				<a href="#slider1popup" class="myButton hinge">Choisir l'image 1</a>
					<!-- POP UP edit -->
				<div id="slider1popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_slider_1" class="upload"/>
						</div>
						<input type="submit" name="submit_slider_1" value="Envoyer">	
					</form>
				</div>
			
				
				<a href="#slider2popup" class="myButton hinge">Choisir l'image 2</a>
					<!-- POP UP edit -->
				<div id="slider2popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_slider_2" class="upload"/>
						</div>
						<input type="submit" name="submit_slider_2" value="Envoyer">	
					</form>
				</div>
			
				<a href="#slider3popup" class="myButton hinge">Choisir l'image 3</a>
					<!-- POP UP edit -->
				<div id="slider3popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_slider_3" class="upload"/>
						</div>
						<input type="submit" name="submit_slider_3" value="Envoyer">	
					</form>
				</div>

				<a href="#slider4popup" class="myButton hinge">Choisir l'image 4</a>
					<!-- POP UP edit -->
				<div id="slider4popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_slider_4" class="upload"/>
						</div>
						<input type="submit" name="submit_slider_4" value="Envoyer">	
					</form>
				</div>

				<a href="#slider5popup" class="myButton hinge">Choisir l'image 5</a>
					<!-- POP UP edit -->
				<div id="slider5popup" class="white-popup mfp-with-anim mfp-hide">
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
				
			<hr style="margin:auto;">
	</div>	
	<!--
		END Section Slider Manager
	-->

	<!--
		Section Testimonials Manager
	-->
		<div id="testimoniauxback">

			<h3>Gestion des testimoniaux</h3>
			
			<!--
					Testi 1 Manager
			-->
			<a href="#testimonial1popup" class="hinge myButton">Editer le testimonial 1</a>
			
			<div id="testimonial1popup" class="white-popup mfp-with-anim mfp-hide">
				<!--
					name change
				-->
				<form class="name" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 25 caractères</span>
					<label>nom et prénom</label>
					<input type="text" name="name_area" value="<?= $names[0] ?>"maxlength="25"> 
					<input type="submit" name="submit_name1" value="Envoyer">
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
				<!--
					change text
				-->
				<form class="testitext" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 170 caractères</span>
					<textarea name="testi-area" placeholder="" maxlength="170"><?= $testis[0] ?></textarea>
					<input type="submit" name="submit_text1" value="Envoyer">
				</form>
			</div>

			<!--
					Testi 2 Manager
			-->
			<a href="#testimonial2popup" class="hinge myButton">Editer le testimonial 2</a>
			
			<div id="testimonial2popup" class="white-popup mfp-with-anim mfp-hide">
				<!--
					name change
				-->
				<form class="name" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 25 caractères</span>
					<label>nom et prénom</label>
					<input type="text" name="name_area" value="<?= $names[1] ?>"maxlength="25">
					<input type="submit" name="submit_name2" value="Envoyer">
				</form>

				<!--
					change avatar
				-->
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
				<!--
					change text
				-->
				<form class="testitext" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 170 caractères</span>
					<textarea name="testi-area" placeholder="" maxlength="170"><?= $testis[1] ?></textarea>
					<input type="submit" name="submit_text2" value="Envoyer">
				</form>
			</div>
				
			<a href="#testimonial3popup" class="hinge myButton">Editer le testimonial 3</a>
			
			<div id="testimonial3popup" class="white-popup mfp-with-anim mfp-hide">
				<!--
					name change
				-->
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
					Text change
				-->
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

	<!--
		END Section Testimonials Manager
	-->

	<!--
		Section Maps Manager
	-->
	<div id="mapsback">
		<div class="container">
			<div id="map"></div>
				<div id="panelback">
					<h3>Gerer la carte</h3>
					<form action="#" method="POST" accept-charset="utf-8">
					<!--deux hidden qui se remplissent quand on clique sur trouver l'adresse-->
					<input type="hidden" name="lat" value="<?=  $lat; ?>">
					<input type="hidden" name="lon" value="<?=  $lon; ?>">
	      			<input id="address" name="address" type="textbox" value="" placeholder="Entrer votre nouvelle adresse">
	      			<input id="setMap" type="button" value="Trouver l'adresse">
	      			<input id="submit" name="button" type="submit" value="Valider">
	      			
	     		 </form>

				<h4>Mon adresse actuel :</h4>
	     		<p><?=  $adress[0]; ?></p>
	  		</div>
		</div>
	</div>

	<div id="backheader">
		
					<!-- POP UP edit -->
					<div id="titlepopup" class="white-popup mfp-with-anim mfp-hide">
						<form action="/updateTitle" method="post" accept-charset="utf-8">
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
								<option style="font-family:'Monserrat';"value="Monserrat">Monserrat</option>
								<option style="font-family:'Lora';"value="Lora">Lora</option>
								<option style="font-family:'Open Sans Condensed';"value="Open Sans Condensed">Open Sans Condensed</option>
							</select><br>
							<!-- text shadow gen-->
							<input type="submit" name="submit_title" value="envoyer">
						</form>
					</div>

		<a href="#titlecolorpopup" class="hinge">Choisir la couleur du menu</a>
					<!-- POP UP edit -->
					<div id="titlecolorpopup" class="white-popup mfp-with-anim mfp-hide">
						<span> Choisir la couleur du menu</span>
						<input type="color" value="#fad345" name="menucolor">
					</div>

	</div>
			<a href="#gallerypopup" class="hinge">Choisir les image de la galerie</a>
					<div id="gallerypopup" class="white-popup mfp-with-anim mfp-hide">
					<span> Choisir les images</span>		
	

	<a href="#titlepopup" class="hinge">Editer le titre du site</a>
	



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