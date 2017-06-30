<script type="text/javascript">
  $(document).ready(function(){
    $("#name_employees").change(function(){
      var id_employee = $(this).val();
      var link = 'http://localhost:8000/hdWeb/public/baitap/home/fixdevice/'+id_employee;
      $.get(link, function(data){
        $('#loadData').html(data);
      });
    });
  });
</script>
<div id="loadData">
<script type="text/javascript">

</script>
</div>
<div class="container">
  <h3 style="font-weight: bold">SỬA THIẾT BỊ:  </h3>
  <form action="{{route('postFixDevice')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id_code" value="" id="id_code">
    <div class="form-group" width="50%">
      <div class="form-group" width="50%">
        <label for="">Tên nhân viên:</label>
        <select class="form-control" name="id_employees" id="name_employees">
          @foreach($inf_employees as $key)
          <option value="{{$key->id}}">{{$key->name}}</option>
          @endforeach
        </select>
      </div>
      <!--
      <label for="">QR Code: </label>
      <p><button type="button" name="button" class="btn btn-success">Khởi tạo</button></p>
      <div id="photo_code">


      </div>
    -->

    </div>
    <div class="form-group" width="50%">
      <label for="">Tên thiết bị:</label>
      <input type="text" name="device_name" class="form-control" value="" id='name_device'>
    </div>
    <div class="form-group" width="50%">
      <label for="">Tên Hệ điều hành:</label>
      <input type="text" name="os_name" class="form-control" value="" id='name_os'>
    </div>
    <div class="form-group" width="50%">
      <label for="">Bộ xử lý: </label>
      <input type="text" name="chip_name" class="form-control" value="" id='name_chip'>
    </div>
    <button type="submit" name="button" class="btn btn-primary">Sửa thiết bị</button>
  </form>
</div>
