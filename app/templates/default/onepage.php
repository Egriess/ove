<?php $this->layout('layout', ['title' => '$usernameOrEmail' ]) ?>
	
	

<?php $this->start('main_content') ?>
<header>
		
			<nav class="navbar navbar-fixed-top">
				<h1 id="text_shadow" style="text-shadow: rgb(150, 150, 150) 4px 4px 2px;" ></h1>
				<!-- POP UP edit end -->
				<ul class="nav nav-pills">
				  <li role="presentation"><a href="/login">Loginpage</a></li>
				  <li role="presentation"><a href="/backoffice">Backoffice</a></li>
				  <li role="presentation"><a href="/register">Register</a></li>
				  <li role="presentation"><a href="/page">Page coté client</a></li>
				  <li role="presentation"><a href="#">Menu5</a></li>
				  <li role="presentation"><a href="#">Menu6</a></li>  
				</ul>
			</nav>

			
		
	</header>

<div id="gallery">
	<div class="container">
		<ul class="gallery">

			<li id="draggable " class="pics1 ui-widget-content"><img src="<?= $this->assetUrl('imgs/gallery/1.jpg') ?>" alt="Gallery img1" /><br>pics 1</li>

			<li id="draggable" class="pics2"><img src="<?= $this->assetUrl('imgs/gallery/2.jpg') ?>" alt="Gallery img2" /><br>pics 2</li>

			<li id="draggable" class="pics3"><img src="<?= $this->assetUrl('imgs/gallery/3.jpg') ?>" alt="Gallery img3" /><br>pics 3</li>

			<li id="draggable" class="pics4"><img src="<?= $this->assetUrl('imgs/gallery/4.jpg') ?>" alt="Gallery img4" /><br>pics 4</li>

			<li id="draggable" class="pics5"><img src="<?= $this->assetUrl('imgs/gallery/5.jpg') ?>" alt="Gallery img5" /><br>pics 5</li>

			<li id="draggable" class="pics6"><img src="<?= $this->assetUrl('imgs/gallery/6.jpg') ?>" alt="Gallery img6" /><br>pics 6</li>

		</ul>
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

<div id="sound">
<iframe width="100%" height="350" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/134686476&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
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
		<?php 
			$errName='';
			$errEmail='';
			$errMessage='';
			$errHuman='';
			$result='';
		
		 ?>
		<form class="form-horizontal" method="POST" action="/sendmail">
		    <div class="form-group">
		        <label for="name" class="col-sm-2 control-label">Name</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
		            <?php echo "<p class='text-danger'>$errName</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="email" class="col-sm-2 control-label">Email</label>
		        <div class="col-sm-10">
		            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
		            <?php echo "<p class='text-danger'>$errEmail</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="message" class="col-sm-2 control-label">Message</label>
		        <div class="col-sm-10">
		            <textarea class="form-control" rows="4" name="message"></textarea>
		            <?php echo "<p class='text-danger'>$errMessage</p>";?>
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