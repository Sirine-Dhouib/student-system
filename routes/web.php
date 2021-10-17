<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes();

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

Route::name('home')->get('/')->uses('Controller@index');



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){
    return redirect('login');
});

Route::resource('classes', 'ClassesController');

Route::resource('levels', 'LevelsController');

Route::resource('courses', 'CoursesController');

Route::resource('admissions', 'AdmissionsController');

Route::resource('teachers', 'TeachersController');

Route::resource('roles', 'RolesController');

Route::resource('users', 'UsersController');