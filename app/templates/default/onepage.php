<?php $this->layout('layout', ['title' => 'Titre de cette Onepage']) ?>

<?php $this->start('main_content') ?>

<div id="gallery">
	<div class="container">

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
				<div class="sponsorDescription2">
					<p><?= $optionTestiToDisplay1 ?></p>
				</div>
			</div>
		</div>

		<!-- Testimonial 2-->
		<div title="Click to flip" class="testimonial">
			<div id="back50" class="testiFlip">
				<img class="avat" alt="Avatar" src="imgs/<?= $avatars[1] ?>">
				<p>John Doe 2</p>
			</div>

			<div class="sponsorData">
				<div class="sponsorDescription">
					<p><?= $optionTestiToDisplay2 ?></p>
					
				</div>
			</div>
		</div>

		<!-- Testimonial 3-->
		<div title="Click to flip" class="testimonial">
			<div id="back100" class="testiFlip">
				<img class="avat" alt="Avatar" src="imgs/<?= $avatars[2] ?>">
				<p>John Doe 3</p>
			</div>

			<div class="sponsorData">
				<div class="sponsorDescription">
					<p id="back100text"><?= $optionTestiToDisplay3 ?></p>
					
				</div>
			</div>
		</div>
		
	</div>
</div>

<?php $this->stop('main_content') ?>