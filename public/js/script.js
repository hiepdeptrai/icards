$(document).ready(function(){
	$('.img-logo').click(function(){
		$('.upload-img').trigger('click');
	});
	$( ".upload-img" ).change(function( event ) {
		var reader = new FileReader();
	    reader.onload = function(e){
	      	$( "div.contentImage" ).empty();
	      	$( "div.contentImage" ).append( "<img class=\"img-logo\" src=\"" + e.target.result + "\"/>" );
	      	$('.img-logo').click(function(){
				$('.upload-img').trigger('click');
			});
	    };
	    reader.readAsDataURL(event.target.files[0]);
	});

	$('#birthday').datepicker();

	$("input").focus(function(){
		$(this).css({"border-color":"#f94876", "box-shadow":"1px 1px 10px #f94876"});
	}).focusout(function(){
		$(this).css({"border-color":"silver", "box-shadow":"none"});
	});

});