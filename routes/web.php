<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\AgentDashboardController;
use App\Http\Controllers\AgentPropertySaleController;
use App\Http\Controllers\DisplayPropertiesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShowPropertySaleController;
use App\Http\Middleware\AgentMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Models\NewsComment;
use App\Models\SalePropertyImage;
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

Route::get('/', function () {
    return view('index');
});

// news front route 

Route::prefix('news')->group(function(){
    Route::get('',[NewsController::class, 'index']);
    Route::get('/{news:id}',[NewsController::class, 'show']);
    Route::post('/{detail_news:id}/comment',[NewsComment::class,'upload']);
});



//property route
Route::prefix('properties')->group(function(){
    Route::get('/sale',[DisplayPropertiesController::class,'index']);
    Route::get('/{property:id}',[DisplayPropertiesController::class, 'show']);
});

//agent front route
Route::prefix('agents')->group(function(){
    Route::get('',[AgentController::class, 'index']);
    Route::get('/{agent:id}',[AgentController::class, 'show']);
});

//login route

Route::post('/login',[LoginController::class,'login']);

Route::get('/login',[LoginController::class, 'index']);

Route::post('logout',[LogoutController::class,'logout']);

Route::middleware([AuthMiddleware::class,AgentMiddleware::class])->prefix('adminAgents')->group(function (){
    Route::get('',[AgentDashboardController::class,'index']);
    Route::resource('post-ad-sale',AgentPropertySaleController::class);
    Route::resource('show-ad-sale',ShowPropertySaleController::class);
    Route::get('images-upload/{proeprty:id}/sale',[SalePropertyImage::class,'index']);
    Route::post('images-upload/{property:id}',[SalePropertyImage::class,'store']);
    Route::delete('images/{image:id}',[SalePropertyImage::class,'destory']);
});
