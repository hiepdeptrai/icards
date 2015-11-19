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
		<form action="" method="POST" id="form-merchant">
			<div class="trademark-info">
				<div class="title-trademark"><h3>Thông tin thương hiệu</h3></div>
				<div class="input-field">
					<input class="form-control" type="text" name="trademark" placeholder="Tên thương hiệu">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" name="fields" placeholder="Lĩnh vực">
				</div class="input-field">
				<div class="input-field">
					<div class="row">
						<div class="col-md-6 label-logo">Logo</div>
						<div class="col-md-6 contentImage">
							<div class="img-logo" name="logo">+</div>
						</div>
						<input type="file" class="upload-img" style="display:none;" />
					</div>
				</div>
			</div>
			
			<div class="user-info">
				<div class="title-user"><h3>Thông tin cá nhân</h3></div>
				<div class="input-field">
					<input class="form-control" type="text" name="name" placeholder="Họ và Tên">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" name="role" placeholder="Vai trò">
				</div>
				<div class="input-field">
					<input id="birthday" class="form-control" type="text" name="DateOfBirth" placeholder="Ngày sinh">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" name="address" placeholder="Địa chỉ">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" name="city" placeholder="Tỉnh/Thành">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" name="district" placeholder="Quận/Huyện">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" name="phone" placeholder="Số điện thoại">
				</div>
				<div class="input-field">
					<input class="form-control" type="email" name="email" placeholder="Email">
				</div>
				<!-- <div class="force-field">* các trường thông tin bắt buộc</div> -->
				<div class="button-save input-field">
					<button class="btn" type="submit" name="submit">Lưu</button>
					<button class="btn">Lưu &amp; Tiếp tục</button>
				</div>
			</div>
		</form>
	</div>
@stop