<?php $this->layout('layout', ['title' => 'Gestion et édition']) ?>

<?php $this->start('main_content') ?>
	
	<input type="hidden" name="" value="<?php $Lat ?>">
	<input type="hidden" name="" value="<?php $Lng ?>">

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
		<div class="container">
			
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
<?php $this->stop('main_content') ?>