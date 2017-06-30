<?php
namespace App\Http\Controllers;
use QrReader;
use DB, Mail;
use App\codes;
use App\devices;
use App\employees;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests;
use Carbon\Carbon;


class pageController extends Controller
{
    public function trangChinh(){
      return view('pages.trangchinh');
    }
    public function getDangnhap(){
      return view('pages.demo');
    }
    public function postDangnhap(Request $r){
      echo $r->dangnhap;
    }
    public function postLogin1(Request $request){
    //Sent file success
    $file = $request->file('qrcode');
      if($request->hasFile('qrcode'))
        {
                if($file->getClientOriginalExtension('qrcode')=='JPG'||$file->getClientOriginalExtension('qrcode')=='jpg'||
                   $file->getClientOriginalExtension('qrcode')=='PNG'||$file->getClientOriginalExtension('qrcode')=='png')
                {
                      $name_file = $file->getClientOriginalName('qrcode');
                      $file->move('images/img_test',$name_file);
                      $path_qrcode = 'images/img_test/'.$name_file;
                      require __DIR__ . "/QRcode/vendor/autoload.php";
                      $qrcode = new QrReader($path_qrcode);
                      $text = $qrcode->text();
                      echo $text;
                      echo "<br>";
                      if(empty($text))
                            {
                              $error = "Không thể đọc QR code này!";
                              echo $error;
                              //return view('pagesAdmin.test_demo',['error'=>$error]);
                            }
                      else
                            {
                              $db_qrCode = DB::table('codes')->where('infomation','=',$text)->get();
                              var_dump($db_qrCode->items);
                                if(empty($db_qrCode))
                                      {
                                          echo "Đoạn này sẽ xử lý thêm dữu liệu ở đây!";
                                      }
                                else
                                      {
                                        $error = "Đã tồn tại trong cơ sở dữ liệu";
                                        echo $error;
                                        //return view('pagesAdmin.test_demo',['error'=>$error]);
                                      }
                            }
                }
                else
                {
                      $error = "Vui lòng kiểm tra lại! Bạn chưa nhập file";
                      return view('pagesAdmin.test_demo',['error'=>$error]);
                }

        }


      //No sent file.
      else {
        echo "Không có file nào được gửi cả!";
      }

    }
    public function getWebCam(){
      return view('pagesAdmin.webCam');
    }
    // LOGIN:
    public function getLogin(){
      return view('pagesAdmin.login_bt');
    }
    public function getHome(Request $request){
      $access_time = Carbon::now();
      $user_name = $request->user_name;
      return view('pagesAdmin.Home',['user_name'=>$user_name,'access_time'=>$access_time]);
    }

