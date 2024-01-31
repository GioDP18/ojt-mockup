<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DownloadFileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::get('/downloadResume', [DownloadFileController::class, 'downloadFile']);
    Route::post('/verify-token', function (Request $request) {
        $token = $request->input('token');
    
        try {
            $decodedToken = Auth::decode($token);

            dd($decodedToken);
    
            return response()->json(['valid' => true]);
        } catch (\Exception $e) {
            Log::error('Token verification failed:', ['exception' => $e->getMessage()]);
    
            return response()->json(['valid' => false]);
        }
    });
});
Route::post('/login', [AuthController::class, 'login']);