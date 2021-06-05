<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
route::view('/login',"login");
route::view('/register','register');
route::view('/buynow','buynow');
route::POST('/login',[usercontroller::class,'login']);
route::POST('/register',[usercontroller::class,'register']);
route::get('/',[productcontroller::class,'index']);
route::get('detail/{id}',[productcontroller::class,'detail']);
route::get('search',[productcontroller::class,'search']);
route::post('addtocart',[productcontroller::class,'addtocart']);
route::get('cartlist',[productcontroller::class,'cartlist']);
route::get('removecart/{id}',[productcontroller::class,'removecart']);
route::get('ordernow',[productcontroller::class,'ordernow']);
route::get('buynow',[productcontroller::class,'buynow']);
route::POST('orderplace',[productcontroller::class,'orderplace']);
route::get('myorder',[productcontroller::class,'myorder']);