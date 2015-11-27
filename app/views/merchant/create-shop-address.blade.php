@extends('layouts.merchant-master')

@section('title')
	Shop Address
@stop

@section('header-bot-content')
	<h1>khởi tạo thẻ</h1>
	<ul class="menu-bar-card">
		<li><a class="current" href="#"><span class="badge">1</span>Tạo thương hiệu</a></li>
		<li><a class="current" href="#"><span class="badge">2</span>Tạo hạng thẻ</a></li>
		<li><a class="current" href="#"><span class="badge">3</span>Tạo địa chỉ shop</a></li>
		<li><a href="#"><span class="badge">4</span>Xác nhận</a></li>
	</ul>
@stop

@section('main-content')
	<div id="shop-address">
		<form action="#" id="form-shop-address" method="POST">
			<p class="step">Tạo địa chỉ cửa hàng và tài khoản đăng nhập của mỗi cửa hàng. Bạn có thể thay đổi nó về sau</p>
			<h3>Tạo mới địa chỉ Store/Merchant</h3>
			<p>Vui lòng chọn nhập thông tin địa chỉ cửa hàng:</p>
			<div class="create-shop-address">
				<table class="table">
					<tr>
						<td style="text-align: left; width: 30%">Tên cửa hàng <a href="#"><i class="fa fa-info-circle"></i></a></td>
						<td style="text-align: left">Địa chỉ <a href="#"><i class="fa fa-info-circle"></i></a></td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div class="title-store">
								<input type="text">
							</div>
						</td>
						<td>
							<div class="address-store">
								<input type="text">
							</div>
						</td>
						<td><button class="btn" id="button-create-store-address">Tạo</button></td>
					</tr>
				</table>
			</div>
			<h3>Tạo tài khoản đăng nhập của Shop</h3>
			<div class="create-shop-account">
				<table class="table">
					<tr>
						<td style="text-align:left">Tài khoản Shop <a href="#"><i class="fa fa-info-circle"></i></a></td>
						<td style="text-align:left">Tên đăng nhập <a href="#"><i class="fa fa-info-circle"></i></a></td>
						<td style="text-align:left">Mật khẩu <a href="#"><i class="fa fa-info-circle"></i></a></td>
						<td></td>
					</tr>
				</table>
			</div>
			<div class="button-save">
				<button class="btn" type="submit" name="submit">Lưu</button>
				<button class="btn">Lưu &amp; Tiếp tục</button>
			</div>
		</form>
	</div>
@stop