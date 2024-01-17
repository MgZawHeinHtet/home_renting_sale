<?php

use App\Http\Controllers\AdminscheduleController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AgentDashboardController;
use App\Http\Controllers\AgentenquiryController;
use App\Http\Controllers\AgentPropertySaleController;
use App\Http\Controllers\AgentscheduleController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DisplayPropertiesController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewsCommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalePropertyImageController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ShowPropertySaleController;
use App\Http\Middleware\AgentMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Models\NewsComment;
use App\Models\SalePropertyImage;
use App\Models\Schedule;
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
    Route::middleware(AuthMiddleware::class)->group(function(){
        Route::post('/{detail_news:id}/comment',[NewsCommentController::class,'upload']);
        Route::patch('/comment/{comment:id}',[NewsCommentController::class,'update']);
        Route::delete('/comment/{comment:id}',[NewsCommentController::class,'destory']);
    });
});



//property route
Route::prefix('properties')->group(function(){
    Route::get('/sale',[DisplayPropertiesController::class,'index']);
    Route::get('/{property:id}/sale ',[DisplayPropertiesController::class, 'show']);
    //sending enquiry
    Route::post('/{propery:id}/enquiry',[EnquiryController::class,'send']);
    Route::post('/{property:id}/schedule',[ScheduleController::class,'takeSchedule'])->middleware(AuthMiddleware::class);
});

//agent front route
Route::prefix('agents')->group(function(){
    Route::get('',[AgentController::class, 'index']);
    Route::get('/{agent:id}',[AgentController::class, 'show']);
});

Route::prefix('profile')->group(function(){
    Route::get('',[ProfileController::class,'index']);
    Route::patch('/user/{user:id}',[ProfileController::class,'update']);
    Route::patch('/changePassword/{user:id}',[ProfileController::class, 'changePassword']);
});

//login route

Route::post('/login',[LoginController::class,'login']);

Route::get('/login',[LoginController::class, 'index']);

Route::post('logout',[LogoutController::class,'logout']);

//admin dashboard agent route
Route::middleware([AuthMiddleware::class,AgentMiddleware::class])->prefix('adminAgents')->group(function (){
    Route::get('',[AgentDashboardController::class,'index']);
    Route::resource('post-ad-sale',AgentPropertySaleController::class);
    Route::resource('show-ad-sale',ShowPropertySaleController::class);
    Route::get('images-upload/{proeprty:id}/sale',[SalePropertyImageController::class,'index']);
    Route::post('images-upload/{property:id}',[SalePropertyImageController::class,'store']);
    Route::delete('images/{image:id}',[SalePropertyImageController::class,'destory']);
    Route::get('/enquries',[AgentenquiryController::class,'index']);
    Route::patch('/enquries/{enqury:id}/read',[AgentenquiryController::class, 'markAsRead']);
    Route::delete('/enquries/{enqury:id}',[AgentenquiryController::class, 'destory']);
    Route::get('/schedules',[AgentscheduleController::class,'index']);
});

// contact us 
Route::get('/contact_us',[ContactusController::class,'index']);

