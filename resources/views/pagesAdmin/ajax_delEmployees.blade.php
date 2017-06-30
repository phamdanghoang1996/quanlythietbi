<script type="text/javascript" src="{{asset('js/angular.min.js')}}"> </script>
<script src="{{asset('js/filter.js')}}"></script>
<script>
function showDetails(animal) {
    var id= animal.getAttribute("data-id-type");
    var link_dele= 'http://localhost:8000/hdWeb/public/baitap/home/ajaxdeleemployees/'+id;
    $.get(link_dele);
}
</script>
<style>
  table{
    width: 90%;
    margin-top: 30px;
  }
  th{
    text-align: center;
  }
  td{
    text-align: center;
    padding: 5px;
  }
</style>
<div class="container" ng-app="myModule" ng-controller="myController" >
  <h3 style="font-weight: bold">TÀI KHOẢN NHÂN VIÊN:  </h3>
  <label for="">Tìm nhân viên: </label>
    <input type="text" ng-model="SeachText" class="form-control" style="width: 400px">
  <table class="tabe-bordered table-hover" border="1px solid red">
            <thead>
                    <th>TÊN NHÂN VIÊN</th>
                    <th>SINH NGÀY</th>
                    <th>PHÒNG BAN</th>
                    <th>CHỨC NĂNG</th>
            </thead>
            <tbody>
                  <tr ng-repeat="item in employees| orderBy: sortColumn:reverse | filter: SeachText">
                      <td><% item.name %></td>
                      <td><% item.birth_day %></td>
                      <td><% item.room_department %></td>
                      <td><button onclick="showDetails(this)" data-id-type="<% item.id %>" class="btn btn-danger">Xóa</li></td>
                  </tr>

            </tbody>
  </table>
</div>
