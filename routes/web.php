<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FishingboatController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index'])->name('adminhome');


Route::get('/',[PageController::class, 'index'])->name('home');
Route::get('/about',[PageController::class, 'aboutus'])->name('about');
Route::get('product/fishingboats',[PageController::class, 'fishingboat'])->name('product.fishingboats');
Route::get('product/passengerboats',[PageController::class,'passengerboat'])->name('product.passengerboats');
Route::get('product/otherproducts',[PageController::class,'otherproduct'])->name('product.otherproducts');
Route::get('news-feeds',[PageController::class,'newsfeed'])->name('newsfeeds');
Route::get('tenders-vacancies',[PageController::class,'tender'])->name('tendersvacancies');
Route::get('contactus',[PageController::class,'contact'])->name('contactus');
Route::get('ourprojects',[PageController::class,'project'])->name('ourprojects');

// Route::get('/nav', function () {
//          return view('navbar');

//         });

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');

//    });

// admin urls
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('admin/fishingboats',[FishingboatController::class, 'index'])->name('admin.fishingboats');
Route::post('admin/fishingboats/save',[FishingboatController::class, 'save'])->name('fishingboat.save');
Route::get('admin/fishingboats/fetch-boat', [FishingboatController::class, 'fetchboat'])->name('fetchboat');
Route::get('admin/fishingboats/edit/{id}', [FishingboatController::class, 'edit'])->name('fishingboat.edit');
Route::post('admin/fishingboats/update/{id}', [FishingboatController::class, 'update'])->name('fishingboat.update');
Route::delete('admin/fishingboats/delete/{id}', [FishingboatController::class, 'destory'])->name('fishingboat.delete');



Route::get('admin/passengerboats',[AdminController::class, 'passengerboat'])->name('admin.passengerboats');

