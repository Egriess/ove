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

<!--
	=====Contact form=====
-->
<div id="contact">
	<div class="container">
	
		<h2>Contact</h2>
		
		<form class="form-horizontal" method="POST" action="contact">
		    <div class="form-group">
		        <label for="name" class="col-sm-2 control-label">Name</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php if(isset($_POST['name'])){echo $this->e($_POST['name']);}; ?>">
		            <?php echo "<p class='text-danger'>$errName</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="email" class="col-sm-2 control-label">Email</label>
		        <div class="col-sm-10">
		            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php if(isset($_POST['submit'])){echo $this->e($_POST['email']);}; ?>">
		            <?php if(isset($_POST['submit'])){echo "<p class='text-danger'>$errEmail</p>";};?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="message" class="col-sm-2 control-label">Message</label>
		        <div class="col-sm-10">
		            <textarea class="form-control" rows="4" name="message"><?php if(isset($_POST['submit'])){echo $this->e($_POST['message']);}?></textarea>
		            <?php if(isset($_POST['submit'])){echo "<p class='text-danger'>$errMessage</p>";};?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
		            <?php echo "<p class='text-danger'>$errHuman</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-10 col-sm-offset-2">
		            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-10 col-sm-offset-2">
		            <?php echo $result; ?>    
		        </div>
		    </div>
		</form>
	</div>
</div>
<?php $this->stop('main_content') ?>