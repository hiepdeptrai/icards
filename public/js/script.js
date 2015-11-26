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
		$(this).parent().css({"border-color":"#f94876", "box-shadow":"1px 1px 10px #f94876"});
	}).focusout(function(){
		$(this).parent().css({"border-color":"silver", "box-shadow":"none"});
	});

	$(".chop-create-card-button").click(function(e){
		e.preventDefault();
		if($('.chop-number input').val() != "" && $('chop-value-pay input').val() != "" && $('.chop-rate input').val() != "" ){
			$(".quantum-chops .table").append("<tr><td>" + $('.chop-number input').val() + "</td><td>" + $('.chop-value-pay input').val() + "</td><td>" + $('.chop-rate input').val() + "%</td><td><a href='#'><i class='fa fa-pencil'></i></a><a href='#'><i class='fa fa-trash'></i></a></td></tr>");
		}
	});

	$(".chop-number input").keyup(function(){
		var numbTick = $(this).val();
		// alert(numbTick);
		// console.log(numbTick);
		if(numbTick > 0){
			for(var i = 1; i <= numbTick; i++){
				$(".tick-"+i).html("<i class='fa fa-star fa-3x'></i>");
			}
			for(var j = parseInt(numbTick)+1; j <= 15; j++){
				$(".demo-back-chops-card span.tick-"+j).html("");
				// console.log($(".tick-"+j).attr("class"));
			}
		} else {
			for(var i = 1; i <= 15; i++){
				$(".demo-back-chops-card span.tick-"+i).html("");
			}
		}
	});


	$(".select-type li:first").click(function(){
		$("#level").css("display", "none");
		$("#chops").css("display", "block");
	});
	$(".select-type li:last").click(function(){
		$("#level").css("display", "block");
		$("#chops").css("display", "none");
	});

	var right = $(".right-section").height();
	var left = $(".left-section").height();
	if(left>right)
	{
	    $(".right-section").height(left);
	}
	else
	{
	    $(".left-section").height(right);
	}

});