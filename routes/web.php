<?php

use App\Http\Controllers\DownloadFileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/downloadResume', [DownloadFileController::class, 'downloadFile']);
Route::get('/{pathMatch}', function(){
    return view('welcome');
})->where('pathMatch', ".*");
