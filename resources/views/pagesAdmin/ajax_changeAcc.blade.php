<script type="text/javascript">
  $(document).ready(function(){
    $("#re_newPass").keyup(function(){
      var newPass=$('#newPass').val();
      var re_newPass =$(this).val();
      var html_Matching = "<p style='color: green; font-size: 16px; font-weight:bold;'> Khớp mật khẩu </p>";
      var html_NotMatching = "<p style='color: red; font-size: 16px; font-weight:bold;'> Không khớp mật khẩu </p>";
      if(re_newPass==newPass){
        $("#reportPass").html(html_Matching);
      }
      else {
        $("#reportPass").html(html_NotMatching);
      }
    });
  });
</script>
<h3 style="font-weight:bold;">THAY ĐỔI MẬT KHẨU: </h3>
  <form action="{{route('postChangeAcc')}}" method="post" id="form-pass">
  <div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="">Nhập mật khẩu cũ: </label>
    <input type="password" name="oldPass" value="" class="form-control" id="oldPass" required="required">
    <label for="">Nhập mật khẩu mới: </label>
    <input type="password" name="newPass" value="" class="form-control" id="newPass" required="required">
    <label for="">Nhập lại mật khẩu: </label>
    <input type="password" name="re_newPass" value="" class="form-control" id="re_newPass" required="required">
    <div id="reportPass"></div>
    <button type="submit" class="btn btn-primary" class="form-control" style="margin-top: 10px;">Thay đổi</button>
  </div>
</form>
<script type="text/javascript">
  $("#form-pass").validate({
    rules:{
      oldPass: "required",
      newPass: "required",
      re_newPass: {
        required: true,
        equalTo: '#newPass'
      }
    }
  });
</script>
