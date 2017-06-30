<script type="text/javascript">
  $(document).ready(function(){
    $("#btn_qrcode").click(function(){
      var link_gene_qrCode ="http://localhost:8000/hdWeb/public/baitap/home/device/qrcode";
      $.get(link_gene_qrCode, function(data){
        $("#imgQRCode").html(data);
      });
    });
  });
</script>
<div class="container">
  <h3 style="font-weight: bold">THÊM THIẾT BỊ: </h3>
  <form action="{{route('postDevice')}}" method="post" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group" width="50%">
      <label for="">QR Code:</label>
      <button type="button" id="btn_qrcode" class="btn-success" style="font-weight: bold;">Khởi tạo code</button>
      <div id="imgQRCode">

      </div>
    </div>
    <div class="form-group" width="50%">
      <label for="">Tên thiết bị:</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group" width="50%">
      <label for="">Tên Hệ điều hành:</label>
      <input type="text" name="os_name" class="form-control">
    </div>
    <div class="form-group" width="50%">
      <label for="">Bộ xử lý: </label>
      <input type="text" name="chip_name" class="form-control">
    </div>
    <div class="form-group" width="50%">
      <label for="">Tên nhân viên:</label>
      <input type="text" name="employees_name" class="form-control">
    </div>
    <div class="form-group" width="50%">
      <label for="">Sinh ngày: </label>
      <input type="date" name="birthday" class="form-control">
    </div>
    <div class="form-group" width="50%">
      <label for="">Thuộc bộ phận: </label>
      <select class="form-control" value="department"  name="department">
        @foreach($inf_device as $key)
            <option value="{{$key->id_department}}">{{$key->room_department}}</option>
        @endforeach
      </select>
    </div>
        <button type="submit" name="button" class="btn btn-primary">THÊM THIẾT BỊ</button>
  </form>
</div>
