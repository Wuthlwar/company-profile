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

use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobHeaderController;
use App\Http\Controllers\JobVacantsController;
use App\Http\Controllers\JobApplicationFormController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\UserRoleController;

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
        $feedbacks = Feedback::latest()->get();
        return view('admins.home',['feedbacks'=>$feedbacks]);
    })->name('admins.home');
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('permissions', PermissionController::class);
    Route::resource('activity_type', ActivityTypeController::class);
    Route::post('activity_type/{id}/update',[ActivityTypeController::class,'act_type_update']);
    Route::post('activities/{id}/update',[ActivityController::class,'update']);
    Route::delete('activity_type/{id}/delete',[ActivityTypeController::class,'act_type_delete']);
    Route::resource('activities', ActivityController::class);
    Route::post('/del_act_imgs/{img_id}/delete',[ActivityController::class,'del_act_imgs'])->name('del_act_imgs');
    Route::delete('/act_img/{img_id}/delete',[ActivityController::class,'del_imgs'])->name('del_imgs');
    Route::delete('/activities/{id}/delete',[ActivityController::class,'delete']);

//--------------------------------------------------------job category--------------------------------------------
    Route::resource('job_vacant/Job_categories',JobCategoryController::class);

    Route::match(['post', 'put'], '/Job_categories_status/{id}', [JobCategoryController::class,'updateStatus'])->name('updateStatus');

    Route::match(['post', 'put','delete'],'/Job_categoriesdelete', [JobCategoryController::class,'destroyCategory'])->name('destroyCategory.delete');

    Route::match(['get', 'post'], '/Job_categories_search', [JobCategoryController::class, 'searchCategory'])->name('category.search');

    //--------------------------------------------------------job--------------------------------------------

    //--------------------------------------------------------job vacants--------------------------------------------
    Route::resource('job_vacant/Job_vacant_lists',JobVacantsController::class);

    Route::match(['post', 'put'], '/Job_vacants_status/{id}', [JobVacantsController::class,'jobupdateStatus'])->name('updatevacantStatus');

    Route::match(['post', 'put','delete'],'/Job_vacantsdelete', [JobVacantsController::class,'destroyvacants'])->name('destroyVacant.delete');

    Route::match(['get', 'post'], '/Job_vacants_search', [JobVacantsController::class, 'searchvacant'])->name('job_vacant.search');

    //--------------------------------------------------------job--------------------------------------------
    Route::match(['post', 'put','delete'],'/Job_vacants_applydelete', [JobApplicationFormController::class,'destroyvacantsapply'])->name('destroyVacantapply.delete');
    Route::match(['get', 'post'], '/Job_vacants_search_apply', [JobApplicationFormController::class, 'searchvacantapply'])->name('job_vacant_apply.search');

    Route::resource('User_account/User_accounts_management',UserRoleController::class);

    Route::match(['get', 'post'], '/account_search_search', [UserRoleController::class, 'searchUsers'])->name('user.search');
    Route::match(['post', 'put','delete'],'/user_accountdelete', [UserRoleController::class,'destroyUsers'])->name('destroyUsers.delete');

    Route::resource('Logs/Logs_tracking',LogsController::class);
    Route::match(['get', 'post'], '/logs_search', [LogsController::class, 'searchLogs'])->name('logs.search');
    Route::match(['post', 'put','delete'],'/logs_delete', [LogsController::class,'destroyLogs'])->name('destroyLogs.delete');

    Route::get('/branches/delete/{id}', [JobVacantsController::class, 'deleteBranch'])->name('branches.delete');
    Route::get('/categories/delete/{id}', [JobCategoryController::class, 'deleteRole'])->name('job_roles.delete');

    Route::get('get-job-roles/{category_id}', [JobVacantsController::class, 'getJobRoles']);

    Route::post('/job-vacants/update-status1/{id}', [JobVacantsController::class, 'UpdateStatus1'])->name('job-vacants.update-status1');



});

