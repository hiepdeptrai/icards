@extends('layouts.merchant-master')

@section('title')
	Create Card | Create Trademark
@stop

@section('header-bot-content')
	<h1>khởi tạo thẻ</h1>
	<ul class="menu-bar-card">
		<li><a class="current" href="#"><span class="badge">1</span>Tạo thương hiệu</a></li>
		<li><a href="#"><span class="badge">2</span>Tạo hạng thẻ</a></li>
		<li><a href="#"><span class="badge">3</span>Tạo địa chỉ shop</a></li>
		<li><a href="#"><span class="badge">4</span>Xác nhận</a></li>
	</ul>
@stop

@section('main-content')
	<div class="col-md-6 create-trademark-card">
		<p>Bước 1: Vui lòng cho chúng tôi biết thông tin về bạn và thương hiệu của bạn</p>
		<form action="" method="post" id="form-merchant">
			<div class="trademark-info">
				<div class="title-trademark"><h3>Thông tin thương hiệu</h3></div>
				<div class="form-group">
					<label for="" class="form-label-custome">Tên thương hiệu <span style="color:red;">*</span></label>
					<input class="form-control" type="text" id="trademark" name="trademark" placeholder="Tên thương hiệu" value="{{Input::old('trademark')}}">
				</div>
				<div class="form-group">
					<label for="" class="form-label-custome">Lĩnh vực <span style="color:red;">*</span></label>
					<select class="form-control" name="field" id="field">
						<option value="-1">-- Lĩnh vực --</option>
						@foreach($fields as $field)
							<option @if(Input::old('field') == $field->id) selected @endif  value="{{$field->id}}">{{$field->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="" class="form-label-custome">Background <span style="color:red;">*</span></label>
					<!-- <button class="btn" type="color" name="color">Chọn</button> -->
					<input class="form-control" type="color" id="color" name="color" placeholder="Màu background" value="{{Input::old('color')}}">
				</div>
				<div class="form-group">
					<div class="row" style="margin:0px;">
						<div class="col-md-6 label-logo" style="padding-left:0px;">
						<label for="" class="form-label-custome" >Logo (300px x 300px) <span style="color:red;">*</span></label>
						</div>
						<div class="col-md-6 contentImage">
							<div class="img-logo"  style="padding-top:45px;">+</div>
						</div>
						<input type="file" name="logo" value="{{Input::old('logo')}}" id="logo" class="upload-img"/>
					</div>
				</div>
			</div>
			
			<div class="user-info">
				<div class="title-user"><h3>Thông tin cá nhân</h3></div>
				<div class="form-group">
					<label for="" class="form-label-custome">Họ và tên <span style="color:red;">*</span></label>
					<input class="form-control" type="text" id="name" name="name" placeholder="Họ và Tên" value="{{Input::old('name')}}">
				</div>
				<div class="form-group">
					<label for="" class="form-label-custome">Vai trò <span style="color:red;">*</span></label>
					<input class="form-control" type="text" id="role" name="role" placeholder="Vai trò" value="{{Input::old('role')}}">
				</div>
				<div class="form-group">
					<label for="" class="form-label-custome">Ngày sinh <span style="color:red;">*</span></label>
					<input id="birthday" class="form-control" type="text" name="birthday" placeholder="Ngày sinh" value="{{Input::old('DateOfBirth')}}">
				</div>
				<div class="form-group">
					<label for="" class="form-label-custome">Địa chỉ <span style="color:red;">*</span></label>
					<input class="form-control" type="text"  id="address" name="address" placeholder="Địa chỉ" value="{{Input::old('address')}}">
				</div>
				<div class="form-group">
					<label for="" class="form-label-custome">Tỉnh/Thành <span style="color:red;">*</span></label>
					<select class="form-control" name="city" id="city">
						<option value="-1">-- Tỉnh/Thành --</option>
						@foreach($citys as $city)
							<option @if(Input::old('city') == $city->id) selected @endif value="{{$city->id}}">{{$city->name}}</option>
						@endforeach
					</select>	
				</div>
				<div class="form-group">
					<label for="" class="form-label-custome">Quận/Huyện <span style="color:red;">*</span></label>
					<select class="form-control" name="district" id="district">
						<option value="-1">-- Quận/Huyện --</option>
					</select>
				</div>
				<div class="form-group">
					<label for="" class="form-label-custome">Số điện thoại <span style="color:red;">*</span></label>
					<input class="form-control" type="text" id="phone" name="phone" placeholder="Số điện thoại" value="{{Input::old('phone')}}">
				</div>
				<div class="form-group">
					<label for="" class="form-label-custome">Email <span style="color:red;">*</span></label>
					<input class="form-control" type="email" id="email" name="email" placeholder="Email" value="{{Input::old('email')}}">
				</div>
				<!-- <div class="force-field">* các trường thông tin bắt buộc</div> -->
				<div class="button-save form-group">
					<button class="btn" type="submit" id="save" >Lưu</button>
					<button class="btn" type="submit" id="save_continue" >Lưu &amp; Tiếp tục</button>
				</div>
			</div>

			{{Form::token()}}
		</form>
	</div>

	<script>
	$('#city').on('change',function(e){
            var city_id= e.target.value;
            console.log(city_id);
            //ajax
             $.get('district?city_id='+city_id,function(data){

             	jQuery('#district').empty();

                if(city_id == -1)
                {
                    jQuery('#district').append('<option value="-1">-- Quận/Huyện --</option>');
                }
                else
                {
                    jQuery('#district').append('<option value="-1">-- Quận/Huyện --</option>');
                    jQuery.each(data, function(index, product){
                    jQuery('#district').append('<option value="'+product.id+'">'+product.name+'</option>');
                });
                }
               
             });
        });

		
	</script>

	<script>
        var link="{{URL::asset('')}}";

        $(document).ready(function () {

			 $.validator.addMethod("valueNotEquals", function(value, element, arg){
			  return arg != value;
			 }, "Value must not equal arg.");

			 $.validator.addMethod("uploadFile", function (val, element) {

		          var size = element.files[0].size;
		            console.log(size);

		           if (size > 1048576)// checks the file more than 1 MB
		           {
		               console.log("returning false");
		                return false;
		           } else {
		               console.log("returning true");
		               return true;
		           }

		      }, "File type error");

                $('#form-merchant').validate({
				  	rules: {
				  		trademark: "required",
				  		field: { valueNotEquals: "-1" },
					    name: "required",
					    logo: {
			              required: true,
			              extension:'jpg,jpe?g,png',
			              uploadFile:true,
			              },
			             color: "required",
					    role: "required",
					    birthday: "required",
					    address: "required",
					    city: { valueNotEquals: "-1" },
					    district: { valueNotEquals: "-1" },
					    phone: "required",
					    email: {
					      	required: true,
					      	email: true
					    }
				  	},
				  	messages: {
				  		trademark: "Vui lòng nhập tên thương hiệu",
				  		field: { valueNotEquals: "Vui lòng chọn lĩnh vực" },
				  		logo: {
					      	required: "Vui lòng chọn logo",
					      	extension: "Logo phải có định dạng jpg, jpeg, png",
					      	uploadFile: "Logo phải < 1MB"
					    },
					    color: "Vui lòng chọn màu background",
					    name: "Vui lòng điền họ tên đầy đủ",
					    role: "Vui lòng nhập vai trò",
					    birthday: "Vui lòng nhập ngày sinh",
					    address: "Vui lòng nhập địa chỉ",
					    city: { valueNotEquals: "Vui lòng chọn tỉnh/thành phố" },
					    district: { valueNotEquals: "Vui lòng chọn quận/huyện" },
					    phone: "Vui lòng điền số điện thoại liên lạc",
					    email: {
					      	required: "Vui lòng nhập email",
					      	email: "Email phải đúng định dạng name@domain.com"
					    }
				  	},
                    submitHandler: function (form) {

                        //token
                        $.ajaxSetup({
                           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                        });

                        var trademark=$('#trademark').val();
                        var field=$('#field').val();
                        var color=$('#color').val();
                        var logo = $('#logo').val();
                        var name = $('#name').val();
                     	var role = $('#role').val();
                     	var birthday = $('#birthday').val();
                     	var address = $('#address').val();
                     	var city = $('#city').val();
                     	var district = $('#district').val();
                     	var phone = $('#phone').val();
                     	var email = $('#email').val();


                        var token=jQuery('input [name=_token]').val();

                        jQuery.ajax({

                            url: link + 'merchant/create-trademark-card',
                            type: 'post',

                            data:{
                                    'trademark':trademark,
                                    'field':field,
                                    'color':color,
                                    'logo': logo, 
                                    'name': name,
                                    'role': role,
                                    'birthday': birthday,
                                    'address': address,
                                    'city': city,
                                    'district': district,
                                    'phone': phone,
                                    'email': email
                                 },
                            // dataType: "json",

                            success: function(data){
                               
                                if(data ==false)
                                {
                                    jQuery('#errorEmailorPassword').show();
                                }
                                else
                                {
                                    jQuery('#errorEmailorPassword').hide();

                                    var delay = 1000;
                                    setTimeout(function() {
                                        window.location = link;
                                    }, delay);
                                }
                               
                            },
                            error: function(){
                                console.log("Server Error");
                            }
                        })

                    }
                });

            });
            </script>

@stop