<?php $this->layout('layout', ['title' => 'Gestion et édition']) ?>

<?php $this->start('main_content') ?>
	
	<input type="hidden" name="" value="<?php $Lat ?>">
	<input type="hidden" name="" value="<?php $Lng ?>">

	<div id="backheader">
		<a href="#titlepopup" class="hinge">Editer le titre du site</a>
					<!-- POP UP edit -->
					<div id="titlepopup" class="white-popup mfp-with-anim mfp-hide">
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
							<div id="input">
<form action="">
<div class="control">
<div id="angle_slider" class="controller knob_control" style="transform: rotate(135deg);">|</div><div class="form_input"> <label for="angle">Angle: </label> <input type="text" name="angle" id="angle" value="45" class="auto_update">deg</div></div><div class="control">
<div id="distance_slider" class="controller slider">
<div class="slider_container">
<div class="slider_button" id="distance_sider_button" style="margin-left: 59.2px;"></div></div></div><div class="form_input"> <label for="distance">Distance: </label> <input type="text" name="distance" id="distance" value="3" class="auto_update">px</div></div><div class="control">
<div id="blur_slider" class="controller slider">
<div class="slider_container">
<div class="slider_button" id="blur_sider_button" style="margin-left: 7.4px;"></div></div></div><div class="form_input"> <label for="blur">Blur: </label> <input type="text" name="blur" id="blur" value="1" class="auto_update">px</div></div><div class="control">
<div id="colour_picker" class="controller colour_picker">
<span class="slider_label">r</span>
<div class="slider_container nth_slider">
<div class="slider_button" id="r_sider_button" style="margin-left: 65.2941px;"></div></div><div class="clearfix"></div><span class="slider_label">g</span>
<div class="slider_container nth_slider">
<div class="slider_button" id="g_sider_button" style="margin-left: 65.2941px;"></div></div><div class="clearfix"></div><span class="slider_label">b</span>
<div class="slider_container nth_slider">
<div class="slider_button" id="b_sider_button" style="margin-left: 65.2941px;"></div></div><div class="clearfix"></div></div><div class="form_input">
<label for="colour">rgb: </label>
<input type="text" name="colour" id="colour" value="#CCCCCC" class="auto_update color {valueElement:'hidden_colour', styleElement: 'hidden_colour', onImmediateChange:'updateColour(this);'}" style="width:95px">
<input type="hidden" id="hidden_colour" class="auto_update" autocomplete="off" value="FFFFFF" style="color: rgb(0, 0, 0); background-image: none; background-color: rgb(255, 255, 255);"></div></div><div class="control">
<div id="opacity_slider" class="controller slider">
<div class="slider_container">
<div class="slider_button" id="opacity_sider_button" style="margin-left: 111px;"></div></div></div><div class="form_input"> <label for="opacity">Opacity: </label> <input type="text" name="opacity" id="opacity" value="1" class="auto_update"></div></div><div class="clearfix"></div></form></div>
						<!-- text shadow gen end-->
						<input type="submit" name="sendtxt" value="envoyer">
					</div>

		<a href="#titlecolorpopup" class="hinge">Choisir la couleur du menu</a>
					<!-- POP UP edit -->
					<div id="titlecolorpopup" class="white-popup mfp-with-anim mfp-hide">
						<span> Choisir la couleur du menu</span>
						<input type="color" value="#fad345" name="menucolor">
					</div>

	</div>
			<a href="#gallerypopup" class="hinge">Choisir les image</a>
					<div id="gallerypopup" class="white-popup mfp-with-anim mfp-hide">
					<span> Choisir les images</span>
	<div id="galleryback">
		<div class="containerback">
					<!-- POP UP edit -->

			<form enctype="multipart/form-data" action="#" method="post">
				<input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
				Sélectionner un fichier : <input name="my-file" type="file" />
				<input type="submit" name="submit" value="Envoyer le fichier" />	
			</form>

			<?php 

				if (isset($_POST['submit'])){

			$finfo = new \finfo(FILEINFO_MIME_TYPE);

	
			$mimeType = $finfo->file($_FILES['my-file']['tmp_name']);


			$extFoundInArray = array_search(
       		 $mimeType,
        		array(
        	    	'jpg' => 'image/jpeg',
        	   		'png' => 'image/png',
      		     	 'gif' => 'image/gif',
       			 )
   			 );

    		if ($extFoundInArray === false) {
    			echo 'Le fichier n\'est pas une image';
    		die();
   			 }


			$path = 'assets/img/thumbs/'. sha1_file($_FILES['my-file']['tmp_name']) . '.' . $extFoundInArray;	
			$path2 = 'assets/img/original/'. sha1_file($_FILES['my-file']['tmp_name']) . '.' . $extFoundInArray;	
			$moved = move_uploaded_file($_FILES['my-file']['tmp_name'], $path);
			
			if($moved){
				copy($path,$path2);
			};
		
}	
		
	?>		
		
	</div>					

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



<div id="maps">
	<div class="container">
		<div id="map"></div>
			<div id="floating-panel">
				<form action="/saveAdress" method="POST" accept-charset="utf-8">
				deux hidden qui se remplissent quand on clique sur trouver l'adresse
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
	</div>
	

<?php $this->stop('main_content') ?>