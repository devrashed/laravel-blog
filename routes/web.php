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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
   $this->post('login', 'Auth\LoginController@login');
   $this->post('logout', 'Auth\LoginController@logout')->name('logout');
     
   // Registration Routes...
   $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
   $this->post('register', 'Auth\RegisterController@register');
   // Password Reset Routes...
   $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
   $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
   $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
   $this->post('password/reset', 'Auth\ResetPasswordController@reset');
   
   Route::get('/changePassword','HomeController@showChangePasswordForm');
   Route::post('/changePassword','HomeController@changePassword')->name('changePassword');


   Route::get('/createaccount','HomeController@createaccount');

   Route::post('/insertuser','HomeController@newuser');


/*==== Admin === */

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','adminbashboard@index');

Route::get('/user','adminbashboard@registers');







Route::get('/home', function () {
  return view('layout.admin.home');
});

/*Route::get('/editarticle', function () {
  return view('layout.admin.edit_article');
});*/


Route::get('/articleview','Carticle@arview');

Route::get('/Editarticle/{id}','Carticle@articleEdit');
Route::post('Doupdate/{id}', 'Carticle@update');



Route::get('/newsouth', function () {
  return view('layout.admin.add_south_asia');
});
Route::post('/insertsouth', 'MediaController@Asiastore');

Route::get('/viewsouth', 'MediaController@southview');

Route::get('/del/{id}','MediaController@southDel');

Route::get('/sthedit/{id}', 'MediaController@southEdit');

Route::post('/Supdate/{id}', 'MediaController@sthupdate');




Route::get('/viewmiddle', 'MediaController@middleview');

Route::get('/newmiddle', function () {
  return view('layout.admin.add_middle_east');
});
Route::get('/del/{id}','MediaController@midelDel');

Route::post('/insertmiddle', 'MediaController@Middlestore');

Route::get('/Medit/{id}', 'MediaController@MiddleEdit');

Route::post('/Mupdate/{id}', 'MediaController@middleupdate');




Route::get('/newamerica', function () {
  return view('layout.admin.add_america');
});
Route::post('/insertAmerica', 'MediaController@Americastore');

Route::get('/viewamerica', 'MediaController@americaview');

Route::get('/del/{id}','MediaController@americaDel');

Route::get('/AmEdit/{id}', 'MediaController@AmericaEdit');

Route::post('/Amupdate/{id}', 'MediaController@Americaupdate');




Route::get('/neweurope', function () {
  return view('layout.admin.add_europe');
});

Route::post('/inserteurope', 'MediaController@Europestore');

Route::get('/vieweurope', 'MediaController@europeview');

Route::get('/del/{id}','MediaController@europeDel');

Route::get('/eurEdit/{id}', 'MediaController@EuropeEdit');

Route::post('/Europupdate/{id}', 'MediaController@Europeupdate');





Route::get('/newoceania', function () {
  return view('layout.admin.add_oceania');
});

Route::post('/insertOceania', 'MediaController@Oceaniastore');

Route::get('/viewoceania', 'MediaController@oceaniaview');

Route::get('/del/{id}','MediaController@oceaniaDel');

Route::get('/OcEdit/{id}', 'MediaController@OceEdit');

Route::post('/Ocupdate/{id}', 'MediaController@Ocupdate');




Route::get('/createphoto', function () {
  return view('layout.admin.add_photogallery');
});

Route::get('/viewphoto', function () {
  return view('layout.admin.viewphoto');
});

Route::post('/insertphoto', 'photocontroller@photostore');

Route::get('/viewphoto','photocontroller@photoview');

Route::get('/photoedit/{id}','photocontroller@photoEdit');

Route::get('/delete/{id}','photocontroller@photodel');

Route::post('editupdate/{id}', 'photocontroller@Doupdate');



Route::get('/createuser', function () {
  return view('layout.admin.createUser');
});

Route::get('/viewuser', function () {
  return view('layout.admin.viewUser');
});

Route::get('/changepassword', function () {
  return view('layout.admin.changePassword');
});

Route::get('/changePassword','BuildHomeController@showChangePasswordForm');

Route::post('/changePassword','BuildHomeController@changePassword')->name('changePassword');




/*===================     
      Fornt End
 =================*/

Route::get('/', function () { return view('welcome'); });


/*Route::get('/home', 'BuildHomeController@index')->name('home');

Route::get('/service', 'BuildHomeController@service')->name('service');

Route::get('/about', 'BuildHomeController@about')->name('about');
*/

Route::get('/service', function () { return view('service'); });

Route::get('/about', function () { return view('about'); });

Route::get('/founder', function () { return view('founder'); });

Route::get('/photogallery', function () { return view('photogallery'); });

Route::get('/donarjoin', function () { return view('donarjoin'); });

Route::get('/contact', function () { return view('contact'); });