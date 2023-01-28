<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MapController;




Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


    // Routes For admin profile

    Route::get("/userProfile", [UserProfileController::class, 'index'])->name('userProfile.index');

    Route::get("/createUserProfile", [UserProfileController::class, 'createUserProfile'])->name('userProfile.create');
    // create Profile route
    Route::post("/storeUserProfile", [UserProfileController::class, 'storeUserProfile'])->name('userProfile.store');



// //route for room category index
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
    //Rout for updating room categories
    Route::post("/updateCategory/{id}", [RoomCategoryController::class, 'updateRoomCategory'])->name('roomCategory.edit');


    // admin room route
    Route::get("/room", [RoomController::class, 'index'])->name('room.index');
    // Admin create room route
    Route::get("/createrRoom", [RoomController::class, 'createRoom'])->name('room.create');
    // Room  create room route
    Route::post("/storeRoom", [RoomController::class, 'storeRoom'])->name('room.store');
    // Room  edit route
    Route::get("/roomEdit/{id}", [RoomController::class, 'showRoom'])->name('room.show');
    // Room  delete route
    Route::get("/deleteRoom/{id}", [RoomController::class, 'deleteRoom'])->name('room.delete');
    //Rout for updating room 
    Route::post("/updateRoom/{id}", [RoomController::class, 'updateRoom'])->name('room.edit');



    // admin Food route
    Route::get("/food", [FoodController::class, 'index'])->name('food.index');
    // Admin create Food route
    Route::get("/createrFood", [FoodController::class, 'createFood'])->name('food.create');
    // create Food route
    Route::post("/storeFood", [FoodController::class, 'storeFood'])->name('food.store');
    // Food  edit route
    Route::get("/foodEdit/{id}", [FoodController::class, 'showFood'])->name('food.show');
    // Food  delete route
    Route::get("/deleteFood/{id}", [FoodController::class, 'deleteFood'])->name('food.delete');
    //Rout for updating Food 
    Route::post("/updateFood/{id}", [FoodController::class, 'updateFood'])->name('food.edit');

    // admin room category route
    Route::get("/serviceCategory", [ServiceCategoryController::class, 'index'])->name('serviceCategory.index');
    // Admin create room route
    Route::get("/createrServiceCategory", [ServiceCategoryController::class, 'createServiceCategory'])->name('serviceCategory.create');
    // Room Category create room route
    Route::post("/storeServiceCategory", [ServiceCategoryController::class, 'storeServiceCategory'])->name('serviceCategory.store');
    // Room Category edit route
    Route::get("/serviceCategoryEdit/{id}", [ServiceCategoryController::class, 'showServiceCategory'])->name('serviceCategory.show');
    // Room Category delete route
    Route::get("/deleteServiceCategory/{id}", [ServiceCategoryController::class, 'deleteServiceCategory'])->name('serviceCategory.delete');
    //Rout for updating room categories
    Route::post("/updateServiceCategory/{id}", [ServiceCategoryController::class, 'updateServiceCategory'])->name('serviceCategory.edit');


    // Service route
    Route::get("/service", [ServiceController::class, 'index'])->name('service.index');
    // Admin create Service route
    Route::get("/createrService", [ServiceController::class, 'createService'])->name('service.create');
    // create Service route
    Route::post("/storeService", [ServiceController::class, 'storeService'])->name('service.store');
    // Service  edit route
    Route::get("/ServiceEdit/{id}", [ServiceController::class, 'showService'])->name('service.show');
    // Service  delete route
    Route::get("/deleteService/{id}", [ServiceController::class, 'deleteService'])->name('service.delete');
    //Rout for updating Service 
    Route::post("/updateService/{id}", [ServiceController::class, 'updateService'])->name('service.edit');



    // Routes For admin profile

    Route::get("/profile", [ProfileController::class, 'index'])->name('profile.index');

    Route::get("/createProfile", [ProfileController::class, 'createProfile'])->name('profile.create');
    // create Profile route
    Route::post("/storeProfile", [ProfileController::class, 'storeProfile'])->name('profile.store');
    // Profile  edit route
    Route::get("/ProfileEdit/{id}", [ProfileController::class, 'showProfile'])->name('profile.show');
    // Profile  delete route
    Route::get("/deleteProfile/{id}", [ProfileController::class, 'deleteProfile'])->name('profile.delete');
    //Rout for updating Service 
    

    // Map route
    Route::get("/map", [MapController::class, 'index'])->name('map.index');
    // Map creating route
    Route::get("/createrMap", [MapController::class, 'createMap'])->name('map.create');
    // create map route
    Route::post("/storeMap", [MapController::class, 'storeMap'])->name('map.store');
    // Map  edit route
    Route::get("/MapEdit/{id}", [MapController::class, 'showMap'])->name('map.show');
    // Map deleting route
    Route::get("/deleteMap/{id}", [MapController::class, 'deleteMap'])->name('map.delete');
    //Rout for updating Map 
    Route::post("/updateMap/{id}", [MapController::class, 'updateMap'])->name('map.edit');


    // admin payment route
    Route::get("/payment", [PaymentController::class, 'index'])->name('payment.index');
    // Admin create payment route
    Route::get("/createrPayment", [PaymentController::class, 'createPayment'])->name('payment.create');
    // create payment route
    Route::post("/storePayment", [PaymentController::class, 'storePayment'])->name('payment.store');
    // payment  edit route
    Route::get("/paymentEdit/{id}", [PaymentController::class, 'showPayment'])->name('payment.show');
    // payment  delete route
    Route::get("/deletePayment/{id}", [PaymentController::class, 'deletePayment'])->name('payment.delete');
    //payment for updating Food 
    Route::post("/updatePayment/{id}", [PaymentController::class, 'updatePayment'])->name('payment.edit');


    // admin payment method route
    Route::get("/paymentMethod", [PaymentMethodController::class, 'index'])->name('paymentMethod.index');
    // Admin create payment Method route
    Route::get("/createrPaymentMethod", [PaymentMethodController::class, 'createPaymentMethod'])->name('paymentMethod.create');
    // create payment Method route
    Route::post("/storePaymentMethod", [PaymentMethodController::class, 'storePaymentMethod'])->name('paymentMethod.store');
    // payment Method edit route
    Route::get("/paymentMethodEdit/{id}", [PaymentMethodController::class, 'showPaymentMethod'])->name('paymentMethod.show');
    // payment Method delete route
    Route::get("/deletePaymentMethod/{id}", [PaymentMethodController::class, 'deletePaymentMethod'])->name('paymentMethod.delete');
    //payment Method for updating Food 
    Route::post("/updatePaymentMethod/{id}", [PaymentMethodController::class, 'updatePaymentMethod'])->name('paymentMethod.edit');


    // Order route
    Route::get("/Order", [OrderController::class, 'index'])->name('order.index');
    // Order creating route
    Route::get("/createrOrder", [OrderController::class, 'createOrder'])->name('order.create');
    // create Order route
    Route::post("/storeOrder", [OrderController::class, 'storeOrder'])->name('order.store');
    // Order  edit route
    Route::get("/OrderEdit/{id}", [OrderController::class, 'showOrder'])->name('order.show');
    // Order deleting route
    Route::get("/deleteOrder/{id}", [OrderController::class, 'deleteOrder'])->name('order.delete');
    //Rout for updating Order 
    Route::post("/updateOrder/{id}", [OrderController::class, 'updateOrder'])->name('order.edit');



});