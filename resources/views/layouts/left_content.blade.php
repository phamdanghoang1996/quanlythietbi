<script type="text/javascript">
    $(document).ready(function(){
      $('#add_device').click(function(){
        var value = "adddevice";
        var link = 'http://localhost:8000/hdWeb/public/baitap/home/device'
        $.get(link, function(data){
          $('#content').html(data);
        });
      });
      //----------------------------------------------
      $('#repair_device').click(function(){
        var value = "repairdevice";
        var link = 'http://localhost:8000/hdWeb/public/baitap/home/fixdevice';
        $.get(link, function(data){
          $('#content').html(data);
        });
      });
      //--------------------------------------------
      $('#inf_devices').click(function(){
        var value = "infdevices";
        var link = 'http://localhost:8000/hdWeb/public/baitap/home/statusinf';
        $.get(link, function(data){
          $('#content').html(data);
        });
      });
      $('#change_password').click(function(){
        var value = "changeacc";
        var link = 'http://localhost:8000/hdWeb/public/baitap/home/changeacc';
        $.get(link, function(data){
          $('#content').html(data);
        });
      });
      $('#addEmployees').click(function(){
        var value = "delemployees";
        var link = 'http://localhost:8000/hdWeb/public/baitap/home/delemployees';
        $.get(link, function(data){
          $('#content').html(data);
        });
      });
    });
</script>
<style media="screen">
  #left-content{
    height: 800px;
    background-color: #2E353F;
    padding: 20px;
    border-right: 6px solid #DE935F;
  }
  #left-content ul{
    margin-left: -40px;
  }
  #left-content ul ul {
    padding: 3px;
    transition: all 0.2s;
    position: absolute;
    opacity: 0;
    visibility: hidden;
    margin-left: 15px;
  }
  #left-content a {
    text-decoration: none;
    color: #C1C3C5;
  }
  #left-content ul li:hover>ul{
    opacity: 1;
    visibility: visible
  }
  #left-content ul li{
    font-size: 18px;
    color: #C1C3C5;
    font-weight: bold;
    list-style: none;
    padding: 3px;
  }

</style>
<div class="col-md-2" >
  <div class="menu" id="left-content">
        <h3 style="color:#C1C3C5; font-weight:bold">Admin</h3>
        <h5 style="color:#C1C3C5; font-weight:bold">Tên: <span style="color: #fff; font-weight: bold">{{$user_name}}</span> </h5>
        <p style="color:#C1C3C5; font-weight:bold">Truy cập vào lúc:
            <p style="color: #fff; font-weight: bold">{{$access_time}}</p>
        </p>
        <hr>
      <ul>
                <li><img src="{{asset('images/buttonMenu/addleft.png')}}" width="30px"><a href="#" id="add_device"> Thêm máy</a></li>
                <li><img src="{{asset('images/buttonMenu/fix.png')}}" width="30px"><a href="#" id="repair_device">Sửa</a></li>
                <li><img src="{{asset('images/buttonMenu/devices.png')}}" width="30px"><a href="#" id="inf_devices"> Máy</a></li>
                <li>
                    <img src="{{asset('images/buttonMenu/setting.png')}}" width="30px"> <a href="#"> Cài đặt</a>
                      <ul>
                            <li><a href="#" id="change_password" style="font-size: 15px;"> Thay đổi mật khẩu</a></li>
                            <li><a href="#" id="addEmployees" style="font-size: 15px;"> Xóa tài khoản nhân viên</a></li>
                      </ul>
                </li>
      </ul>
  </div>
</div>
