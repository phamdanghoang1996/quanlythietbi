<?php
    $PNG_TEMP_DIR = '../public/phpqrcode/temp/';
    $PNG_WEB_DIR = 'temp/';
    include '../public/phpqrcode/qrlib.php';
    $local_File = "images/img_qrCode/$ins_qrCode.png";
    $value= "public/images/img_qrCode/$ins_qrCode.png";
    $src_qrCode = "http://localhost:8000/hdWeb/public/images/img_qrCode/$ins_qrCode.png";
    QRcode::png($ins_qrCode, $local_File);
    echo "<img src='$src_qrCode' />";
    echo "<input type='hidden' name='qrcode' value='$value'>";
    echo "<input type='hidden' name='inf_codes' value='$ins_qrCode'>";
