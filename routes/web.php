<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\upload;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::post('/upload',[upload::class,'upload_file']);
Route::get('/upload/ai',[upload::class,'update_value']);
Route::get('/process',function (){
    return view("wait_10");
});
Route::get('/process/{url_id}',[upload::class,'check_process']);
