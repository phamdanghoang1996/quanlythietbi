<script type="text/javascript">
    $(document).ready(function(){
        var const_linkTable='http://localhost:8000/hdWeb/public/baitap/home/infdevices/status=error';
        $.get(const_linkTable,function(data){
          $("#infTable_devices").html(data);
        });
        var link_report = 'http://localhost:8000/hdWeb/public/baitap/home/reportDevices';
        $.get(link_report, function(data){
          $("#reportDevices").html(data);
        });
        $("#sl_status").change(function(){
          var vl_status = $(this).val();
          var loadLink = 'http://localhost:8000/hdWeb/public/baitap/home/infdevices/status='+vl_status;
          $.get(loadLink, function(data){
            $("#infTable_devices").html(data);
          });
        });
    });
</script>
<div class="col-md-6">
        <h3 style= "font-weight: bold;">THÔNG TIN TRẠNG THÁI: </h3>
      <div class="col-md-6">
              <span style="font-weight:bold;">Tên trạng thái: </span>
                    <select class="form-control" name="sl_status" id="sl_status" style="width: 100px">
                            @foreach($inf_status as $item)
                            <option value="{{$item->status}}">{{$item->status}}</option>
                            @endforeach
                    </select>
      </div>
      <div class="col-md-6">
        <span style="font-weight:bold;">Lọc: </span>
              <select class="form-control" style="width: 100px">
                  <option value="az">Tên A-Z</option>
                  <option value="za">Tên Z-A</option>
                  <option value="lauaz">Lầu A-Z</option>
                  <option value="lauza">Lầu Z-A</option>
              </select>
      </div>
      <div id="infTable_devices" style="margin-top:30px;">

      </div>
</div>
<div class="col-md-6" id="reportDevices">

</div>
