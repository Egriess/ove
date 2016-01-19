
$(function(){
	console.log('ok i m working');

	 var step = 20;
	 var h,t;
	 var y = 0;

	$( window ).scroll(function() {
		$('nav').addClass('emptybg');
	});


	$('a[href]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});






// Hinge effect popup
$('a.hinge').magnificPopup({
  mainClass: 'mfp-with-fade',
  removalDelay: 1000, //delay removal by X to allow out-animation
  callbacks: {
    beforeClose: function() {
        this.content.addClass('hinge');
    }, 
    close: function() {
        this.content.removeClass('hinge'); 
    }
  },
  midClick: true
});


// Sliders
$('#fontSize, #strokeSize').slider({
	formatter: function(value) {
		return value + 'px';
	}
});

$('#fontSize, #strokeSize').on('slide', function() {
  update();
});

// Colorpickers
$('#fontColor, #strokeColor').colorpicker().on('changeColor', function() {
  update();
});

// Other

$('#fontFamily').change(function() {
  update();
});

// Functions
var update = function() {
  // get form values
  var fontFamily = $('#fontFamily').val();
  var fontSize = $('#fontSize').slider('getValue');
  var strokeSize = $('#strokeSize').slider('getValue');
  
  var fontColor = $('#fontColor').val();
  var strokeColor = $('#strokeColor').val();
  
  // update css
  var $preview = $('#preview');
  $preview.css('font-family', fontFamily);
  $preview.css('color', fontColor);
  $preview.css('font-size', fontSize);
  
  $preview.css('text-shadow', '');
  
  for (var angle=0; angle<2*Math.PI; angle+=1/strokeSize) {
    appendShadow($preview, Math.cos(angle) * strokeSize, Math.sin(angle) * strokeSize, strokeColor);
  }
  
  // update code preview
  $('pre').html('text-shadow: ' + $preview.css('text-shadow') + ';');
}

var appendShadow = function(item, x, y, col) {
  // compute new text-shadow property
  var textShadow = '';
  if (item.css('text-shadow') !== 'none') {
    textShadow = item.css('text-shadow') + ', ';
  }
  textShadow = textShadow + x + 'px ' + y + 'px ' + col;
  
  // apply new text-shadow property
  item.css('text-shadow', textShadow);
}

update();


});