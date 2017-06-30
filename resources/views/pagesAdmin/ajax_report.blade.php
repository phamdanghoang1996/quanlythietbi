<style media="screen">
#scroll {
    overflow: scroll;
    height: 600px;
}
hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}
</style>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#btn-send").click(function(){
      //Xử lý ajax ở đây
    });
  })
</script>
<h3 style="font-weight: bold;">Thông báo về trạng thái:</h3>
<div class="col-md-12" id="scroll">

  <div class="row">
          <div class="col-md-5">
                  <img src="{{asset('images/avatar_employees/nv1.png')}}" class="img-responsive">
                  <p>Name: <span style="font-weight: bold;">Pham Dang Hoang</span></p>
                  <p>Gửi lúc: <span style="font-weight: bold;">11h PM</span></p>
          </div>
          <div class="col-md-7">
                  <h5 style="font-weight: bold;">Nội dung: </h5>
                  <p>Máy em bị hỏng anh ơi! Anh lên giúp em với!</p>
          </div>
          <div class="col-md-12">
              <div class="text-center">
                     <button type="button" class="btn-success" data-toggle="modal" data-target="#myModal">Trả lời</button>
                     <button type="button" class="btn-danger">Xóa</button>
              </div>
          </div>
  </div>
    <hr>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
              <p>Đến: <span></span></p>
              <textarea cols="10" rows="10" class="form-control"> </textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-success" data-dismiss="modal" id="btn-send">Trả lời</button>
          </div>
        </div>

      </div>
    </div>

</div>
