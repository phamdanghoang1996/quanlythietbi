<!DOCTYPE html>
<html>
<head>
	<title>SET PASSWORD</title>
  @include('layouts.lib_CSS')
  @include('layouts.lib_JS')
  <script type="text/javascript">
    $(document).ready(function(){
    		$("#re_password").keyup(function(){
					var re_newPass = $(this).val();
					var newPass = $("#new_password").val();
					if(re_newPass==newPass){
						$("#detail").html("<p style='color: #FFF; font-weight: bold; font-size: 16px'> Khớp mật khẩu </p>");
					}
					else {
						$("#detail").html("<p style='color: #FFF; font-weight: bold; font-size: 16px'> Không khớp mật khẩu </p>");
					}
				});
    });
  </script>
</head>
<body style="background: #F2F2F2;">

	<div class="col-md-4"></div>
	<div class="col-md-4" style="margin-top: 200px">
	<div class="panel-default" style="background: #121317; height: 400px; width: 400px;">
	<form action="{{route('postResetPass')}}" method="post" id="form-pass">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="text-center">
						<p> ??...??  </p>
						<h3 style="color: #FFF; font-weight: bold; border-left: 6px solid #E04A32;">Reset Password</h3>
				</div>
			<input type="password" class="form-control" placeholder="Mật khẩu mới"
          style="background: #18191E; width: 80%; margin: 0 auto; margin-top:20px; font-size: 16px;"
          name="new_password" id="new_password" value="" required="required">

			<input type="password" class="form-control" placeholder="Nhập lại mật khẩu"
		          style="background: #18191E; width: 80%; margin: 0 auto; margin-top:20px; font-size: 16px;"
		          name="re_password" id="re_password" value="" required="required">
					<div id="detail" style="margin-top: 20px;" class="text-center">

					</div>

      <div class="text-center">
            <button class="btn-primary" style="margin-top: 10px; width: 300px; height: 50px; font-size: 18px; font-weight: bold"> TIẾP</button>
      </div>
				<input type="hidden" name="user_name" value="{{$user_name}}">
	</form>
	</div>
	</div>
	<div class="col-md-4"></div>
	<script type="text/javascript">
	  $("#form-pass").validate({
	    rules:{
	      new_password: "required",
	      re_password: {
	        required: true,
	        equalTo: '#new_password'
	      }
	    }
	  });
	</script>


</body>
</html>
