<?php $this->layout('layout', ['title' => 'Gestion et édition']) ?>

<?php $this->start('main_content') ?>



	<header>
		<h1 id="text_shadow" style="text-align:center; text-shadow: rgb(150, 150, 150) 4px 4px 2px;" > ADMINISTRATION DE <?= $title[0] ?> </h1><br>
		<a href="/page">Voir la page <?= $title[0] ?></a>
	</header>
	
	<!--
		END Header Manager
	-->
					
	<div id="backheader">
		<div class="container">
					<!-- POP UP edit -->
		<ul>
			<li><a href="#titlebackgroundpopup" class="hinge">Choisir l'arrière plan</a></li>
			<li><a href="#titlepopup" class="hinge">Editer le titre du site</a></li>
			<li><a href="#backtesti" class="hinge">Choisir la couleur d'arrière plan des testi</a></li>
			<li><a href="#backtext" class="hinge">Choisir la couleur d'arrière plan du texte</a></li>
			<li><a href="#backmap" class="hinge">Choisir la couleur d'arrière plan de la carte</a></li>
		</ul>
	</div>
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

					

	</div>
	
	<!--
		END Header Manager
	-->
	<div id="backtesti" class="white-popup mfp-with-anim mfp-hide">
		<span> Choisir l'arrière plan(couleur unis)</span>

				<form action="#" method="post" accept-charset="utf-8">

					<input type="color" value="#383535" name="textcolorbg"><br>	

					<span>Choix de dégradé</span><br>
					<select name="gradient">

						<option value="to right">to right</option>
						<option value="to left">to left</option>

					</select><br>

					Couleur 1<input type="color" value="#383535" name="testicolorbg1"><br>
					Couleur 2<input type="color" value="#383535" name="testicolorbg2"><br>

					<hr><input type="submit" name="submit_bg_testi" value="envoyer"><br>
				</form>
	</div>

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
			
				
				<a href="#slider2popup" class="myButton hinge">image 2</a>
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
			
				<a href="#slider3popup" class="myButton hinge">image 3</a>
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


				<a href="#slider4popup" class="myButton hinge">image 4</a>
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
	
				<a href="#slider5popup" class="myButton hinge">image 5</a>
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
		Section Gallery Manager
	-->
	<div id="galeryback">
				<!--
					change Slider images
				-->
				<h3><?= $txtgallery[0]?></h3>
				<form action="#" method="POST" accept-charset="utf-8">
					<input type="text" name="txtgal" value="" placeholder="">
					<input type="submit" name="submit_txtgal" value="Changer le texte">
				</form>

				<h3>Gestion des images de la gallery</h3>
				<img src="assets/imgs/<?= $imggallery[0] ?>" />
				<img src="assets/imgs/<?= $imggallery[1] ?>"/>
				<img src="assets/imgs/<?= $imggallery[2] ?>" />
				<img src="assets/imgs/<?= $imggallery[3] ?>" />
				<img src="assets/imgs/<?= $imggallery[4] ?>" />
				<img src="assets/imgs/<?= $imggallery[5] ?>" />
				<img src="assets/imgs/<?= $imggallery[6] ?>" />
				<img src="assets/imgs/<?= $imggallery[7] ?>" />
				<img src="assets/imgs/<?= $imggallery[8] ?>" />
				<br>
				<a href="#galery1popup" class="myButton hinge">Choisir l'image 1</a>
					<!-- POP UP edit -->
				<div id="galery1popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_1" class="upload"/>
						</div>
						<input type="submit" name="submit_gal_1" value="Envoyer">	
					</form>
				</div>

				<a href="#galery2popup" class="myButton hinge">image 2</a>
					<!-- POP UP edit -->
				<div id="galery2popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_2" class="upload"/>
						</div>
						<input type="submit" name="submit_gal_2" value="Envoyer">	
					</form>
				</div>

				<a href="#galery3popup" class="myButton hinge">image 3</a>
					<!-- POP UP edit -->
				<div id="galery3popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_3" class="upload"/>
						</div>
						<input type="submit" name="submit_gal_3" value="Envoyer">	
					</form>
				</div>

				<a href="#galery4popup" class="myButton hinge">image 4</a>
					<!-- POP UP edit -->
				<div id="galery4popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_4" class="upload"/>
						</div>
						<input type="submit" name="submit_gal_4" value="Envoyer">	
					</form>
				</div>

				<a href="#galery5popup" class="myButton hinge">image 5</a>
					<!-- POP UP edit -->
				<div id="galery5popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_5" class="upload"/>
						</div>
						<input type="submit" name="submit_gal_5" value="Envoyer">	
					</form>
				</div>

				<a href="#galery6popup" class="myButton hinge">image 6</a>
					<!-- POP UP edit -->
				<div id="galery6popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_6" class="upload"/>
						</div>
						<input type="submit" name="submit_gal_6" value="Envoyer">	
					</form>
				</div>

				<a href="#galery7popup" class="myButton hinge">image 7</a>
					<!-- POP UP edit -->
				<div id="galery7popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_7" class="upload"/>
						</div>
						<input type="submit" name="submit_gal_7" value="Envoyer">	
					</form>
				</div>

				<a href="#galery8popup" class="myButton hinge">image 8</a>
					<!-- POP UP edit -->
				<div id="galery8popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_8" class="upload"/>
						</div>
						<input type="submit" name="submit_gal_8" value="Envoyer">	
					</form>
				</div>

				<a href="#galery9popup" class="myButton hinge">image 9</a>
					<!-- POP UP edit -->
				<div id="galery9popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_9" class="upload"/>
						</div>
						<input type="submit" name="submit_gal_9" value="Envoyer">	
					</form>
				</div>
	</div>
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
		Section Soundcloud Manager
	-->

	<div id="backsoundcloud">
	<h3> Choisir le contenu du widget soundcloud </h3>
	<p>Vous avez le choix entre integrer une seule chanson ou une playlist complete il vous suffit de copier le liens à l'aide du bouton share sur soundcloud.com</p>
		<form action="#" method="post" accept-charset="utf-8">
			<input type="text" name="sound" value="" placeholder="Adresse de la chanson ou playlist">
			<input type="submit" name="submit_sound" value="Envoyer">
		</form>
	</div>

	<!--
		END Soundcloud Manager
	-->

	<!--
		Section Maps Manager
	-->

	<div id="backmap" class="white-popup mfp-with-anim mfp-hide">
		

				<form action="#" method="post" accept-charset="utf-8">

				
 
					<span>Choix de dégradé</span><br>
					

					Couleur 1<input type="color" value="#383535" name="mapcolorbg1"><br>
					Couleur 2<input type="color" value="#383535" name="mapcolorbg2"><br>

					<hr><input type="submit" name="submit_bg_map" value="envoyer"><br>
				</form>
	</div>
	<div id="mapsback">
		<div class="container">
			<div id="map"></div>
				<div id="panelback">
					<h3>Gerer la carte</h3>
					<form action="#" method="POST" accept-charset="utf-8">
					<!--deux hidden qui se remplissent quand on clique sur trouver l'adresse-->
					<input id="lat" type="hidden" name="lat" value="<?=  $lat[0]; ?>">
					<input id="lon" type="hidden" name="lon" value="<?=  $lon[0]; ?>">
	      			<input id="address" name="address" type="textbox" value="" placeholder="Entrer votre nouvelle adresse">
	      			<input id="setMap" type="button" value="Trouver l'adresse">
	      			<input id="submit" name="submit_adress" type="submit" value="Valider">
	      			
	     		 </form>

				<h4>Mon adresse actuel :</h4>
	     		<p><?=  $adress[0]; ?></p>
	  		</div>
		</div>
	</div>
	<!--	section Text Manage	-->


	<div id="backtext" class="white-popup mfp-with-anim mfp-hide">
		

				<form action="#" method="post" accept-charset="utf-8">

				

					<span>Choix de dégradé</span><br>
					

					Couleur 1<input type="color" value="#383535" name="textcolorbg1"><br>
					Couleur 2<input type="color" value="#383535" name="textcolorbg2"><br>

					<hr><input type="submit" name="submit_bg_text" value="envoyer"><br>
				</form>
	</div>
	<div id="textback">
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
	</div>
		<div id="textes">
			<div class="container">
				<h2>text</h2>
				
				<div class="col-md-4 text" id="sectionText_1">
					<?= $texts[0] ?>
				</div>
				<div class="col-md-4 text" id="sectionText_2">
					<?= $texts[1] ?>
				</div>
				<div class="col-md-4 text" id="sectionText_3">
					<?= $texts[2] ?>
				</div>
			</div>
		</div>
		<div id="emailback">
			<div class="container">
				<h2>Formulaire SMTP</h2>
				<p>Compte gmail requis.</p>
				<form action="#" method="POST" accept-charset="utf-8">

					<label>votre adresse mail</label>
					<input type="email" name="email_recipe" value="" placeholder="">					
					<input type="submit" name="submit_mail" value="Valider">
				</form>
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
	




	

<?php $this->stop('main_content') ?>