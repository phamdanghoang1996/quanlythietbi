<form class="" action="{{route('dangnhap')}}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="text" name="dangnhap" value="">
  <button type="submit" name="button">Submit</button>
</form>