    public function postLogin(Request $request){
      $count_user = DB::table('users')->where([
                                                ['user_name','=',$request->name_user],
                                                ['password','=',$request->password],
                                            ])->count();
      $inf_user = DB::table('users')->where([
                                                ['user_name','=',$request->name_user],
                                                ['password','=',$request->password],
                                            ])->get();
      foreach ($inf_user as $key) {
          $user_name=$key->user_name;
      }
      if($count_user==0){
        return redirect()->route('getLogin');
      }
      else {
        return redirect()->route('getHome',['user_name'=>$user_name]);
      }
    }
    // FOTGET PASSWORD:
    public function getForgetPassword(){
      return view('pagesAdmin.forget');
    }
    public function ajaxForgetPassword($email){
      $count_em = DB::table('users')->select('email')->where('email',$email)->count();
      if($count_em==0){
        $inf_email = "Không khớp Email";
        return view('pagesAdmin.ajax_forgetpass',['inf_email'=>$inf_email]);
      }
      else {
        $inf_email = "Khớp Email";
        return view('pagesAdmin.ajax_forgetpass',['inf_email'=>$inf_email]);
      }
    }
    public function postSendMail(Request $request){

        $count = DB::table('users')->where('email',$request->email)->count();
        if($count==0){
          return view('pagesAdmin.reset_Password');
        }
        else{
              $db_EmailTo = DB::table('users')->where('email',$request->email)->get();
              $emailTo = array();
              foreach($db_EmailTo as $item){
                    $emailTo[0] = $item->email;
                    //$link se gui:
                    $link_send = "http://localhost:8000/hdWeb/public/forgetpassword/sendmail/".md5("$item->user_name");
                    $emailTo[1] = $link_send;
              }
              Mail::send('pagesAdmin.inf_mail',['emailTo'=>$emailTo], function($message) use ($emailTo){
                  $message->from('hoangphamdang.1996@gmail.com','Admin HdWeb');
                  $message->to($emailTo[0],$emailTo[1])->subject("Yêu cầu Reset mật khẩu từ HDWeb");
              });
              return view('pagesAdmin.reset_Password',['email'=>$emailTo[0]]);
        }

    }
    public function getResetPass($link){
        $pass = DB::table('users')->select("user_name")->get();
        foreach($pass as $item){
          if (md5($item->user_name)==$link){
                $infomation = "Được đặt lại mật khẩu";
                $user_name = $item->user_name;
                return view('pagesAdmin.setpassword',['infomation'=>$infomation,'user_name'=>$user_name]);
                break;
          }
        }
      }
      public function postResetSuccess(Request $request){
        DB::table('users')->where('user_name',$request->user_name)->update(['password'=>$request->re_password]);
        return view('pagesAdmin.inf_thongbao');
      }
    //left-content: Thêm thiết bị
    public function device(){
      $inf_device = DB::table('department')->get();
      return view('pagesAdmin.ajax_devices',['inf_device'=>$inf_device]);
    }
    public function postDevice(Request $request){
      //add data to table "Codes"
      $code = new codes();
      $code->id = $request->inf_codes;
      $code->photo = $request->qrcode;
      $code->infomation = $request->inf_codes;
      $code->save();
      //add data to table "Devices"
      $devices = new devices();
      $devices->name=$request->name;
      $devices->os_name=$request->os_name;
      $devices->chip_name=$request->chip_name;
      $devices->status = "";
      $devices->id_code=$request->inf_codes;
      $devices->save();
      //add data to table "Employees"
      $employees = new employees();
      $employees->name= $request->employees_name;
      $employees->birth_day=$request->birthday;
      $employees->id_code=$request->inf_codes;
      $employees->id_department=$request->department;
      $employees->save();
      return redirect()->route('getHome');
    }
    public function ajaxInfEmployees($id_employee){
      $inf_employees = DB::table('codes')->join('employees','employees.id_code','=','codes.id')
      ->join('devices','devices.id_code','=','codes.id')->where('codes.id','=',$id_employee)->get();
      $inf_department = DB::table('employees')->join('department','employees.id_department','=','department.id_department')
      ->where('id','=',$id_employee)->get();
      return view('pagesAdmin.ajax_InfEmployees',['inf_employees'=>$inf_employees,'inf_department'=>$inf_department]);
    }
    public function generetorQrCode(){
      $max_qrCode = DB::table('codes')->max('id');
      $ins_qrCode = $max_qrCode + 1;
      return view('layouts.generator',['ins_qrCode'=>$ins_qrCode]);
    }
    //left-content: SỬA THIẾT BỊ
    public function fixDevice(){
      $inf_employees = DB::table('employees')->get();
      $inf_department = DB::table('department')->get();
      return view('pagesAdmin.ajax_fixDevice',['inf_employees'=>$inf_employees,'inf_department'=>$inf_department]);
    }
    public function postFixDevice(Request $request){
      //Update to table "Devices":
      DB::table('devices')->where('id_code','=',$request->id_code)->update([
          'name'=>$request->device_name,
          'os_name'=>$request->os_name,
          'chip_name'=>$request->chip_name,
          'status'=>'Pham Dang Hoang',
          'id_code'=>$request->id_code
      ]);
      return redirect()->route('getHome');
    }
    //left-content: Setting:
        //Thay doi mat khau:
    public function changeAcc(){
      return view('pagesAdmin.ajax_changeAcc');
    }
    public function postChangeAcc(Request $request){
      echo $request->oldPass;
      echo $request->re_newPass;
      echo $request->newPass;
    }
      //Xoa tai khoan nhan vien
    public function delEmployees(){
      return view('pagesAdmin.ajax_delEmployees');
    }
    public function dataLoad(){
      $data = DB::table('employees')->join('department','employees.id_department','department.id_department')->get();
      echo json_encode($data);
    }
    public function ajaxdeleemployees($id){
      $dete_Emoloyees = DB::table('employees')->where('id',$id)->delete();
    }
    //left-content: MÁY:
    public function tableInfdevices($status){
      $inf_table = DB::table('codes')->join('devices','codes.id','=','devices.id_code')
      ->join('employees','codes.id','employees.id_code')->where('status',$status)->get();
      return view('pagesAdmin.ajax_tableInfDevices',['inf_table'=>$inf_table]);
    }
    public function infdevices(){
      $inf_status = DB::table('devices')->select('status')->groupBy('status')->get();
      return view('pagesAdmin.ajax_infDevice',['inf_status'=>$inf_status]);
    }
    public function reportDevices(){
      return view('pagesAdmin.ajax_report');
    }
}
