<?php
use App\Http\Controllers\testController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlurController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\landingpageController;
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
});
Route::get('/pengumuman', function () {
    return view('pengumuman');
});
Route::get('/FAQ', function () {
    return view('FAQ');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/profile', function () {
        return view('admin.profile');
    });
    Route::resource('profile', ProfileController::class);
    Route::resource('FAQAdmin', FAQController::class);
    Route::resource('pengumumanAdmin', pengumumanController::class);
    Route::resource('alurAdmin', AlurController::class);
    Route::resource('pesanAdmin', PesanController::class);
});
require __DIR__.'/auth.php';