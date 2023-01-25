<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\planController;
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
// route::redirect('/','api-test');
//=====image generator start
Route::get('api-test',[ApiController::class,'index'])->name('api');
Route::post('api-test',[ApiController::class,'image'])->name('image');
//=======image generator end
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//=====
Route::middleware("auth")->group(function(){
   Route::get('plans',[planController::class,'index'])->name('plan');
   Route::get('plans/{plan}',[planController::class,'show'])->name('plan.show');
   Route::post('subscription',[planController::class,'subscription'])->name('subs.create');
   Route::get('plans',[planController::class,'index'])->name('plan');

});





//==business=price_1MQx75E4o5Z9I1xTQL0lyWaC
