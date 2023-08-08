<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\AdCampaignController;
use App\Http\Controllers\AdViewController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\PollOptionController;
use App\Http\Controllers\PollVoteController;
use App\Http\Controllers\PostController;

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
Route::get('/',[HomeController::class,'index']);
Route::resource('users', UserController::class);
Route::resource('ads', AdController::class);
Route::resource('adcampaigns', AdCampaignController::class);
Route::resource('adviews', AdViewController::class);
Route::resource('media', MediaController::class);
Route::resource("polls", PollController::class);
Route::resource("posts",PostController::class);
Route::resource("votes",PollVoteController::class);
Route::resource("options",PollOptionController::class);




Route::get('/help', function () {
    return view('welcome');
});
