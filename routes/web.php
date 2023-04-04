<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
//Route that sends back a VIEW
Route::get('/',function()
{
        return view('user.home');
});

//Route to users - string
Route::get('/users', function()
        {
            return 'This is the Users Point of View';
        }

    );


    //Route::get('/users',function(){

        //return redirect('/');
    //});
    

//Route::get('/login', [HomeController::class,'login']);
//Route::get('register', [HomeController::class,'register']);

//Route::get('/home', [HomeController::class,'index']);

Route::get('/home', [HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/add_doctor_view', [AdminController::class,'addview']);

Route::post('upload_doctor', [AdminController::class,'upload']);

Route::get('/dashboard', [AdminController::class,'dashboard']);


Route::post('appointment', [HomeController::class,'appointment']);

 
Route::get('myappointment', [HomeController::class,'myappointment']);


Route::get('cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);

 
Route::get('showappointment', [AdminController::class,'showappointment']);


Route::get('approved/{id}', [AdminController::class,'approved']);

Route::get('cancelled/{id}', [AdminController::class,'cancelled']);

Route::get('showdoctor', [AdminController::class,'showdoctor']);

Route::get('deletedoctor/{id}', [AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}', [AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}', [AdminController::class,'editdoctor']);







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
