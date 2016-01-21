<?php $this->layout('layout', ['title' => 'Titre de cette Onepage']) ?>

<?php $this->start('main_content') ?>



	<div id="gallery">
    
<?php

/* Configuration Start */

$thumb_directory = './assets/img/thumbs';
$orig_directory = './assets/img/original';

$stage_width=600;	// How big is the area the images are scattered on
$stage_height=400;

/* Configuration end */

$allowed_types=array('jpg','jpeg','gif','png');
$file_parts=array();
$ext='';
$title='';
$i=0;

/* Opening the thumbnail directory and looping through all the thumbs: */

$dir_handle = @opendir($thumb_directory) or die("There is an error with your image directory!");

$i=1;
while ($file = readdir($dir_handle)) 
{
	/* Skipping the system files: */
	if($file=='.' || $file == '..') continue;
	
	$file_parts = explode('.',$file);
	$ext = strtolower(array_pop($file_parts));

	/* Using the file name (withouth the extension) as a image title: */
	$title = implode('.',$file_parts);
	$title = htmlspecialchars($title);

	/* If the file extension is allowed: */	
	if(in_array($ext,$allowed_types))
	{
		/* Generating random values for the position and rotation: */
		$left=rand(0,$stage_width);
		$top=rand(0,400);
		$rot = rand(-40,40);
		
		if($top>$stage_height-130 && $left > $stage_width-230)
		{
			/* Prevent the images from hiding the drop box */
			$top-=120+130;
			$left-=230;
		}
		
		/* Outputting each image: */
		
		echo '
		<div id="pic-'.($i++).'" class="pic" style="top:'.$top.'px;left:'.$left.'px;background:url('.$thumb_directory.'/'.$file.') no-repeat 50% 50%; -moz-transform:rotate('.$rot.'deg); -webkit-transform:rotate('.$rot.'deg);">
		<a class="fancybox" rel="fncbx" href="'.$orig_directory.'/'.$file.'" target="_blank">'.$title.'</a>
		</div>';
	}
}

/* Closing the directory */
closedir($dir_handle);

?>
    <div class="drop-box">
    </div>
    
	</div>
    
	<div class="clear"></div>

	<div id="modal" title="Share this picture">
	<form action="">
	<fieldset>
		<label for="url">URL of the image</label>
		<input type="text" name="url" id="url" class="text ui-widget-content ui-corner-all" onfocus="this.select()" />
	</fieldset>
	</form>

</div>
<div id="testimoniaux">
	<div class="container">
<<<<<<< HEAD
	</div>
</div>

<div id="maps">
	<div class="container">
		<div id="map">
			<div id="floating-panel">
			</div>
		</div>			
		<div id="adresspage">
				<p>Voici mon adresse !  </p><br>
				<?=  $currentadresse; ?>			
		</div>
=======
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
		
>>>>>>> a34a12be5a34fb4cb67ee2024fa8a397f8cfc825
	</div>
</div>

<!--	section Text	-->
<div id="text">
	<div class="container">
		<h2>Text</h2>
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
<?php $this->stop('main_content') ?>