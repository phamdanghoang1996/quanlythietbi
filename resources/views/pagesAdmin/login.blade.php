<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body style="background: #F2F2F2;">
<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="margin-top: 200px">
	<div class="panel-default" style="background: #121317; height: 300px;">
	<form action="" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="text-center">
						<p> ??...??  </p>
						<h3 style="color: #FFF; font-weight: bold; border-left: 6px solid #E04A32;">ĐĂNG NHẬP</h3>
				</div>

			<input type="text" class="form-control" placeholder="Tài khoản" style="background: #18191E; width: 80%; margin: 0 auto; margin-top:20px" name="username">
			<input type="password" class="form-control" placeholder="Mật khẩu" style="background: #18191E; width: 80%; margin: 0 auto; margin-top:20px" name="password">
			<button type="submit" style="background: #E04A32; font-weight: bold; color:#FFF; margin-top: 20px; margin-left: 100px" class="btn">ĐĂNG NHẬP</button>
	</form>
	</div>
	</div>
	<div class="col-md-4"></div>
</div>
</body>
</html>
