<?php $this->layout('layout', ['title' => 'Gestion et édition']) ?>

<?php $this->start('main_content') ?>
	
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
					<input type="submit" name="submit_text" value="submit">
				</form>

				<form action="#" method="POST" accept-charset="utf-8">
					<textarea name="testi-area" placeholder=""><?= $testis[1] ?></textarea>
					<input type="submit" name="submit_text" value="submit">
				</form>

				<form action="#" method="POST" accept-charset="utf-8">
					<textarea name="testi-area" placeholder=""><?= $testis[2] ?></textarea>
					<input type="submit" name="submit_text" value="submit">
				</form> 
			
		</div>
	</div>
	
<?php $this->stop('main_content') ?>