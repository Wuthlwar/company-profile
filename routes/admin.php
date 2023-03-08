<?php

// use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ActivityTypeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Models\Feedback;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth::routes();
Route::group(['prefix' => 'admins'], function(){
    Route::get('/',function()
    {
        return redirect('admins/login');
    });
    Route::get('/login',[HomeController::class,'login'])->name('login');
    Route::post('/check',[HomeController::class,'checkLogin'])->name('check');
    Route::get('/logout',[HomeController::class,'logout'])->name('logout');
    Route::get('/home', function(){
        return view('admins.app');
    });
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('permissions', PermissionController::class);
    Route::resource('activity_type', ActivityTypeController::class);
    Route::resource('activities', ActivityController::class);
    Route::post('/del_act_imgs/{img_id}/delete',[ActivityController::class,'del_act_imgs'])->name('del_act_imgs');
    Route::delete('/act_img/{img_id}/delete',[ActivityController::class,'del_imgs'])->name('del_imgs');


});

