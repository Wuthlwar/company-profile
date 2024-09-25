<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\JobApplicationFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Models\Activity;
use App\Models\ActivityImage;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/act_detail/{act_id}',function($id){
    $act = Activity::whereId($id)->first();
    $act_imgs = ActivityImage::where('activity_id',$id)->get();
    return view('act_detail',compact('act','act_imgs'));
})->name('act_detail');
//History Note
Route::get('/establish_year', [HomeController::class, 'establish_year'])->name('establish_year');
Route::get('/mile_stone', [HomeController::class, 'mile_stone'])->name('mile_stone');
Route::get('/joint_venture', [HomeController::class, 'joint_venture'])->name('joint_venture');
Route::get('/coporate', [HomeController::class, 'coporate'])->name('coporate');
Route::get('/accountability', [HomeController::class, 'accountability'])->name('accountability');

//Services
Route::get('/product_information', [HomeController::class, 'product_information'])->name('product_information');
Route::get('/delivery_service', [HomeController::class, 'delivery_service'])->name('delivery_service');
Route::get('/special_order', [HomeController::class, 'special_order'])->name('special_order');
Route::get('/product_return', [HomeController::class, 'product_return'])->name('product_return');
Route::get('/consulting_service', [HomeController::class, 'consulting_service'])->name('consulting_service');
Route::get('/contractor_information', [HomeController::class, 'contractor_information'])->name('contractor_information');
Route::get('/member_service', [HomeController::class, 'member_service'])->name('member_service');
Route::get('/repair_service', [HomeController::class, 'repair_service'])->name('repair_service');
Route::get('/delivery_service_area', [HomeController::class, 'delivery_service_area'])->name('delivery_service_area');

//Branches
Route::get('/lanthit_info', [HomeController::class, 'lanthit_info'])->name('lanthit_info');
Route::get('/satsan_info', [HomeController::class, 'satsan_info'])->name('satsan_info');
Route::get('/eastdagon_info', [HomeController::class, 'eastdagon_info'])->name('eastdagon_info');
Route::get('/hlaingtharyar_info', [HomeController::class, 'hlaingtharyar_info'])->name('hlaingtharyar_info');
Route::get('/teminalm_info', [HomeController::class, 'teminalm_info'])->name('teminalm_info');
Route::get('/southdagon_info', [HomeController::class, 'southdagon_info'])->name('southdagon_info');
Route::get('/shwepyithar_info', [HomeController::class, 'shwepyithar_info'])->name('shwepyithar_info');
Route::get('/theikpan_info', [HomeController::class, 'theikpan_info'])->name('theikpan_info');
Route::get('/tampawady_info', [HomeController::class, 'tampawady_info'])->name('tampawady_info');
Route::get('/bago_info', [HomeController::class, 'bago_info'])->name('bago_info');
Route::get('/mawlamyine_info', [HomeController::class, 'mawlamyine_info'])->name('mawlamyine_info');
Route::get('/ayetharyar_info', [HomeController::class, 'ayetharyar_info'])->name('ayetharyar_info');
Route::get('/ayetharyar_info', [HomeController::class, 'ayetharyar_info'])->name('ayetharyar_info');

Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('getActByType/{act_type_id}',[ActivityController::class,'get_activities_by_type'])->name('get_activities_by_type');

Route::resource('feedbacks',FeedbackController::class);

//---------------------------------------------------Job Vacants---------------------------------------------
Route::get('/our_career', [HomeController::class, 'job'])->name('our_opportunities');

Route::post('/view-counts/{id}', [HomeController::class, 'ViewCounts'])->name('view_counts');

Route::get('/our_all_categories_job', [HomeController::class, 'jobAllcate'])->name('our_all_categories_job');
Route::get('/our_career_detail/{id}', [HomeController::class, 'jobdetail'])->name('our_opportunities_detail');
Route::get('/our_career_categories/{id}', [HomeController::class, 'jobDetailCate'])->name('our_opportunities_categories_jobs');

Route::resource('Job_Application_form',JobApplicationFormController::class);
Route::get('/job_application_apply_successfully', [HomeController::class, 'successApply'])->name('job_application_apply_successfully');
Route::get('/job/search', [HomeController::class, 'jobsearch'])->name('job.search');
Route::get('/Faq', [HomeController::class, 'Faq'])->name('Faq');
Route::get('/Knowledge_Sharing', [HomeController::class, 'Knowledge_Sharing'])->name('Knowledge_Sharing');
Route::get('/Our_Photo_Gallery', [HomeController::class, 'Our_gallery'])->name('our_photo_gallery');

Route::get('branches/{region_id}', [HomeController::class, 'getBranchesByRegion']);