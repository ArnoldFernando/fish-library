<?php

use App\Http\Controllers\Admin\Agricultural\EquipmentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route for the landing page
Route::get('/', function () {
    return view('users.index');
});



// redirects to specific dashboard based on the role of the user
Route::get('/dashboard', function () {
    if(Auth::user()->roles[0]->name == "admin")
    {
       // return Auth::user()->roles[0]->name;
        return view('admin.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// contact
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'handleFormSubmission'])->name('contact.submit');
Route::get('/admin/messages/list', [ContactController::class, 'index'])->middleware('can:admin-access');

// admin routes here
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->middleware('can:admin-access')->group(function(){

    // add routes here for admin
    Route::resource('/users','UserController',['except' => ['create','store','destroy']]);
    Route::get('/userfeedbacks','UserController@userfeedback')->name('userfeedback');


    // Route::resource('/fruits','CTRLfruits');

    // Route::resource('/vegetable','CTRLvegetable');

    Route::resource('/farmers','CTRLfarmers');

    Route::resource('/equipment','EquipmentController');

});


Route::namespace('App\Http\Controllers\Admin\Agricultural')->prefix('admin')->name('admin.')->middleware('can:admin-access')->group(function(){

    Route::resource('/equipments','EquipmentController');

    Route::resource('/fruits','FruitsController');

    Route::resource('/vegetables','VegetableController');


});

Route::namespace('App\Http\Controllers\Admin\Aquatic')->prefix('admin')->name('admin.')->middleware('can:admin-access')->group(function(){

    Route::resource('/aquatic','AquaticEquipmentController');

    Route::resource('/fisheries','FisheriesController');


});


Route::namespace('App\Http\Controllers\Admin')->middleware('can:admin-access')->group(function(){
    Route::get('/profile-edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile-destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





// users routes here
Route::namespace('App\Http\Controllers\Users')->prefix('users')->name('users.')->middleware('can:user-access')->group(function(){

    // add routes here for users
    Route::resource('/feedback','CTRLFeedbacks',['except' => ['update','edit','destroy']]);

    Route::get('/myfeedbacks','CTRLFeedbacks@myfeedback')->name('myfeedback');

    // Route::resource('/products','CTRLproducts');

    // eto route ng search products
    Route::get('/searchproducts','CTRLproducts@searchproducts')->name('searchproducts');


});



// guest routes here
Route::prefix('guest')->group(function(){

    route::view('/about', 'users.about');
    route::view('/contact', 'users.contact');

    route::view('/fruits', 'users.agriculture.fruits');
    route::view('/equipments', 'users.agriculture.equipments');
    route::view('/vegetables', 'users.agriculture.vegetables');
    route::view('/fisheries', 'users.aquatic.fisheries');
    route::view('/aquapments', 'users.aquatic.equipments');



});




require __DIR__.'/auth.php';

