<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\Pusat\MasjidController;
use App\Http\Controllers\Frontend\Masjid\UstadzController;
use App\Http\Controllers\Frontend\Masjid\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::get('user', [UserController::class, 'getAuthenticatedUser'])->middleware('jwt.verify');

Route::prefix('pusat')->middleware(['jwt.verify', 'role:pusat'])->group(function () {
    Route::resource('masjid', MasjidController::class);
});

Route::prefix('masjid')->middleware(['jwt.verify', 'role:masjid'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('ustadz', UstadzController::class);
});
