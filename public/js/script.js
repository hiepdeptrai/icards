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

	$("#form-merchant").validate({
	  	rules: {
	  		trademark: "required",
	  		fields: "required",
		    name: "required",
		    role: "required",
		    DateOfBirth: "required",
		    address: "required",
		    city: "required",
		    district: "required",
		    phone: "required",
		    email: {
		      	required: true,
		      	email: true
		    }
	  	},
	  	messages: {
	  		trademark: "Vui lòng nhập tên thương hiệu",
	  		fields: "Vui lòng nhập tên lĩnh vực",
		    name: "Vui lòng điền họ tên đầy đủ",
		    role: "Vui lòng nhập vai trò",
		    DateOfBirth: "Vui lòng nhập ngày sinh",
		    address: "Vui lòng nhập địa chỉ",
		    city: "Vui lòng chọn tỉnh hoặc thành phố", 
		    district: "Vui lòng chọn quận hoặc huyện",
		    phone: "Vui lòng điền số điện thoại liên lạc",
		    email: {
		      	required: "Vui lòng nhập email",
		      	email: "email phải đúng định dạng name@domain.com"
		    }
	  	}
	});
});