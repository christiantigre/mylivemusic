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
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');
  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
  Route::get('/administracion', 'AdminAuth\AdminController@index')->name('home');
  Route::resource('/country', 'AdminAuth\\CountryController');
  Route::resource('/estate', 'AdminAuth\\EstateController');
  Route::get('/', 'AdminAuth\AdminController@index')->name('/');
  Route::resource('/genere', 'AdminAuth\\GenereController');
  Route::resource('/category', 'AdminAuth\\CategoryController');
  Route::resource('/placepresentation', 'AdminAuth\\PlacepresentationController');
  Route::get('/myprofile', 'AdminAuth\AdminController@profilesettings')->name('settings');
  Route::resource('/settings', 'AdminAuth\\AdminController');
  Route::get('/settingscred/{id}/edit_cred', 'AdminAuth\\AdminController@edit_cred');

    
  Route::post('/settingscred/{id}/upcredentials', 'AdminAuth\\AdminController@update_cred');
  Route::get('/paswordchange', 'AdminAuth\AdminController@paswordchange')->name('paswordchange');


  Route::resource('/multimedia', 'AdminAuth\\MultimediaController');
  Route::resource('/file', 'AdminAuth\\FileController');


  Route::resource('/typepack', 'AdminAuth\\TypepackController');
  Route::resource('/detallpack', 'AdminAuth\\DetallpackController');


  Route::resource('/manager', 'AdminAuth\\ManagerController');


Route::resource('/group', 'AdminAuth\\GroupController');
Route::resource('/socialgroup', 'AdminAuth\\SocialgroupController');//This route depend group
Route::resource('/member', 'AdminAuth\\MemberController');//This route depend group
Route::resource('/socialmember', 'AdminAuth\\SocialmemberController');//This route depend members
Route::resource('/summer', 'AdminAuth\\SummerController');//This route depend group
Route::resource('/typepresentation', 'AdminAuth\\TypepresentationController');//This route depend summers

});

Route::get('/categories/children', [
    'uses' => 'AdminAuth\\AdminController@children',
    'as' => 'categories.children'
  ]);

Route::group(['prefix' => 'manager'], function () {
  Route::get('/login', 'ManagerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'ManagerAuth\LoginController@login');
  Route::post('/logout', 'ManagerAuth\LoginController@logout')->name('logout');
  Route::get('/register', 'ManagerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'ManagerAuth\RegisterController@register');
  Route::post('/password/email', 'ManagerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'ManagerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'ManagerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'ManagerAuth\ResetPasswordController@showResetForm');
});
Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');
  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');
  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');