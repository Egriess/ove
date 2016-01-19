
<?php $this->layout('layout', ['title' => 'Titre de cette Onepage']) ?>

<?php $this->start('main_content') ?>




<div id="gallery">
		
	<div id="album">

			<?php
/* Configuration Start */
			$thumb_directory = './assets/img/thumbs';
			$orig_directory = './assets/img/original';
			$stage_width=600;
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

	closedir($dir_handle);?>
			<div class="drop-box"></div>
			<div class="clear"></div>
	
			<div id="modal" title="Share this picture">
				<form>
					<fieldset>
						<label for="name">URL of the image</label>
						<input type="text" name="url" id="url" class="text ui-widget-content ui-corner-all" onfocus="this.select()" />
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	

	<div id="testimoniaux">
		<div class="container">
			
		</div>
	</div>
	
	<div id="contact">
		<div class="container">
			<h1>Contactez nous</h1>
			<form action="<?php mail();?>">
	  			<div class="form-group has-feedback">
	
	  			  <label for="exampleInputEmail1">Email address</label>
	
	  			  <input type="email" name="mail" class="form-control" id="exampleInputEmail1" placeholder="Email">
	
	  			  <span aria-hidden="true"></span>
	
	  			</div>
	
	  			<div class="form-group has-feedback">
	
	  			  <label >Sujet</label>
	
	  			  <input type="text" name="subject" class="form-control" id="" placeholder="Sujet">
	
	  			  <span  aria-hidden="true"></span>
	
	  			</div>
	
	  			<div class="form-group has-feedback">
	
	  			  <label >Votre message</label>
	
	  			  <textarea name="message"></textarea>
	
	  			  <span  aria-hidden="true"></span>
	
	  			</div>
	
	  			<button type="submit" class="btn btn-default">Envoyer !</button>
			
			</form>
		</div>
	</div>
	
	<?php $this->stop('main_content') ?>