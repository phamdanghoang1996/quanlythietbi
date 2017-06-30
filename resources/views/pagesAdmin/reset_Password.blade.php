@if(isset($email))
    <p>Chúng tôi đã gửi một lời yêu cầu mật khẩu đến: </p>
    <p><span style="font-weight: bold;">{{$email}}</span></p>
    <p>Vui lòng kiểm tra email của bạn để đặt lại mật khẩu </p>
    ------------------------------------------------------------
    <p>Lưu ý: Link đặt lại mật khẩu chỉ có hiệu lực trong 10 phút</p>
@else
    <p>Không tìm thấy Email này trong hệ thống</p>
@endif
