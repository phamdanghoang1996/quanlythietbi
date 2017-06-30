<!DOCTYPE html>
<html>
<head>
	<title>FORGET PASSWORD</title>
  @include('layouts.lib_CSS')
  @include('layouts.lib_JS')
  <script type="text/javascript">
    $(document).ready(function(){
      $('#email').keyup(function(){
        var email = $(this).val();
        var ajax_email_link = 'http://localhost:8000/hdWeb/public/forgetpassword/ajaxforgetpassword/'+email;
        $.get(ajax_email_link, function(data){
          $("#detail").html(data);
        });
      });
    });
  </script>
</head>
<body style="background: #F2F2F2;">

	<div class="col-md-4"></div>
	<div class="col-md-4" style="margin-top: 200px">
	<div class="panel-default" style="background: #121317; height: 250px; width: 400px;">
	<form action="{{route('postSendMail')}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="text-center">
						<p> ??...??  </p>
						<h3 style="color: #FFF; font-weight: bold; border-left: 6px solid #E04A32;">Forget password</h3>
				</div>
			<input type="email" class="form-control" placeholder="Email"
          style="background: #18191E; width: 80%; margin: 0 auto; margin-top:20px; font-size: 16px;"
          name="email" id="email" value="">
					<div id="detail" style="margin-top: 20px;" class="text-center">

					</div>
      <div class="text-center">
            <button class="btn-primary" style="margin-top: 10px; width: 300px; height: 50px; font-size: 18px; font-weight: bold"> TIẾP</button>
      </div>

	</form>
	</div>
	</div>
	<div class="col-md-4"></div>

</body>
</html>
