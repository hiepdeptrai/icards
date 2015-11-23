<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="_token" content="{{ csrf_token() }}"/>
	<title>@yield('title')</title>
	
	<!-- Bootstrap -->
    <link href="{{URL::asset('')}}css/bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::asset('')}}css/font-awesome.min.css" rel="stylesheet">
    <link href="{{URL::asset('')}}css/normalize.css" rel="stylesheet">
    <link href="{{URL::asset('')}}css/main.css" rel="stylesheet">
    <link href="{{URL::asset('')}}css/style.css" rel="stylesheet">
    <link href="{{URL::asset('')}}js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{URL::asset('')}}js/jquery-ui-themes/themes/smoothness/jquery-ui.min.css" rel="stylesheet">

    <!-- <link href="{{URL::asset('')}}css/jquery.Jcrop.min.css" rel="stylesheet"> -->
	<!-- <link href="{{URL::asset('')}}css/bootstrap-datetimepicker.min.css" rel="stylesheet"> -->
    
    <!-- js, jquery -->
    <script src="{{URL::asset('')}}js/jquery.min.js"></script>
    <script src="{{URL::asset('')}}js/bootstrap.min.js"></script>
    <script src="{{URL::asset('')}}js/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{URL::asset('')}}js/jquery-validate/dist/jquery.validate.min.js"></script>
    <!-- <script src="{{URL::asset('')}}js/moment.min.js"></script>
    <script src="{{URL::asset('')}}js/bootstrap-datetimepicker.min.js"></script> 
    <script src="{{URL::asset('')}}js/jquery.Jcrop.min.js"></script> -->
    <script src="{{URL::asset('')}}js/script.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 left-section">
				<div class="logo">
					<img src="{{URL::asset('')}}images/logo.png" alt="logo" class="img-circle">
					<h1>welcome!boss!</h1>
					<p>how are you today? <a href="#"><i class="fa fa-envelope-o"></i></a> </p>
				</div>
				<div class="menu-left-bar">
					<ul>
						<li><a href="#"><i class="fa fa-cog"></i> Khởi tạo thẻ</a></li>
						<li><a href="#"><i class="fa fa-paper-plane-o"></i> Gửi tin nhắn</a></li>
						<li><a href="#"><i class="fa fa-tag"></i> Tạo ưu đãi</a></li>
						<li><a href="#"><i class="fa fa-star"></i> Quản trị phản hồi</a></li>
						<li><a href="#"><i class="fa fa-users"></i> Quản trị member</a></li>
						<li><a href="#"><i class="fa fa-area-chart"></i> Thống kê</a></li>
					</ul>
				</div>
				<div class="footer-bar">
					<image src = "{{URL::asset('')}}images/logo.png" title="logo" width="20%;" class="img-circle"> 
					<p style="color:#fff;">Copyright 2015 iCards. All rights reserved!</p>
				</div>
			</div>
			<div class="col-md-9 right-section">
				<div class="row header">
					<div class="header-top">
						<div class="col-md-8 header-top-left-card">
							<div>1,389 thành viên</div>
							<div>11,111 tin nhắn</div>
							<div>89 ưu đãi</div>
						</div>
						<div class="col-md-4 header-top-right-card">
							<a href="#">gói miễn phí<i class="fa fa-cloud-upload"></i></a>
							<a href="#">log-out<i class="fa fa-sign-out"></i></a>
						</div>
						
					</div>
					<div class="header-bot">
						@yield('header-bot-content')
					</div>
				</div>
				<div class="row content">
					<div class="row main-content">
						@yield('main-content')
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>