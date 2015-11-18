@extends('layouts.merchant-master')
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
		<div class="col-md-6 create-card">
			<p>bước 1: vui lòng cho chúng tôi biết thông tin về bạn và thương hiệu của bạn</p>
			<div class="trademark-info">
				<div class="title-trademark"><h3>Thông tin thương hiệu</h3></div>
				<div class="input-field">
					<input class="form-control" type="text" placeholder="Tên thương hiệu" size="30" required>
				</div>
				<div class="input-field">
					<input class="form-control" type="text" placeholder="Lĩnh vực" size="30">
				</div class="input-field">
				<div class="input-field">
					<div class="row">
						<div class="col-md-6 label-logo">Logo</div>
						<div class="col-md-6 img-logo">+</div>
						<input type="file" class="upload-img" />
					</div>
				</div>
			</div>
			
			<div class="user-info">
				<div class="title-user"><h3>Thông tin cá nhân</h3></div>
				<div class="input-field">
					<input class="form-control" type="text" placeholder="Họ và Tên" size="30">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" placeholder="Vai trò" size="30">
				</div>
				<div class="input-field birthday">
					Ngày sinh<br>
					<select class="form-control day">
					  	<option value="01">01</option>
					  	<option value="02">02</option>
					  	<option value="03">03</option>
					  	<option value="04">04</option>
					  	<option value="05">05</option>
					  	<option value="06">06</option>
					  	<option value="07">07</option>
					  	<option value="08">08</option>
					  	<option value="09">09</option>
					  	<option value="10">10</option>
					  	<option value="11">11</option>
					  	<option value="12">12</option>
					  	<option value="13">13</option>
					  	<option value="14">14</option>
					  	<option value="15">15</option>
					  	<option value="16">16</option>
					  	<option value="17">17</option>
					  	<option value="18">18</option>
					  	<option value="19">19</option>
					  	<option value="20">20</option>
					  	<option value="21">21</option>
					  	<option value="22">22</option>
					  	<option value="23">23</option>
					  	<option value="24">24</option>
					  	<option value="25">25</option>
					  	<option value="26">26</option>
					  	<option value="27">27</option>
					  	<option value="28">28</option>
					  	<option value="29">29</option>
					  	<option value="30">30</option>
					  	<option value="31">31</option>
					</select>
					<select class="form-control month">
						<option value="01">Tháng 01</option>
						<option value="02">Tháng 02</option>
						<option value="03">Tháng 03</option>
						<option value="04">Tháng 04</option>
						<option value="05">Tháng 05</option>
						<option value="06">Tháng 06</option>
						<option value="07">Tháng 07</option>
						<option value="08">Tháng 08</option>
						<option value="09">Tháng 09</option>
						<option value="10">Tháng 10</option>
						<option value="11">Tháng 11</option>
						<option value="12">Tháng 12</option>
					</select>
					<select class="form-control year">
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
					</select>
				</div>
				<div class="input-field">
					<input class="form-control" type="text" placeholder="Địa chỉ" size="30">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" placeholder="Tỉnh/Thành" size="30">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" placeholder="Quận/Huyện" size="30">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" placeholder="Số điện thoại" size="30">
				</div>
				<div class="input-field">
					<input class="form-control" type="text" placeholder="Email" size="30">
				</div>
				<div class="force-field">* các trường thông tin bắt buộc</div>
				<div class="button-save input-field">
					<button class="btn">Lưu</button>
					<button class="btn">Lưu &amp; Tiếp tục</button>
				</div>
			</div>
		</div>
	@stop