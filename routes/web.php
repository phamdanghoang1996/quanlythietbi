<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'page'], function(){
  Route::get('trangchinh','pageController@trangChinh');
});

Route::group(['prefix'=>'admin'], function(){
  //Route::get('login','pageController@getLogin');
  Route::post('contact','pageController@postLogin')->name('postLogin');
  Route::get('login/qrcode/{id}','pageController@testQrCode');
  Route::get('webCam','pageController@getWebCam');
});
// LOGIN & ĐẶT LẠI MẬT KHẨU:
    //Login:
Route::get('login', ['as'=>'getLogin','uses'=>'pageController@getLogin']);
Route::post('login','pageController@postLogin')->name('postLogin');
    //Forget password:
Route::get('forgetpassword','pageController@getForgetPassword');
Route::get('forgetpassword/ajaxforgetpassword/{email}','pageController@ajaxForgetPassword');
Route::post('forgetpassword/sendmail','pageController@postSendMail')->name('postSendMail');
Route::get('forgetpassword/sendmail/{link}','pageController@getResetPass');
Route::post('forgetpassword/resetsuccess','pageController@postResetSuccess')->name('postResetPass');

    //HOME ADMIN:
Route::group(['prefix'=>'baitap'], function(){
  Route::get('home', ['as'=>'getHome','uses'=>'pageController@getHome']);
  //THÊM THIẾT BỊ:
  Route::get('home/device','pageController@device');
  Route::get('home/device/qrcode','pageController@generetorQrCode');
  Route::post('home/device/postDevice','pageController@postDevice')->name('postDevice');
  //SỬA THIẾT BỊ:
  Route::get('home/fixdevice','pageController@fixDevice');
  Route::get('home/fixdevice/{id_employee}','pageController@ajaxInfEmployees');
  Route::post('home/fixDevice','pageController@postFixDevice')->name('postFixDevice');
  //CÀI ĐẶT:
      //Thay đổi mật khẩu:
  Route::get('home/changeacc','pageController@changeAcc');
  Route::post('home/changeacc','pageController@postChangeAcc')->name('postChangeAcc');
      //Xóa tài khoản nhân viên:
  Route::get('home/delemployees','pageController@delEmployees');
  Route::get('home/delemployees/dataLoad','pageController@dataLoad');
  Route::get('home/ajaxdeleemployees/{id}','pageController@ajaxdeleemployees');
  //THÔNG TIN MÁY:
  Route::get('home/statusinf','pageController@infdevices');
  Route::get('home/infdevices/status={id}','pageController@tableInfdevices');
  Route::get('home/reportDevices','pageController@reportDevices');
});
