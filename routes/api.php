<?php

use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/qmsBCMBQhrWSKr/videos', [VideoController::class, 'store'])->name('store');
Route::post('/HCbZtQTmoUERpR/videos/{video}', [VideoController::class, 'update'])->name('update');
Route::get('/zDQMiteerzEtSc/videos', [VideoController::class, 'index'])->name('index');
