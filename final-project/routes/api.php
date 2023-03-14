<?php

use App\Http\Controllers\BlockController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DislikeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserActivityController;
use App\Http\Controllers\UserController;
use App\Models\Like;

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

//Laravel 9

//Route::get('/logins',[LoginController::class,'index']);
//Route::post('/login',[LoginController::class,'store']);
//Route::put('/login/{id}',[LoginController::class,'update']);
//Route::delete('/login/{id}',[LoginController::class,'destroy']);

Route::get('/blocks',[BlockController::class,'index']);
Route::post('/blocks',[BlockController::class,'store']);
Route::put('/blocks/{id}',[BlockController::class,'update']);
Route::delete('/blocks/{id}',[BlockController::class,'destroy']);

Route::get('/chats',[ChatController::class,'index']);
Route::post('/chats',[ChatController::class,'store']);
Route::put('/chats/{id}',[ChatController::class,'update']);
Route::delete('/chats/{id}',[ChatController::class,'destroy']);

Route::get('/dislikes',[DislikeController::class,'index']);
Route::post('/dislikes',[DislikeController::class,'store']);
Route::put('/dislikes/{id}',[DislikeController::class,'update']);
Route::delete('/dislikes/{id}',[DislikeController::class,'destroy']);

Route::get('/likes',[LikeController::class,'index']);
Route::post('/likes',[LikeController::class,'store']);
Route::put('/likes/{id}',[LikeController::class,'update']);
Route::delete('/likes/{id}',[LikeController::class,'destroy']);

Route::get('/reactions',[ReactionController::class,'index']);
Route::post('/reactions',[ReactionController::class,'store']);
Route::put('/reactions/{id}',[ReactionController::class,'update']);
Route::delete('/reactions/{id}',[ReactionController::class,'destroy']);

Route::get('/messages',[MessagesController::class,'index']);
Route::post('/messages',[MessagesController::class,'store']);
Route::put('/messages/{id}',[MessagesController::class,'update']);
Route::delete('/messages/{id}',[MessagesController::class,'destroy']);

Route::get('/user_photos',[PhotoController::class,'index']);
Route::post('/user_photos',[PhotoController::class,'store']);
Route::put('/user_photos/{id}',[PhotoController::class,'update']);
Route::delete('/user_photos/{id}',[PhotoController::class,'destroy']);

Route::get('/reports',[ReportController::class,'index']);
Route::post('/reports',[ReportController::class,'store']);
Route::put('/reports/{id}',[ReportController::class,'update']);
Route::delete('/reports/{id}',[ReportController::class,'destroy']);

Route::get('/settings',[SettingsController::class,'index']);
Route::post('/settings',[SettingsController::class,'store']);
Route::put('/settings/{id}',[SettingsController::class,'update']);
Route::delete('/settings/{id}',[SettingsController::class,'destroy']);

Route::get('/user_activities',[UserActivityController::class,'index']);
Route::post('/user_activities',[UserActivityController::class,'store']);
Route::put('/user_activities/{id}',[UserActivityController::class,'update']);
Route::delete('/user_activities/{id]',[UserActivityController::class,'destroy']);

Route::get('/users',[UserController::class,'index']);
Route::post('/users',[UserController::class,'store']);
Route::put('/users/{id}',[UserController::class,'update']);
Route::delete('/users{id]',[UserController::class,'destroy']);

Route::get('/user_profiles',[UserProfileController::class,'index']);
Route::post('/user_profiles',[UserProfileController::class,'store']);
Route::put('/user_profiles/{id}',[UserProfileController::class,'update']);
Route::delete('/user_profiles/{}id',[UserProfileController::class,'destroy']);