<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\App\PesantrenController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagBeritaController;
use App\Models\Koperasi;
use App\Models\User;
use App\Models\UserKoperasi;
use Illuminate\Http\Request;

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
    return redirect()->route('login');
});

Route::get('/test', function () {
    return view('test');
});


Auth::routes(['register' => false]);
Route::get('logout', [LoginController::class,'logout']);
Route::middleware('admin')->group(function(){
    Route::get('/home', [HomeController::class,'index'])->name('home');

    Route::get('/getDataChart',[HomeController::class,'getDataChart']);

    Route::get('/jabatan',[JabatanController::class,'index'])->name('jabatan');
    Route::post('/jabatan/store',[JabatanController::class,'store']);
    Route::post('/jabatan/update/{id}',[JabatanController::class,'update']);
    Route::delete('/jabatan/delete/{id}',[JabatanController::class,'delete']);
    Route::get('/jabatan-list',[JabatanController::class,'getData']);

    Route::get('/divisi',[DivisiController::class,'index'])->name('divisi');
    Route::post('/divisi/store',[DivisiController::class,'store']);
    Route::post('/divisi/update/{id}',[DivisiController::class,'update']);
    Route::delete('/divisi/delete/{id}',[DivisiController::class,'delete']);
    Route::get('/divisi-list',[DivisiController::class,'getData']);

    Route::get('/role',[RoleController::class,'index'])->name('role');
    Route::post('/role/store',[RoleController::class,'store']);
    Route::delete('/role/delete/{id}',[RoleController::class,'delete']);
    Route::get('/permission-list',[RoleController::class,'getDataPermission']);
    
    Route::get('/user',[UserController::class,'index'])->name('users.index');
    Route::get('/user-list',[UserController::class,'getData']);
    Route::post('/user/store',[UserController::class,'store'])->name('users.store');
    Route::post('/user/update/{id}',[UserController::class,'update'])->name('users.update');
    Route::delete('/user/delete/{id}',[UserController::class,'delete']);
    
    Route::get('/activity',[ActivityController::class,'index'])->name('activity');
    Route::get('/activity-list',[ActivityController::class,'getDataActivity']);
    
});