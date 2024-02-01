<?php

use App\Http\Controllers\AdminscheduleController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AgentDashboardController;
use App\Http\Controllers\AgentenquiryController;
use App\Http\Controllers\AgentProifleController;
use App\Http\Controllers\AgentPropertyRentController;
use App\Http\Controllers\AgentPropertySaleController;
use App\Http\Controllers\AgentscheduleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\CreditPackageController;
use App\Http\Controllers\CreditTranscationController;
use App\Http\Controllers\DisplayPropertiesController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewsCommentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilescheduleController;
use App\Http\Controllers\PropertySaveController;
use App\Http\Controllers\RentPropertyImageController;
use App\Http\Controllers\RentReviewController;
use App\Http\Controllers\SalePropertyImageController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ShowPropertyRentController;
use App\Http\Controllers\ShowPropertySaleController;
use App\Http\Middleware\AgentMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Models\NewsComment;
use App\Models\Notification;
use App\Models\PropertyRent;
use App\Models\RentPropertyImage;
use App\Models\RentReview;
use App\Models\SalePropertyImage;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        Route::post('/{detail_news:id}/like',[NewsController::class,'like']);
    });
});

//property route
Route::prefix('properties')->group(function(){
    Route::get('/sale',[DisplayPropertiesController::class,'index']);
    Route::get('/rent',[DisplayPropertiesController::class, 'index']);
    Route::get('/{property:id}/sale ',[DisplayPropertiesController::class, 'saleShow']);
    Route::get('/{property:id}/rent',[DisplayPropertiesController::class, 'rentShow']);
    Route::post('/{property:id}/saveSale',[PropertySaveController::class,'saveSale'])->middleware(AuthMiddleware::class);
    //sending enquiry
    Route::post('/{propery:id}/enquiry',[EnquiryController::class,'send']);
    Route::post('/{property:id}/schedule',[ScheduleController::class,'takeSchedule'])->middleware(AuthMiddleware::class);
});

//agent front route
Route::prefix('agents')->group(function(){
    Route::get('',[AgentController::class, 'index']);
    Route::get('/{agent:id}',[AgentController::class, 'show']);
});

Route::middleware(AuthMiddleware::class)->prefix('profile')->group(function(){
    Route::get('',[ProfileController::class,'index']);
    Route::patch('/user/{user:id}',[ProfileController::class,'update']);
    Route::patch('/changePassword/{user:id}',[ProfileController::class, 'changePassword']);
    Route::get('notifications',[NotificationController::class,'index']);
    Route::patch('/notifications/{notification:id}',[NotificationController::class, 'read']);
    Route::delete('/notifications/{notification:id}',[NotificationController::class, 'destory']);
    Route::post('/notifications/allread',[NotificationController::class,'makeAllRead']);
    Route::get('/schedules',[ProfilescheduleController::class,'index']);
    Route::post('/schedules/{schedule:id}/cancel',[ProfilescheduleController::class,'cancel']);
    Route::get('/savedProperties',[ProfileController::class,'savedProperties']);
});

//login route

Route::post('/login',[LoginController::class,'login']);

Route::get('/login',[LoginController::class, 'index']);

Route::post('logout',[LogoutController::class,'logout']);

//admin dashboard agent route
Route::middleware([AuthMiddleware::class,AgentMiddleware::class])->prefix('adminAgents')->group(function (){
    Route::get('',[AgentDashboardController::class,'index']);

    Route::get('post-ad',[AgentDashboardController::class,'post_ad_index']);
    Route::resource('post-ad-sale',AgentPropertySaleController::class);
    Route::resource('show-ad-sale',ShowPropertySaleController::class);
    Route::get('images-upload/{property:id}/sale',[SalePropertyImageController::class,'index']);
    Route::post('images-upload/{property:id}/sale',[SalePropertyImageController::class,'store']);
    Route::delete('images/{image:id}/sale',[SalePropertyImageController::class,'destory']);
    Route::get('/enquries',[AgentenquiryController::class,'index']);
    Route::patch('/enquries/{enqury:id}/read',[AgentenquiryController::class, 'markAsRead']);
    Route::delete('/enquries/{enqury:id}',[AgentenquiryController::class, 'destory']);
    Route::get('/schedules',[AgentscheduleController::class,'index']);
    Route::patch('/schedules/{schedule:id}/accept',[AgentscheduleController::class, 'accept']);
    Route::patch('/schedules/{schedule:id}/reject',[AgentscheduleController::class, 'reject']);

    //FOR RENT
    Route::resource('post-ad-rent',AgentPropertyRentController::class);
    Route::get('images-upload/{property:id}/rent',[RentPropertyImageController::class,'index']);
    Route::post('images-upload/{property:id}/rent',[RentPropertyImageController::class,'store']);
    Route::delete('images/{image:id}/rent',[RentPropertyImageController::class,'destory']);

    //rent property show and other staff
    Route::resource('show-ad-rent',ShowPropertyRentController::class);
        
    //agent profile
    Route::get('/profile',[AgentProifleController::class,'index']);
    Route::post('/profile',[AgentProifleController::class,'upload']);

    //news 
    Route::get('/news',[NewsController::class,'news_index']);
    Route::delete('/news/{news:id}',[NewsController::class, 'destroy']);
    Route::get('/news/create',[NewsController::class,'create']);
    Route::post('/news',[NewsController::class,'store']);
    Route::get('/news/{news:id}/edit',[NewsController::class, 'edit']);
    Route::patch('/news/{news:id} ',[NewsController::class, 'update']);

    //credit system
    Route::get('/credit',[AgentDashboardController::class,'credit_index']);
    Route::get('/credit/add',[AgentDashboardController::class,'credit_add']);
    Route::get('/credit/record',[AgentDashboardController::class,'credit_record']);
    Route::get('/credit/{plan:id}/checkout',[CreditTranscationController::class,'checkout']);
    Route::post('/credit/{plan:id}/checkout',[CreditTranscationController::class,'send']);
});

// contact us /schedules/{schedule:id}/accept

Route::get('/contact_us',[ContactusController::class,'index']);

Route::middleware(AuthMiddleware::class)->group(function(){
    Route::post('/check-date/{property:id}',[BookingController::class,'check_avaliable_date' ]);
    Route::get('/booking/{property:id}/step1',[BookingController::class, 'step1']);
    Route::get('/booking/{property:id}/step2',[BookingController::class, 'step2']);
    Route::get('/booking/{property:id}/step3',[BookingController::class, 'step3']);
    Route::post('/booking/checkout',[BookingController::class, 'checkout']);
});




//to use with js fetch
Route::get('/booking/{property:id}',function(PropertyRent $property){
    return $property->booking()->get(['check_in','check_out']);
});


Route::get('/properties/{id}/review',[RentReviewController::class,'index']);

Route::post('/properties/{id}/review',[RentReviewController::class,'store']);

