<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
  @include('layouts.lib_CSS')
</head>
<body style="background: #F2F2F2;">

	<div class="col-md-4"></div>
	<div class="col-md-4" style="margin-top: 200px">
	<div class="panel-default" style="background: #121317; height: 350px; width: 600px;">
	<form action="{{route('postLogin')}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="text-center">
						<p> ??...??  </p>
						<h3 style="color: #FFF; font-weight: bold; border-left: 6px solid #E04A32;">LOGIN</h3>
				</div>

			<input type="text" class="form-control" placeholder="Tài khoản" style="background: #18191E; width: 80%; margin: 0 auto; margin-top:20px; font-size: 16px;" name="name_user">
			<input type="password" class="form-control" placeholder="Mật khẩu" style="background: #18191E; width: 80%; margin: 0 auto; margin-top:20px; font-size: 16px;" name="password">
      <div class="text-center">
            <button class="btn-primary" style="margin-top: 10px; width: 300px; height: 50px; font-size: 18px; font-weight: bold"> ĐĂNG NHẬP</button>
      </div>
	</form>
      <div class="text-center">
            <a href="{{url('forgetpassword')}}">
              <button class="btn" style="margin-top: 10px; width: 300px; height: 50px; font-size: 16px; font-weight: bold">
                  Quên mật khẩu
              </button>
            </a>
      </div>

	</div>
	</div>
	<div class="col-md-4"></div>

</body>
</html>
