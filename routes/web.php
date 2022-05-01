<?php

// use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Author\AuthorController;
use App\Http\Controllers\Author\Post1Controller;
use App\Http\Controllers\Author\Comment1Controller;
use App\Http\Controllers\Author\User1Controller;
use App\Http\Controllers\Author\BemorController;
use App\Http\Controllers\User\User2Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
// use App\Http\Controllers\UserController;
use App\Http\Livewire\CommentForm;
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
Route::post('/sendToTg', [HospitalController::class, 'sendToTg'])->name('contact.send');
Route::post('/sendToTg1', [HospitalController::class, 'sendToTg1'])->name('contact.send1');

Route::get('post/{post}',[HospitalController::class,'getTeacherIdPost'])->name('id');
Route::get('post',[HospitalController::class,'pp'])->name('idPp');
Route::post('comment/{post}',[HospitalController::class,'commentEdit'])->name('commentEdit1');
Route::get('/',[HospitalController::class,'index'])->name('index');
Route::get('/logProfile',[HomeController::class,'logProfile'])->name('log');
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');
    Route::get('/contact', [AdminController::class, 'contact'])->name('contactAdmin');
    Route::get('/konsultatsiya', [AdminController::class, 'konsultatsiya'])->name('konsultatsiyaAdmin');
    Route::get('/online/{user}', [AdminController::class,'detail'])->name('detaill');
    Route::get('/online', [AdminController::class,'online'])->name('online');
    Route::get('/profile', [AdminController::class,'profile'])->name('adminProfile');
    Route::post('/profile', [AdminController::class,'profilePost'])->name('adminProfilePost');
    Route::resources([
        'post'=>PostController::class,
        'comment'=>CommentController::class,
        'user'=>UserController::class,
    ]);

});
Auth::routes();

Route::prefix('author')->group(function (){
    Route::get('/dashboard', [AuthorController::class, 'index'])->name('author');
    Route::get('/contact', [AuthorController::class, 'contact'])->name('contactAuthor');
    Route::get('/konsultatsiya', [AuthorController::class, 'konsultatsiya'])->name('konsultatsiyaAuthor');
    Route::get('/profile', [AuthorController::class,'profile'])->name('authorProfile');
    Route::post('/profile', [AuthorController::class,'profilePost'])->name('authorProfilePost');
    Route::post('/import', [\App\Http\Controllers\CsvFile::class,'csv_import'])->name('import');
    Route::get('/bemor/{id}/export', [\App\Http\Controllers\CsvFile::class,'csv_export'])->name('export');
    Route::get('/bemor/{id}/detail', [AuthorController::class, 'detail'])->name('detail');

    Route::resources([
        'post1'=>Post1Controller::class,
        'comment1'=>Comment1Controller::class,
        'user1'=>User1Controller::class,
        'bemor'=>BemorController::class,
    ]);

});

    Route::prefix('user')->group(function (){
        Route::get('/kasallikVaraqa', [User2Controller::class,'tarix'])->name('userVaraqa');
        Route::get('/kasallikVaraqa/{id}', [User2Controller::class,'tarixId'])->name('userVaraqaId');
        Route::post('/kasallikVaraqa',[User2Controller::class,'swap'])->name('swap');
        Route::post('/kasallikVaraqa1',[User2Controller::class,'swapfalse'])->name('swapfalse');
        Route::get('/profile', [User2Controller::class,'profile'])->name('userProfile');
        Route::post('/profile', [User2Controller::class,'profilePost'])->name('userProfilePost');
    });
