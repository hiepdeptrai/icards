@extends('layouts.index-merchant')

@section('content')
    <div class="container container-login">
    	<div class="wrap-login">
    		<div class="account-info">đăng nhập tài khoản<button class="glyphicon glyphicon-remove"></button></div>
    		<div class="container-form">
    			<form>
				  	<div class="form-group">
					    <label for="exampleInputEmail1">Tên đăng nhập</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên đăng nhập">
				  	</div>
				  	<div class="form-group">
					    <label for="exampleInputPassword1">Mật khẩu</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
				  	</div>
				  	<div class="checkbox">
					    <label>
					      	<input type="checkbox"> Ghi nhớ lần đăng nhập sau
					    </label>
				  	</div>
				  	<div class="form-group text-center">
					    <button type="submit" class="btn btn-default">Đăng Nhập</button>
				  	</div>
				  	
				</form>
    		</div>
			<div class="forgot-pass"><a href="#">Quên mật khẩu?</a></div>
    	</div>
    </div>
@stop