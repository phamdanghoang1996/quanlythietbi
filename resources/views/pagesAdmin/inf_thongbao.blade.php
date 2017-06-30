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
    <div class="panel-body">
      <div class="text-center">
        <h4 style="font-weight: bold; color: #FFF;">Đã thay đổi mật khẩu thành công</h4>
        <a href="{{url('login')}}">
          <button name="button" style="margin-top: 20px;" class="btn-success" style="font-weight: bold;">QUAY LẠI LOGIN</button>
        </a>
      </div>
    </div>
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
