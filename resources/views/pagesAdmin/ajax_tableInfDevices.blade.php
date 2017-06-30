<style>
  .table tbody tr td{
    text-align: center;
  }
  .table thead tr th{
    text-align: center;
  }
</style>
        <table class="table table-bordered" style="margin-top: 30px;">
                <thead>
                  <tr>
                    <th>Tên thiết bị</th>
                    <th>Tên phòng</th>
                    <th>Trạng thái</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($inf_table as $itemtb)
                  <tr>
                      <td>{{$itemtb->name}}</td>
                      <td>xasxasxsax</td>
                      <td>{{$itemtb->status}}</td>
                  </tr>
                    @endforeach
                </tbody>
          </table>
