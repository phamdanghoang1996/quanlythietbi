@include('layouts.lib_JS')
<script type="text/javascript">
  $(document).ready(function(){
      var name_device  = $('#ajax_nameDevices').val();
      var name_os = $('#ajax_nameOs').val();
      var name_chip = $('#ajax_nameChip').val();
      var room_department = $('#ajax_room').val();
      var photo_code = $('#ajax_photo').val();
      var id_code = $("#ajax_id").val();
      var photo_code_link = 'http://localhost:8000/hdWeb/'+photo_code;
      var html_code_link = "<img src="+"'"+photo_code_link+"'"+ " />";
      $("#name_device").val(name_device);
      $("#name_os").val(name_os);
      $('#name_chip').val(name_chip);
      $('#department').val(room_department);
      $('#photo_code').html(html_code_link);
      $('#id_code').val(id_code);

  });
</script>
@foreach($inf_employees as $key)
    <input type="hidden" value="{{$key->name}}" id='ajax_nameDevices'>
    <input type="hidden" value="{{$key->os_name}}" id='ajax_nameOs'>
    <input type="hidden" value="{{$key->chip_name}}" id='ajax_nameChip'>
    <input type='hidden' value="{{$key->birth_day}}" id='ajax_birthDay'>
    <input type="hidden" value="{{$key->photo}}" id="ajax_photo">
    <input type="hidden" value="{{$key->id_code}}" id="ajax_id">
@endforeach
@foreach($inf_department as $item)
    <input type="hidden" value="{{$item->room_department}}" id='ajax_room'>
@endforeach
