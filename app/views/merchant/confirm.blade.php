@extends('layouts.merchant-master')

@section('title')
	Confirm
@stop

@section('header-bot-content')
	<h1>khởi tạo thẻ</h1>
	<ul class="menu-bar-card">
		<li><a class="current" href="#"><span class="badge">1</span>Tạo thương hiệu</a></li>
		<li><a class="current" href="#"><span class="badge">2</span>Tạo hạng thẻ</a></li>
		<li><a class="current" href="#"><span class="badge">3</span>Tạo địa chỉ shop</a></li>
		<li><a class="current" href="#"><span class="badge">4</span>Xác nhận</a></li>
	</ul>
@stop

@section('main-content')
	<div id="confirm">
		<form action="#" id="form-confirm">
			<p class="step">Bước 4: Chúng tôi đang xử lý yêu cầu của bạn. Vui lòng kiểm tra lại thông tin liên hệ một lần nữa</p>
			<h3>Bạn đang đăng ký gói dịch vụ <span style="text-transform:uppercase">miễn phí</span></h3>
			<p>Chương trình của bạn đang được xét duyệt</p>
			<p>Chúng tôi sẽ trả lời bạn sớm nhất có thể. Vui lòng gọi cho chúng tôi tại <span style="color: #f94876">+84.4.6297.9933</span> để có thêm thông tin</p>
		</form>
	</div>
@stop