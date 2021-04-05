<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\OntimeController;
use App\Http\Controllers\RecurentController;
use App\Http\Controllers\Sub_CategorieController;
use App\Http\Controllers\AuthController;

//Login Route
Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
    	/*
    		Route Khusus untuk role admin
    	*/
        Route::resource('admin', AdminController::class);
    });
});

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
    return view('Layout/base');
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD Categorie
Route::resource('categorie', CategorieController::class);

//CRUD Income
Route::resource('income', IncomeController::class);

//CRUD Expense
Route::resource('expense', ExpenseController::class);

//CRUD Ontime
Route::resource('ontime', OntimeController::class);

//CRUD Recurent
Route::resource('recurent', RecurentController::class);

//CRUD Sub Categorie
Route::resource('sub_categorie', Sub_CategorieController::class);


