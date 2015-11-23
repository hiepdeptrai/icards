<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Đăng nhập trang quảng lý</title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('')}}css/bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::asset('')}}css/font-awesome.min.css" rel="stylesheet">
    <link href="{{URL::asset('')}}css/normalize.css" rel="stylesheet">
    <link href="{{URL::asset('')}}css/main.css" rel="stylesheet">
<!--     <link href="{{URL::asset('')}}css/style.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     
  </head>
  <body>
	<div class="container-login">
    	<div class="wrap-login">
    		<div class="account-info">đăng nhập tài khoản<button class="glyphicon glyphicon-remove"></button></div>
    		<div class="container-form">
    			<form  action="{{URL::asset('')}}merchant-login" method="POST">

                    <div class="form-group session text-center">
                        <label style= "color:red;">{{Session::get('global')}}</label>
                    </div>

				  	<div class="form-group">
					    <label for="email">Email</label>
					    <input name="user_name" type="text" class="form-control" id="email" placeholder="Email">
				  	    @if($errors->has('user_name'))
                            <p style= "color:red;">{{ $errors->first('user_name') }}</p>
                        @endif
                    </div>
				  	<div class="form-group">
					    <label for="password">Mật khẩu</label>
					    <input name="password" type="password" class="form-control" id="password" placeholder="Mật khẩu">
				  	    @if($errors->has('password'))
                            <p style= "color:red;">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
				  	<div class="checkbox">
					    <label>
					      	<input name="remember" type="checkbox"> Ghi nhớ lần đăng nhập sau
					    </label>
				  	</div>
				  	<div class="form-group text-center">
					    <button type="submit" class="btn btn-default">Đăng Nhập</button>
				  	</div>
				  	{{Form::token()}}
				</form>
    		</div>
			<div class="forgot-pass"><a href="#">Quên mật khẩu?</a></div>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('')}}js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('')}}js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-beta.2/angular.min.js"></script>
 
  </body>
</html>