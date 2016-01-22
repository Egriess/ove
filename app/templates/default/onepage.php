<?php $this->layout('layout', ['title' => 'Titre de cette Onepage']) ?>

<?php $this->start('main_content') ?>
<header>
		
			<nav class="navbar navbar-fixed-top">
				<h1 id="text_shadow" style="text-shadow: rgb(150, 150, 150) 4px 4px 2px;" ><?= $titledisplay[0] ?></h1>
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