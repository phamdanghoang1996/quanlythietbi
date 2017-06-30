<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quét mã QR Code....</title>
    <link rel="stylesheet" href="{{asset('css/webCam.css')}}">
    <script>
</script>
  </head>
  <body>
    <h3>Demo quét mã </h3>
      <div class="booth">
          <video id="video" height="500px" width="500px">

          </video>
          <a href="#" id="capture" class="booth-capture-button">Chụp ảnh mã QR</a>
          <canvas id="canvas" width="500" height=500> </canvas>
      </div>
      <script type="text/javascript" src="{{asset('js/webCam.js')}}"> </script>
      <p id="id"></p>
  </body>
</html>
