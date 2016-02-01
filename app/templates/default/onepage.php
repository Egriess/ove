<?php $this->layout('layout', ['title' => $titledisplay[0]  ]) ?>


<?php $this->start('main_content') ?>

<header style="background: linear-gradient(<?= $direction[0] ?>, <?= $gradiant_color1[0] ?> , <?= $gradiant_color2[0] ?>); ">	
	
		

	<nav class="navbar navbar-fixed-top">

		<h1 id="text_shadow" style="text-shadow: rgb(150, 150, 150) 4px 4px 2px; color:<?= $color[0] ?>;font-family:<?= $font[0] ?>" ><?= $titledisplay[0] ?></h1>

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
	===== Testimonials section =====
-->

<div id="testimoniaux" style="background: linear-gradient(<?= $col_testi_1[0] ?> , <?= $col_testi_2[0] ?>">
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
<div id="blockquote">
	<h3><?= $txtgallery[0]?></h3>
</div>

<div id="gallery">
	 <div class="containergal">
		<div id="carousel">
			<figure><img src="assets/imgs/<?= $imggallery[0] ?>" alt=""></figure>
			<figure><img src="assets/imgs/<?= $imggallery[1] ?>" alt=""></figure>
			<figure><img src="assets/imgs/<?= $imggallery[2] ?>" alt=""></figure>
			<figure><img src="assets/imgs/<?= $imggallery[3] ?>" alt=""></figure>
			<figure><img src="assets/imgs/<?= $imggallery[4] ?>" alt=""></figure>
			<figure><img src="assets/imgs/<?= $imggallery[5] ?>" alt=""></figure>
			<figure><img src="assets/imgs/<?= $imggallery[6] ?>" alt=""></figure>
			<figure><img src="assets/imgs/<?= $imggallery[7] ?>" alt=""></figure>
			<figure><img src="assets/imgs/<?= $imggallery[8] ?>" alt=""></figure>
		</div>
	</div>
</div>

<!--
	===== Soundcloud section =====
-->
<div id="sound">
	<iframe width="100%" height="350" scrolling="no" frameborder="no" 
	src="https://w.soundcloud.com/player/?url=<?= $soundcloud[0] ?>&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
</div>


<!--
	===== Text section =====
-->
<div id="text" style="background: linear-gradient(<?= $col_text_1[0] ?> , <?= $col_text_2[0] ?>">
	<div class="container">
		
		<div class="col-md-4 text" class="text" id="sectionText_1">
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

<!--
	===== Map section =====
-->
<div id="maps" style="background: linear-gradient(<?= $col_map_1[0] ?> , <?= $col_map_2[0] ?>">
	<div class="container">
		
			<div id="map"></div>	
			<div id="floating-panel">
			
				<input id="lat" type="hidden" name="lat" value="<?=  $lat[0]; ?>">
				<input id="lon" type="hidden" name="lon" value="<?=  $lon[0]; ?>">
				

			<div id="adresspage">
				<p>Voici mon adresse !  </p><br>
				<?=  $adress[0]; ?>			
			</div>
			</div>	
	</div>
</div>

<!--
	=====Contact form=====
-->
<div id="contact">
	<div class="container">
	
		<h2>Contact</h2>
		<form class="form-horizontal" method="POST" action="/contact">
		    <div class="form-group">
		        <label for="name" class="col-sm-2 control-label">Name</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" id="ename" name="name" placeholder="First & Last Name" value="">
		            <?php if(isset($errors['ename'])) echo "<p class='text-danger'>" . $errors['ename'] . "</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="email" class="col-sm-2 control-label">Email</label>
		        <div class="col-sm-10">
		            <input type="email" class="form-control" id="eemail" name="email" placeholder="example@domain.com" value="">
		            <?php //if(isset($errors['email'])) echo "<p class='text-danger'>" . $errors['email'] . "</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="message" class="col-sm-2 control-label">Message</label>
		        <div class="col-sm-10">
		            <textarea class="form-control" rows="4" name="message"></textarea>
		            <?php if(isset($errors['message'])) echo "<p class='text-danger'>" . $errors['message'] . "</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
		            <?php if(isset($errors['human'])) echo "<p class='text-danger'>" . $errors['human'] . "</p>";?>
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-10 col-sm-offset-2">
		            <input id="submit" name="send-mail" type="submit" value="Send" class="btn btn-primary">
		        </div>
		    </div>
		    <div class="form-group">
		        <div class="col-sm-10 col-sm-offset-2">
		            <?php //echo $result; ?>    
		        </div>
		    </div>
		</form>
	</div>
</div>
<?php $this->stop('main_content') ?>