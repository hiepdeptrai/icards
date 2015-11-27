@extends('layouts.merchant-master')

@section('header-bot-content')
	<h1>khởi tạo thẻ</h1>
	<ul class="menu-bar-card">
		<li><a class="current" href="#"><span class="badge">1</span>Tạo thương hiệu</a></li>
		<li><a class="current" href="#"><span class="badge">2</span>Tạo hạng thẻ</a></li>
		<li><a href="#"><span class="badge">3</span>Tạo địa chỉ shop</a></li>
		<li><a href="#"><span class="badge">4</span>Xác nhận</a></li>
	</ul>
@stop

@section('main-content')
	<div id="level">
		<div class="col-md-6 create-level-card">
			<form action="#" id="form-level">
				<p class="step">Bước 2: Tại đây vui lòng thiết lập hình thức thẻ thành viên cho thương hiệu của bạn</p>
				<h3>Chọn loại thẻ &amp; hình thức của thẻ</h3>
				<p>Vui lòng chọn 1 trong 2 loại thẻ bên dưới:</p>
				<div class="test">
					<ul class="select-type">
					 	<li class="type-chops"><span></span><a href="#">Loại thẻ Stamples/Chops <a href="#"><i class="fa fa-info-circle"></i></a></a></li>
					 	<li class="type-levels">
						 	<span class="current1"></span>
						 	<a href="#">Loại thẻ Levels <a href="#"><i class="fa fa-info-circle"></i></a></a>
						 	<ul><i>Vui lòng chọn 1 trong 3 hình thức đặt tên thẻ bên dưới</i>
						 		<li id="type-level-1"><span class="current1"></span><a href="#">03 hạng thẻ: Vàng, Bạc, Thành viên</a></li>
						 		<li id="type-level-2"><span></span><a href="#">03 hạng thẻ: VVIP, VIP, Newbie</a></li>
						 		<li id="type-level-3"><span></span><a href="#">02 hạng thẻ: VIP, Newbie</a></li>
						 	</ul>
					 	</li>
					</ul>
				</div>
				<h3 style="border-bottom: 1px solid #8c8c8c; color: #f94876; font-size: 20px;">Giá trị điểm cần tích lũy &amp; Tỷ lệ điểm thưởng</h3>
				<div class="point-of-level">
					<table class="table level-1">
						<tr>
							<td>Hạng thẻ <a href="#"><a href="#"><i class="fa fa-info-circle"></i></a></a></td>
							<td>Cần tích lũy <a href="#"><a href="#"><i class="fa fa-info-circle"></i></a></a></td>
							<td>% điểm thưởng <a href="#"><a href="#"><i class="fa fa-info-circle"></i></a></a></td>
							<td></td>
						</tr>
						<tr>
							<td class="name-level-card">Vàng</td>
							<td>
							    <div class="level-point">
							      	<input type="text" placeholder="1,000">
							      	<div>Điểm</div>
							    </div>
							</td>
							<td>
							    <div class="level-rate">
							      	<input type="text" placeholder="15">
							      	<div>%</div>
							    </div>
							</td>
							<td>
								<input class="btn" type="submit" value="Tạo">
							</td>
						</tr>
						<tr>
							<td class="name-level-card">Bạc</td>
							<td>
							    <div class="level-point">
							      	<input type="text" placeholder="500">
							      	<div>Điểm</div>
							    </div>
							</td>
							<td>
							    <div class="level-rate">
							      	<input type="text" placeholder="10">
							      	<div>%</div>
							    </div>
							</td>
							<td>
								<input class="btn" type="submit" value="Tạo">
							</td>
						</tr>
						<tr>
							<td class="name-level-card">Thành viên</td>
							<td>
							    <div class="level-point">
							      	<input type="text" placeholder="0">
							      	<div>Điểm</div>
							    </div>
							</td>
							<td>
							    <div class="level-rate">
							      	<input type="text" placeholder="5">
							      	<div>%</div>
							    </div>
							</td>
							<td>
								<a href="#"><i class="fa fa-pencil fa-lg"></i></a><a href="#"><i class="fa fa-trash fa-lg"></i></a>
							</td>
						</tr>
					</table>

					<table class="table level-2">
						<tr>
							<td>Hạng thẻ <a href="#"><a href="#"><i class="fa fa-info-circle"></i></a></a></td>
							<td>Cần tích lũy <a href="#"><a href="#"><i class="fa fa-info-circle"></i></a></a></td>
							<td>% điểm thưởng <a href="#"><a href="#"><i class="fa fa-info-circle"></i></a></a></td>
							<td></td>
						</tr>
						<tr>
							<td class="name-level-card">VVIP</td>
							<td>
							    <div class="level-point">
							      	<input type="text" placeholder="1,000">
							      	<div>Điểm</div>
							    </div>
							</td>
							<td>
							    <div class="level-rate">
							      	<input type="text" placeholder="15">
							      	<div>%</div>
							    </div>
							</td>
							<td>
								<input class="btn" type="submit" value="Tạo">
							</td>
						</tr>
						<tr>
							<td class="name-level-card">VIP</td>
							<td>
							    <div class="level-point">
							      	<input type="text" placeholder="500">
							      	<div>Điểm</div>
							    </div>
							</td>
							<td>
							    <div class="level-rate">
							      	<input type="text" placeholder="10">
							      	<div>%</div>
							    </div>
							</td>
							<td>
								<input class="btn" type="submit" value="Tạo">
							</td>
						</tr>
						<tr>
							<td class="name-level-card">Newbie</td>
							<td>
							    <div class="level-point">
							      	<input type="text" placeholder="0">
							      	<div>Điểm</div>
							    </div>
							</td>
							<td>
							    <div class="level-rate">
							      	<input type="text" placeholder="5">
							      	<div>%</div>
							    </div>
							</td>
							<td>
								<a href="#"><i class="fa fa-pencil fa-lg"></i></a><a href="#"><i class="fa fa-trash fa-lg"></i></a>
							</td>
						</tr>
					</table>

					<table class="table level-3">
						<tr>
							<td>Hạng thẻ <a href="#"><a href="#"><i class="fa fa-info-circle"></i></a></a></td>
							<td>Cần tích lũy <a href="#"><a href="#"><i class="fa fa-info-circle"></i></a></a></td>
							<td>% điểm thưởng <a href="#"><a href="#"><i class="fa fa-info-circle"></i></a></a></td>
							<td></td>
						</tr>
						<!-- <tr>
							<td class="name-level-card">VVIP</td>
							<td>
							    <div class="level-point">
							      	<input type="text" placeholder="1,000">
							      	<div>Điểm</div>
							    </div>
							</td>
							<td>
							    <div class="level-rate">
							      	<input type="text" placeholder="15">
							      	<div>%</div>
							    </div>
							</td>
							<td>
								<input class="btn" type="submit" value="Tạo">
							</td>
						</tr> -->
						<tr>
							<td class="name-level-card">VIP</td>
							<td>
							    <div class="level-point">
							      	<input type="text" placeholder="500">
							      	<div>Điểm</div>
							    </div>
							</td>
							<td>
							    <div class="level-rate">
							      	<input type="text" placeholder="10">
							      	<div>%</div>
							    </div>
							</td>
							<td>
								<input class="btn" type="submit" value="Tạo">
							</td>
						</tr>
						<tr>
							<td class="name-level-card">Newbie</td>
							<td>
							    <div class="level-point">
							      	<input type="text" placeholder="0">
							      	<div>Điểm</div>
							    </div>
							</td>
							<td>
							    <div class="level-rate">
							      	<input type="text" placeholder="5">
							      	<div>%</div>
							    </div>
							</td>
							<td>
								<a href="#"><i class="fa fa-pencil fa-lg"></i></a><a href="#"><i class="fa fa-trash fa-lg"></i></a>
							</td>
						</tr>
					</table>

					<p>* 1 điểm = 1,000 đ</p>
				</div>
				<div class="button-save">
					<button class="btn" type="submit" name="submit">Lưu</button>
					<button class="btn">Lưu &amp; Tiếp tục</button>
				</div>
			</form>
		</div>
		<div class="col-md-6 demo-level-mobile text-center">
			<h3 class="text-left">Demo trên ứng dụng thành viên</h3>
			<div class="demo-mobile-content">
				<div class="demo-mobile-head">
					<a href="#" class="glyphicon glyphicon-chevron-left"></a>Đăng ký thành viên
					<div class="demo-icon-trademark"><img src="{{URL::asset('')}}/images/icon-cgv.png" alt="icon-trademark"></div>
				</div>
				<div class="demo-mobile-main-content">
					<p style="color:#f94876; font-weight:bold;">Đăng ký thành viên mới "New" và nhận ngay:</p>
					<p style="text-align:center; font-size: 24px; font-weight:bold">5%</p>
					<p style="text-align:center; margin-left: 15px; margin-right: 15px;">Giảm giá cho lần tiêu dùng tiếp theo tại cửa hàng</p>
					<p style="color:#f94876; font-weight:bold;">Chương trình thẻ thành viên:</p>
					Hạng thẻ: <span id="demo-level-vvip">Vàng</span><span id="demo-level-vip">Bạc</span><span id="demo-level-newbie">Đồng</span>
					<p style="margin-top: 10px;">Điểm tích lũy: <span style="margin-left: 10px;">15%</span><span style="margin-left:20px;">10%</span><span style="margin-left:20px;">5%</span></p>
					<p style="color:#f94876; font-weight:bold">Xem chi tiết chương trình tại đây <a href="#" style="color: #f94876;"><a href="#"><i class="fa fa-info-circle"></i></a></a></p>
					<button type="button" class="btn">Đăng ký</button>
				</div>
			</div>
		</div>
	</div>

	<div id="chops">
		<div class="col-md-6">
			<form action="POST" id="form-chops">
				<div class="step">Bước 2: Tại đây vui lòng thiết lập hình thức thẻ thành viên cho thương hiệu của bạn</div>
				<div class="formal-card">
					<p class="title-formal-card">Chọn loại thẻ &amp; hình thức của thẻ</p>
					<p>Vui lòng chọn 1 trong 2 loại thẻ bên dưới:</p>
					<ul class="type-card select-type">
						<li><span class="current1"></span>Loại thẻ Stamples/Chops <a href="#"><i class="fa fa-info-circle"></i></a></li>
						<li><span></span>Loại thẻ Levels <a href="#"><i class="fa fa-info-circle"></i></a></li>
					</ul>
				</div>
				<div class="quantum-chops">
					<p class="title-quantum-chops">Chọn số lượng chops và tỷ lệ tặng thưởng</p>
					<table class="table">
						<tr>
							<td>Số lượng chops <a href="#"><i class="fa fa-info-circle"></i></a></td>
							<td>Giá trị thanh toán <a href="#"><i class="fa fa-info-circle"></i></a></td>
							<td>% giảm giá cho lần mua tiếp <a href="#"><i class="fa fa-info-circle"></i></a></td>
							<td></td>
						</tr>
						<tr class="chop-input-value">
							<td>
								<div class="chop-number">
									<input type="number" min="1" max="15">
									<span></span>
								</div>
							</td>
							<td>
								<div class="chop-value-pay">
									<input type="number">
									<span>đ</span>
								</div>
							</td>
							<td>
								<div class="chop-rate">
									<input type="number">
									<span>%</span>
								</div>
							</td>
							<td><button class="btn chop-create-card-button">Tạo</button></td>
						</tr>
					</table>
				</div>
				<div class="chop-save-button">
					<button class="btn">Lưu</button>
					<button class="btn">Lưu và tiếp tục</button>
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<p class="demo-title-chops-card">Demo trên ứng dụng của thành viên</p>
			<div class="demo-chops-card">
				<div class="demo-front-chops-card">
					<img src="{{URL::asset('')}}/images/logo.png" alt="logo" class="img-circle">
					<i class="fa fa-user fa-5x"></i>
					<p>member name</p>
				</div>
				<div class="demo-back-chops-card">
					<div class="tick-star-1">
						<span class="tick-1"></span>
						<span class="tick-2"></span>
						<span class="tick-3"></span>
						<span class="tick-4"></span>
						<span class="tick-5"></span>
					</div>

					<div class="tick-star-2">
						<span class="tick-6"></span>
						<span class="tick-7"></span>
						<span class="tick-8"></span>
						<span class="tick-9"></span>
						<span class="tick-10"></span>
					</div>

					<div class="tick-star-3">
						<span class="tick-11"></span>
						<span class="tick-12"></span>
						<span class="tick-13"></span>
						<span class="tick-14"></span>
						<span class="tick-15"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

