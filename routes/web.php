<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomCategoryController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


// //route for room category index
// Route::get("/rooms", [RoomCategoryController::class, 'index'])->name('roomCategory.index');

Route::group(['middleware' => ['auth', 'is_admin']], function () {
    // admin room category route
    Route::get("/rooms", [RoomCategoryController::class, 'index'])->name('roomCategory.index');
    // Admin create room route
    Route::get("/createrCategory", [RoomCategoryController::class, 'createRoomCategory'])->name('roomCategory.create');
    // Room Category create room route
    Route::post("/storeCategory", [RoomCategoryController::class, 'storeRoomCategory'])->name('roomCategory.store');
    // Room Category edit route
    Route::get("/roomCategoryedit/{id}", [RoomCategoryController::class, 'showRoomCategory'])->name('roomCategory.show');
    // Room Category delete route
    Route::get("/deleteCategory/{id}", [RoomCategoryController::class, 'deleteRoomCategory'])->name('roomCategory.delete');

    Route::post("/updateCategory/{id}", [RoomCategoryController::class, 'updateRoomCategory'])->name('roomCategory.edit');

});