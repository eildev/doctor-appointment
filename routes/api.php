<?php

use App\Http\Controllers\Backend\FooterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
//Custom Api
// Route::get('/doctor/api',['ApiController','DoctorApi']);
//Custom Api End


Route::controller(ApiController::class)->group(function () {
   // Route::get('/doctor/category/{dr_id}', 'GetCategoryInfo');
    // Route::get('/doctor/dr_info/{dr_id}', 'GetDoctorInfo');
       Route::get('/doctor/home-slider/{dr_id}', 'GetSliderInfo');
});

Route::prefix('api')->group(function () {
    // GET request to retrieve all footer data
    Route::get('/footer-data', [FooterController::class, 'getAllFooterData']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
