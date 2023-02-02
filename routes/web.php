<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ayetharyarinfo', function () {
    return view('AyetharyarInfo');
});

Route::get('/consultingservice', function () {
    return view('ConsultingService');
});

Route::get('/contractorinformation', function () {
    return view('ContractorInformation');
});

Route::get('/deliveryservice', function () {
    return view('DeliveryService');
});

Route::get('/eastdagoninfo', function () {
    return view('EastdagonInfo');
});

Route::get('/establishyear', function () {
    return view('EstablishYear');
});

Route::get('/hlaingtharyarinfo', function () {
    return view('HlaingtharyarInfo');
});

Route::get('/Index-Boxed', function () {
    return view('Index-Boxed');
});

Route::get('/joint', function () {
    return view('joint');
});

Route::get('/lanthitinfo', function () {
    return view('LanthitInfo');
});

Route::get('/mawlamyineinfo', function () {
    return view('MawlamyineInfo');
});

Route::get('/memberservice', function () {
    return view('MemberService');
});

Route::get('/milestone', function () {
    return view('MileStone');
});

Route::get('/productinformation', function () {
    return view('ProductInformation');
});

Route::get('/productreturn', function () {
    return view('ProductReturn');
});

Route::get('/repairservice', function () {
    return view('RepairService');
});

Route::get('/satsaninfo', function () {
    return view('SatsanInfo');
});

Route::get('/specialorder', function () {
    return view('SpecialOrder');
});

Route::get('/tampawadyinfo', function () {
    return view('TampawadyInfo');
});

Route::get('/terminalinfo', function () {
    return view('TerminalInfo');
});

Route::get('/theikpaninfo', function () {
    return view('TheikpanInfo');
});

