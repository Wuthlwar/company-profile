<?php

// use App\Http\Controllers\UserController;

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
use App\Http\Controllers\KnowledgeSharingController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\FaqController;
use App\Models\Activity;
use App\Models\ActivityType;
use App\Models\Faq;
use App\Models\KnowledgeSharing;
use App\Models\PhotoGallery;
use App\Models\PhotoName;
use Illuminate\Support\Facades\Request;
use App\Models\Branch;
use App\Models\JobApplicationForm;
use App\Models\JobVacants;
use App\Models\JobCategory;
use App\Models\Jobroles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\{Auth,Session};
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
        $countGallery= PhotoGallery::count();
        $countKnowledge= KnowledgeSharing::count();
        $countFaq= Faq::count();
        $countAct= Activity::count();
        $countActype= ActivityType::count();
        $countFeed= Feedback::count();
        $branches = Branch::latest()->get();
        $categories = JobCategory::all();
        $vacants = JobVacants::orderBy('id')->paginate(20);

        $start_date = request()->input('start_date') ?: Session::get('start_date');
        $end_date = request()->input('end_date') ?: Session::get('end_date');
        $category_id = request()->input('category_name') ?: Session::get('category_id');
        $vacant_name = request()->input('vacant_name') ?: Session::get('vacant_name');
        $status = request()->input('status') ?: Session::get('status');

        $query = JobVacants::query();
        if ($start_date && $end_date) {
            $query->whereBetween('date', [$start_date, $end_date]);
        } elseif ($start_date) {
            $query->where('date', 'LIKE', '%' . $start_date . '%');
        }

        if ($category_id) {
            $query->where('category_id', 'LIKE', '%' . $category_id . '%');
        }

        if ($vacant_name) {
            $query->where('vacant_name', 'LIKE', '%' . $vacant_name . '%');
        }

        if ($status) {
            $query->where('status', 'LIKE', '%' . $status . '%');
        }

        $vacants = $query->latest()->paginate(20);
        $vacants->appends(request()->all());

        $vacant_ids = $vacants->pluck('id');

        $apply_counts = JobApplicationForm::whereIn('jobvacant_id', $vacant_ids)
            ->select('jobvacant_id', DB::raw('count(*) as total'))
            ->groupBy('jobvacant_id')
            ->pluck('total', 'jobvacant_id');

        return view('admins.home', compact('feedbacks', 'countGallery', 'countKnowledge', 'countFaq', 'countAct', 'countActype', 'countFeed', 'vacants', 'categories', 'apply_counts', 'branches'));
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

    //--------------------------------------------------Gallery--------------------------------------------

    Route::resource('photo_gallery/all_photo_gallery',PhotoGalleryController::class);
    Route::delete('/photo-galleries/delete-multiple', [PhotoGalleryController::class, 'deleteMultiple'])->name('photoGalleries.deleteMultiple');
    Route::get('/Gallery/delete/{id}', [PhotoGalleryController::class, 'deleteGallery'])->name('gallery_get.delete');
    Route::get('/photo_name/delete/{id}', [PhotoGalleryController::class, 'deletePhotoname'])->name('photo_get.delete');
    Route::match(['get', 'post'], '/Galley_search', [PhotoGalleryController::class, 'searchGallery'])->name('gallery.search');
    //------------------------------------------------------------------------------------------------------

    //--------------------------------------------------Knowledge Sharing--------------------------------------------
    Route::resource('knowledge_sharing/knowledge_sharing',KnowledgeSharingController::class);
    Route::match(['get', 'post','put','delete'],'/knowledge-sharing/bulk-delete', [KnowledgeSharingController::class, 'bulkDelete'])->name('knowledge_sharing.bulk_delete');
    Route::match(['get', 'post'], '/knowledge_sharing_search', [KnowledgeSharingController::class, 'searchKnowledge'])->name('searchknowledge.search');
    //------------------------------------------------------------------------------------------------------

     //--------------------------------------------------FAQ--------------------------------------------
     Route::resource('faq_ans/frequently_asked_question',FaqController::class);
     Route::match(['get', 'post','put'], 'faq_ans/question_and_answer/{id}',[FaqController::class,'Updatequestion'])->name('question_and_answer.update');
     Route::delete('/faqs/question_and_answer/{id}', [FaqController::class, 'destroyQuestion'])->name('question_and_answerfaq.destroy');

     Route::match(['get', 'post','put'],'faqs/question_and_answer_again', [FaqController::class, 'AddagainQuestion'])->name('question_question.add');
     Route::match(['get', 'post'], '/question_and_answer_search', [FaqController::class, 'searchFaq'])->name('searchfaq.search');

     Route::match(['post','put'], '/update-faq-status/{id}', [FaqController::class, 'updateStatus']);

     Route::get('branches/{region_id}', [JobVacantsController::class, 'getBranchesByRegion']);


});

