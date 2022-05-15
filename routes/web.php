<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Dashboard\Da;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
// Route::get('/', function () {
//     return view('livewire.site.index');
// });
Route::get('/index', function () {
       return view('livewire.site.index');
     });
Route::get('/about', function () {
return view('livewire.site.about');
})->name('about');
// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });
Route::get('/p', function () {
    return view('livewire.welcome');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/charts', [DashboardController::class, 'create'])->name('charts');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::post('/checkPin',[UserController::class,'checkPin'])->name('checkPin');
Route::get('/showProfile/{id}',[ProfileController::class,'showProfile'])->name('showProfile');
//Route::get('/overview',[ProfileController::class,'overview'])->name('overview');

Route::get('/profiles',[ProfileController::class,'showProfiles'])->name('showProfiles');
Route::get('/createProfile',[ProfileController::class,'createProfile'])->name('createProfile');
Route::post('/addProfile',[ProfileController::class,'addProfile'])->name('addProfile');
Route::get('/editProfile/{id}',[ProfileController::class,'editProfile'])->name('editProfile');
Route::post('/updateProfile/{id}',[ProfileController::class,'updateProfile']);
Route::post('/uploadPhoto/{id}',[ProfileController::class,'uploadPhoto']);
Route::post('/deletePhoto/{id}',[ProfileController::class,'deletePhoto']);

//Route::post('/addAccounts',[AccountController::class,'addAccounts'])->name('addAccounts');
Route::get('upload/image', [UserController::class,'ImageUpload'])->name('ImageUpload');
Route::post('upload/image/store/{id}', [UserController::class,'ImageUploadStore']);


