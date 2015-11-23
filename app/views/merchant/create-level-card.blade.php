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
	<div class="col-md-6 create-level-card">
		<p>Bước 2: Tại đây vui lòng thiết lập hình thức thẻ thành viên cho thương hiệu của bạn</p>
		<form action="#" id="form-level">
			<h3>Chọn loại thẻ &amp; hình thức của thẻ</h3>
			<div class="test">
				<ul>
				 	<li><span class="type-chops"></span><a href="#">Loại thẻ Stamples/Chops <i class="fa fa-info-circle"></i></a></li>
				 	<li>
					 	<span class="current1 type-levels"></span>
					 	<a href="#">Loại thẻ Levels <i class="fa fa-info-circle"></i></a>
					 	<ul><i>Vui lòng chọn 1 trong 3 hình thức đặt tên thẻ bên dưới</i>
					 		<li><span></span><a href="#">03 hạng thẻ: Vàng, Bạc, Thành viên</a></li>
					 		<li><span class="current1"></span><a href="#">03 hạng thẻ: VVIP, VIP, Newbie</a></li>
					 		<li><span></span><a href="#">02 hạng thẻ: VIP, Newbie</a></li>
					 	</ul>
				 	</li>
				 </ul>
			</div>
			<h3 style="border-bottom: 1px solid #8c8c8c; color: #f94876; font-size: 20px;">Giá trị điểm cần tích lũy &amp; Tỷ lệ điểm thưởng</h3>
			<div class="point-of-level">
				<table class="table">
					<tr>
						<td>Hạng thẻ <a href="#"><i class="fa fa-info-circle"></i></a></td>
						<td>Cần tích lũy <a href="#"><i class="fa fa-info-circle"></i></a></td>
						<td>% điểm thưởng <a href="#"><i class="fa fa-info-circle"></i></a></td>
						<td></td>
					</tr>
					<tr>
						<td class="name-level-card">VVIP</td>
						<td>
							<div class="form-group">
							    <div class="input-group" id="point">
							      	<input type="text" class="form-control" placeholder="1,000">
							      	<div class="input-group-addon">Điểm</div>
							    </div>
							</div>
						</td>
						<td>
							<div class="form-group">
							    <div class="input-group" id="rate-point">
							      	<input type="text" class="form-control" placeholder="15">
							      	<div class="input-group-addon">%</div>
							    </div>
							</div>
						</td>
						<td>
							<input class="btn btn-default" type="submit" value="Tạo">
						</td>
					</tr>
					<tr>
						<td class="name-level-card">VIP</td>
						<td>
							<div class="form-group">
							    <div class="input-group" id="point">
							      	<input type="text" class="form-control" placeholder="500">
							      	<div class="input-group-addon">Điểm</div>
							    </div>
							</div>
						</td>
						<td>
							<div class="form-group">
							    <div class="input-group" id="rate-point">
							      	<input type="text" class="form-control" placeholder="10">
							      	<div class="input-group-addon">%</div>
							    </div>
							</div>
						</td>
						<td>
							<input class="btn btn-default" type="submit" value="Tạo">
						</td>
					</tr>
					<tr>
						<td class="name-level-card">Newbie</td>
						<td>
							<div class="form-group">
							    <div class="input-group" id="point">
							      	<input type="text" class="form-control" placeholder="0">
							      	<div class="input-group-addon">Điểm</div>
							    </div>
							</div>
						</td>
						<td>
							<div class="form-group">
							    <div class="input-group" id="rate-point">
							      	<input type="text" class="form-control" placeholder="5">
							      	<div class="input-group-addon">%</div>
							    </div>
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
	<div class="col-md-6 demo-level-mobile">
		<h3>Demo trên ứng dụng thành viên</h3>
	</div>
@stop

