<?php

use App\Actions\User\ProcessUserForm;
use App\Actions\User\UserDetails;
use App\Actions\User\UserForm;
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

});
Route::get('/', UserDetails::class)->name('user.details');
Route::post('user', ProcessUserForm::class)->name('user.store');
