<?php

use Illuminate\Support\Facades\Route;
use \App\http\Controllers\UserController ;
use App\Models\User ;
use App\Models\Role ;
/*
|---------------------------------------------s-----------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    dd(User::where('role_id','=',2)->get());
//     $user = User::find(2);
// if ($user) {
//     $role = Role::find($user->role_id);
//     dd($role);
// }
    // return view('welcome');
});
Route::get('user/{key:name}',[UserController::class ,'index']);
Route::get('homeabout',[UserController::class ,'about'])->name("about");
Route::get('/contactnom',[UserController::class ,'contact'])->name('home2');
Route::get('abc',[UserController::class ,'abc'])->name("abc");

