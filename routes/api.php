<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AdCampaignController;
use App\Http\Controllers\API\AdController;
use App\Http\Controllers\API\AdViewController;
use App\Http\Controllers\API\BackEndDataController;
use App\Http\Controllers\API\BackEndServiceController;
use App\Http\Controllers\API\MediaController;
use App\Http\Controllers\API\PollController;
use App\Http\Controllers\API\PollOptionController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;
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

Route::apiResources([
    'adcampaigns' => AdCampaignController::class,
    'ads' => AdController::class,
    'adviews'=>AdViewController::class,
    'backend_data'=>BackEndDataController::class,
    'backendservices'=>BackEndServiceController::class,
    'medias'=>MediaController::class,
    'polls'=>PollController::class,
    'polloptions'=>PollOptionController::class,
    'posts'=>PostController::class,
    'users'=>UserController::class,
]);
