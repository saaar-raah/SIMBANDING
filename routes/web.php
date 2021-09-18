<?php
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\berkasController;
use App\Http\Controllers\AlurController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\fileberkasController;
use App\Http\Controllers\periodeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', function () {
//     return view('landingpage');
// })->name('landingpage');
// Route::get('/pengumuman', function () {
//     return view('pengumuman');
// });
// Route::get('/FAQ', function () {
//     return view('FAQ');
// });
// Route::get('/alur', function() {
//   return view('alur');
// });
// Route::get('/berkas', function(){
//   return view('berkas');
// });
// Route::get('/kontak', function(){
//   return view('kontak');
// });
Route::get('/', 'DashboardController@home');
Route::get('/pengumuman', 'DashboardController@pengumuman');
Route::get('/alur', 'DashboardController@alur');
Route::get('/berkas', 'DashboardController@berkas');
Route::get('/FAQ', 'DashboardController@faq');


Route::resource('pengumumanAdmin', 'pengumumanController');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@admin')
    ->name('dashboard');
    Route::get('/profile', function () {
        return view('admin.profile');
    });
    Route::resource('profile', 'ProfileController');
    Route::resource('FAQAdmin', 'FAQController');
    Route::resource('berkasAdmin', 'berkasController');
    Route::resource('alurAdmin', 'AlurController');
    Route::resource('pesanAdmin', 'PesanController');
    Route::resource('passwordAdmin', 'PasswordController');
    Route::resource('fileberkasAdmin', 'fileberkasController');
    Route::resource('periodeAdmin', 'periodeController');
});
