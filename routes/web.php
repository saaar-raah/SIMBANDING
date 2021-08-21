<?php
use App\Http\Controllers\testController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\berkasController;
use App\Http\Controllers\AlurController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\PasswordController;
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

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');
Route::get('/pengumuman', function () {
    return view('pengumuman');
});
Route::get('/FAQ', function () {
    return view('FAQ');
});
Route::get('/alur', function() {
  return view('alur');
});
Route::get('/berkas', function(){
  return view('berkas');
});
Route::get('/kontak', function(){
  return view('kontak');
});
Route::resource('pengumumanAdmin', pengumumanController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/profile', function () {
        return view('admin.profile');
    });
    Route::resource('profile', ProfileController::class);
    Route::resource('FAQAdmin', FAQController::class);
    Route::resource('berkasAdmin', berkasController::class);
    Route::resource('alurAdmin', AlurController::class);
    Route::resource('pesanAdmin', PesanController::class);
    Route::resource('passwordAdmin', PasswordController::class);
});
require __DIR__.'/auth.php';
