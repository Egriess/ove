$(function(){	

	//fonction flip testimonial

	$('.testiFlip').bind("click",function(){

		var elem = $(this);

		// data('flipped') is a flag we set when we flip the element:

		if(elem.data('flipped'))
		{
			// If the element has already been flipped, use the revertFlip method
			// defined by the plug-in to revert to the default state automatically:

			elem.revertFlip()//.css({backgroundImage: 'url("imgs/back50.jpg")'});


			// Unsetting the flag:
			elem.data('flipped',false)
		}
		else
		{
			// Using the flip method defined by the plugin:

			elem.flip({
				direction:'lr',
				speed: 350,
				onBefore: function(){
					// Insert the contents of the .sponsorData div (hidden
					// from view with display:none) into the clicked
					// .sponsorFlip div before the flipping animation starts:

					elem.html(elem.siblings('.sponsorData').html());


				}
			});

			// Setting the flag:
			elem.data('flipped',true);
			//$('#back50').css({backgroundImage: 'none'});
		}
	});


	document.getElementById("uploadBtn").onchange = function()
	{
    	document.getElementById("uploadFile").value = this.value;
	};
});	