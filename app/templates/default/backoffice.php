<?php $this->layout('layout', ['title' => 'Gestion et édition']) ?>

<?php $this->start('main_content') ?>
<!-- start: Main Menu -->

			<div id="sidebar-left" class="span2">
				<h3 id="text_shadow"  > Bienvenue <?= $title[0] ?> .</h3><br>
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="/page"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Voir la page </a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Utilisateur</a></li>	
						<li><a href="#backheader"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Réglages Généraux</a></li>
						<li><a href="#sliderback"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>  Slider</a></li>
						<li><a href="#galeryback"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span>  Galerie</a></li>
						<li><a href="#testimoniauxback"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>  Testimoniaux</a></li>
						<li><a href="#backsoundcloud"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Souncloud</a></li>
						<li><a href="chart.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Google Map</a></li>
						<li><a href="typography.html"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Textes libres</a></li>
						<li><a href="gallery.html"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a></li>
						<li><a href="calendar.html"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Social</a></li>
						<li><a href="table.html"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Support</a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
					
	<div id="backheader" >
		<div class="container">
			
					<!-- POP UP edit -->
	
					<h3>Réglages généraux</h3>
					<div class="backbloc" >
						<h4 class="backh4"> Personnalisation du titre </h4>

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
								<option style="font-family:'Pacifico';"value="Pacifico">Pacifico</option>
							</select><br>
							<input class="button2" type="submit" name="submit_title" value="envoyer">
						</form>
					</div>

					
					<div class="backbloc">
						<h4 class="backh4"> Personnalisation de l'en-tête </h4>
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

							<input class="button2" type="submit" name="submit_bg" value="envoyer"><br>
						</form>
					</div>

					
					<div class="backbloc">
						<h4 class="backh4"> Personnalisation de la section testimoniaux </h4>
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

									<input class="button2" type="submit" name="submit_bg_testi" value="envoyer"><br>
								</form>
					</div>
					
					
					<div class="backbloc">
						<h4 class="backh4"> Personnalisation de la section map </h4>
						<form action="#" method="post" accept-charset="utf-8">
						<span>Choix de dégradé</span><br>
						Couleur 1<input type="color" value="#383535" name="mapcolorbg1"><br>
						Couleur 2<input type="color" value="#383535" name="mapcolorbg2"><br>
						<input class="button2" type="submit" name="submit_bg_map" value="envoyer"><br>
						</form>
					</div>
					
					<div class="backbloc">
						<h4 class="backh4"> Personnalisation de la section texte </h4>
						<form action="#" method="post" accept-charset="utf-8">
						<span>Choix de dégradé</span><br>
						Couleur 1<input type="color" value="#383535" name="textcolorbg1"><br>
						Couleur 2<input type="color" value="#383535" name="textcolorbg2"><br>
						<input class="button2" type="submit" name="submit_bg_text" value="envoyer"><br>
						</form>
					</div>

					<div class="backbloc">
						<h4 class="backh4"> Personnalisation du pied de page </h4>
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

							<input class="button2" type="submit" name="submit_bg" value="envoyer"><br>
						</form>
					</div>


	</div>

	<!--
		END Header Manager
	-->
	

	<!--
		Section Slider Manager
	-->

	<div id="sliderback">
				<div id="slider">
					<figure>
						<img class="sliding" src="assets/imgs/<?= $imgslider[0] ?>" alt="">
						<img class="sliding" src="assets/imgs/<?= $imgslider[1] ?>" alt="">
						<img class="sliding" src="assets/imgs/<?= $imgslider[2] ?>" alt="">
						<img class="sliding" src="assets/imgs/<?= $imgslider[3] ?>" alt="">
						<img class="sliding" src="assets/imgs/<?= $imgslider[4] ?>" alt="">
					</figure>
				</div>

				<!--
					change Slider images
				-->
				<h3>Changez les images du slider</h3>
				<img src="assets/imgs/<?= $imgslider[0] ?>" />
				<img src="assets/imgs/<?= $imgslider[1] ?>"/>
				<img src="assets/imgs/<?= $imgslider[2] ?>" />
				<img src="assets/imgs/<?= $imgslider[3] ?>" />
				<img src="assets/imgs/<?= $imgslider[4] ?>" />
				<br>

				<a href="#slider1popup" class="button2 hinge ">Choisir l'image 1</a>
					<!-- POP UP edit -->
				<div id="slider1popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_slider_1" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_slider_1" value="Envoyer">	
					</form>
				</div>
			
				
				<a href="#slider2popup" class="hinge button2">image 2</a>
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
			
				<a href="#slider3popup" class="hinge button2">image 3</a>
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


				<a href="#slider4popup" class="hinge button2">image 4</a>
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
	
				<a href="#slider5popup" class="hinge button2">image 5</a>
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
				

				<h3>Gallery Manager</h3>

				<h4><?= $txtgallery[0]?></h4>
				<form action="#" method="POST" accept-charset="utf-8">
					<input type="text" name="txtgal" value="" placeholder="">
					<input class="button2" type="submit" name="submit_txtgal" value="Changer le titre">
				</form>

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
				<a href="#galery1popup" class="button2 hinge">Choisir l'image 1</a>
					<!-- POP UP edit -->
				<div id="galery1popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_1" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_gal_1" value="Envoyer">	
					</form>
				</div>

				<a href="#galery2popup" class="button2 hinge">2</a>
					<!-- POP UP edit -->
				<div id="galery2popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_2" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_gal_2" value="Envoyer">	
					</form>
				</div>

				<a href="#galery3popup" class="button2 hinge">3</a>
					<!-- POP UP edit -->
				<div id="galery3popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_3" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_gal_3" value="Envoyer">	
					</form>
				</div>

				<a href="#galery4popup" class="button2 hinge">4</a>
					<!-- POP UP edit -->
				<div id="galery4popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_4" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_gal_4" value="Envoyer">	
					</form>
				</div>

				<a href="#galery5popup" class="button2 hinge">5</a>
					<!-- POP UP edit -->
				<div id="galery5popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_5" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_gal_5" value="Envoyer">	
					</form>
				</div>

				<a href="#galery6popup" class="button2 hinge">6</a>
					<!-- POP UP edit -->
				<div id="galery6popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_6" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_gal_6" value="Envoyer">	
					</form>
				</div>

				<a href="#galery7popup" class="button2 hinge">7</a>
					<!-- POP UP edit -->
				<div id="galery7popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_7" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_gal_7" value="Envoyer">	
					</form>
				</div>

				<a href="#galery8popup" class="button2 hinge">8</a>
					<!-- POP UP edit -->
				<div id="galery8popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_8" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_gal_8" value="Envoyer">	
					</form>
				</div>

				<a href="#galery9popup" class="button2 hinge">9</a>
					<!-- POP UP edit -->
				<div id="galery9popup" class="white-popup mfp-with-anim mfp-hide">
					<form  enctype="multipart/form-data" action="#" method="post">
						
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
						<div class="fileUpload btn btn-primary">
							<span>Upload</span>
							<input id="uploadBtn" type="file" name="img_gal_9" class="upload"/>
						</div>
						<input class="button2" type="submit" name="submit_gal_9" value="Envoyer">	
					</form>
				</div>
	</div>
	<!--
		Section Testimonials Manager
	-->
		<div id="testimoniauxback">

			<h3>Testimoniaux Manager</h3>
			
			<!--
					Testi 1 Manager
			-->
			
			
			<div class="backbloctesti">
				<h4 class="backh4">Edition testimonial 1<h4>
				<!--
					name change
				-->
				<form class="name" action="#" method="POST" accept-charset="utf-8">
					<span>(Limité à 25 caractères)</span><br>
					<label>nom et prénom</label>
					<input type="text" name="name_area" value="<?= $names[0] ?>"maxlength="25"> 
					<input class="button2" type="submit" name="submit_name1" value="Envoyer">
				</form>

				<!--
					change avatar
				-->
				<form class="selectAvatar" enctype="multipart/form-data" action="#" method="post">
					<img src="assets/imgs/<?= $avatars[0] ?>" />
					<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
					<input id="uploadFile" placeholder="Choisir un ficher" disabled="disabled" />
					<div class="fileUpload btn btn-primary">
						<span>Upload</span>
						<input id="uploadBtn" type="file" name="img_avatar_1" class="upload"/>
					</div>
					<input class="button2" type="submit" name="submit_avatar_1" value="Envoyer">	
				</form>
				<!--
					change text
				-->
				<form class="testitext" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 170 caractères<br>éditez le texte</span>
					<textarea name="testi-area" placeholder="" maxlength="170"><?= $testis[0] ?></textarea>
					<input class="button2" type="submit" name="submit_text1" value="Envoyer">
				</form>
			</div>

			<!--
					Testi 2 Manager
			-->
			
			
			<div class="backbloctesti">
				<h4 class="backh4">Edition testimonial 2</h4>
				<!--
					name change
				-->
				<form class="name" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 25 caractères</span>
					<label>nom et prénom</label>
					<input type="text" name="name_area" value="<?= $names[1] ?>"maxlength="25">
					<input class="button2" type="submit" name="submit_name2" value="Envoyer">
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
					<input class="button2" type="submit" name="submit_avatar_2" value="Envoyer">	
				</form>
				<!--
					change text
				-->
				<form class="testitext" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 170 caractères</span>
					<textarea name="testi-area" placeholder="" maxlength="170"><?= $testis[1] ?></textarea>
					<input class="button2" type="submit" name="submit_text2" value="Envoyer">
				</form>
			</div>
				
			
			<div class="backbloctesti" >
				<h4 class="button2">Edition testimonial 3</h4>
				<!--
					name change
				-->
				<form class="name" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 25 caractères</span>
					<label>nom et prénom</label>
					<input type="text" name="name_area" value="<?= $names[2] ?>"maxlength="25">
					<input class="button2" type="submit" name="submit_name3" value="Envoyer">
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
					<input class="button2" type="submit" name="submit_avatar_3" value="Envoyer">	
				</form>
				<!--
					Text change
				-->
				<form class="testitext" action="#" method="POST" accept-charset="utf-8">
					<span>Limité à 170 caractères</span>
					<textarea name="testi-area" placeholder="" maxlength="170"><?= $testis[2] ?></textarea>
					<input class="button2" type="submit" name="submit_text3" value="Envoyer">
				</form> 
			
		</div>
	</div>

	<div id="testimoniauxend">
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

	
	<div id="mapsback">
		<div class="container">
			<div id="map"></div>
				<div id="panelback">
					<h3>Gerer la carte</h3>
					<form action="#" method="POST" accept-charset="utf-8">
					<!--deux hidden qui se remplissent quand on clique sur trouver l'adresse-->
					<input id="lat" type="hidden" name="lat" value="<?=  $lat[0]; ?>">
					<input id="lon" type="hidden" name="lon" value="<?=  $lon[0]; ?>">
	      			<input id="address" name="address" type="textbox" value="" placeholder="Entrez votre adresse">
	      			<input id="setMap" type="button" value="Trouver l'adresse">
	      			<input id="submit" name="submit_adress" type="submit" value="Valider">
	      			
	     		 </form>

				<h4>Mon adresse actuel :</h4>
	     		<p><?=  $adress[0]; ?></p>
	  		</div>
		</div>
	</div>
	<!--	section Text Manage	-->


	
	<div id="textback">
		<a href="#textpopup" class="hinge button2">Editer les textes du site</a>
			<!-- POP UP edit -->
		<div id="textpopup" class="white-popup mfp-with-anim mfp-hide">

			<form action="#" method="POST" accept-charset="utf-8">
				<span>Limité à 500 caractères</span>
				<textarea name="sec_text" placeholder="dit un truc: 'un truc?'" maxlength="500" ><?= $texts[0] ?></textarea>
				<input type="submit" name="submit_Sectiontext1" value="Envoyer">
			</form>
			<form action="#" method="POST" accept-charset="utf-8">
				<span>Limité à 500 caractères</span>
				<textarea name="sec_text" placeholder="dit un truc: 'un truc?'" maxlength="500"><?= $texts[1] ?></textarea>
				<input type="submit" name="submit_Sectiontext2" value="Envoyer">
			</form>
			<form action="#" method="POST" accept-charset="utf-8">
				<span>Limité à 500 caractères</span>
				<textarea name="sec_text" placeholder="dit un truc: 'un truc?'" maxlength="500"><?= $texts[2] ?></textarea>
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
				<h2>Mailer Manager</h2>
				<p>Entrez l'adresse sur laquelle vous souhaitez recevoir les email à partir de votre page .</p>
				<form action="#" method="POST" accept-charset="utf-8">

					<label>votre adresse mail</label>
					<input type="email" name="email_recipe" value="" placeholder="">					
					<input class="button2"type="submit" name="submit_mail" value="Valider">
				</form>
			</div>
		</div>
	</div>
		
	

	
	




	

<?php $this->stop('main_content') ?>