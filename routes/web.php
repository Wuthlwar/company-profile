<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
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
Route::get('/act_detail',function(){
    return view('act_detail');
});
//History Note
Route::get('/establish_year', [HomeController::class, 'establish_year'])->name('establish_year');
Route::get('/mile_stone', [HomeController::class, 'mile_stone'])->name('mile_stone');
Route::get('/joint_venture', [HomeController::class, 'joint_venture'])->name('joint_venture');

//Services
Route::get('/product_information', [HomeController::class, 'product_information'])->name('product_information');
Route::get('/delivery_service', [HomeController::class, 'delivery_service'])->name('delivery_service');
Route::get('/special_order', [HomeController::class, 'special_order'])->name('special_order');
Route::get('/product_return', [HomeController::class, 'product_return'])->name('product_return');
Route::get('/consulting_service', [HomeController::class, 'consulting_service'])->name('consulting_service');
Route::get('/contractor_information', [HomeController::class, 'contractor_information'])->name('contractor_information');
Route::get('/member_service', [HomeController::class, 'member_service'])->name('member_service');
Route::get('/repair_service', [HomeController::class, 'repair_service'])->name('repair_service');

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
