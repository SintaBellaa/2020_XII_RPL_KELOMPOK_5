<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Route::get('/logout', function () {
    return view('welcome');
});

Route::get('/qwerty' , function (){
	return view('layouts.master-student');
});


Auth::routes();

Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');
Route::get('/account/waiting-verification', 'Auth\AccountController@waitingVerification');
Route::post('/account/resend-verification', 'Auth\AccountController@resendVerification');

Route::get('/account/forgot-password', 'Auth\AccountController@forgotPassword')->name('forgot.password');
Route::post('/account/forgot-password', 'Auth\AccountController@sendEmailForgotPassword')->name('forgot.password');
Route::get('/account/{resetVerificationToken}/forgot-password', 'Auth\AccountController@verifyForgotToken');
Route::post('/account/reset-password', 'Auth\AccountController@updatePassword')->name('password-reset');

// ini untuk admin
Route::group(['middleware' => ['role:admin']], function () {

		Route::get('admin/dashboard','AdminController@index');
		
		//ini untuk fitur pelanggaran
		Route::get('admin/list-offense','OffenseController@ListOffense');
		Route::get('admin/add-offense','OffenseController@AddOffense');
		Route::post('admin/add-offense','OffenseController@saveAddOffense');
		Route::post('admin/list-offense' , 'OffenseController@EditListOffense');
		
		
		//ini untuk fitur kategori
		Route::get('admin/list-category' , 'CategoryController@index');
		Route::get('admin/add-category','CategoryController@AddCategory');
		Route::post('admin/StoreCategory' , 'CategoryController@StoreCategory');

		Route::post('admin/list-category' , 'CategoryController@EditListCategory');
		Route::get('/admin/list-category/delete' , 'CategoryController@DeleteCategory');


		
		//ini untuk fitur kelola siswa
		Route::get('admin/list-student','DataStudentController@ListStudent');
		Route::get('admin/add-student','DataStudentController@AddStudent');
		Route::post('admin/add-student','DataStudentController@SaveAddStudent');

		Route::post('admin/list-student','DataStudentController@EditStudent');
		Route::get('/admin/student/delete' , 'DataStudentController@DeleteStudent');
		
	});

// ini untuk student
Route::group(['middleware' => ['role:student']], function () {
		Route::get('/student/dashboard','StudentController@index');
		Route::get('/student/list-student','StudentController@list');
	});



//Route untuk register teacher dan staff

Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::get('/register-teacher', 'Auth\RegisterController@registerTeacher');
Route::get('/register-staff', 'Auth\RegisterController@registerStaff');


Route::get('/home', function () {
    return view('layouts.master');
});