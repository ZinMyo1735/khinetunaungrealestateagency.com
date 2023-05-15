<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;            // import AuthController
use App\Http\Controllers\LocationController;        // import LocationController
use App\Http\Controllers\PropertyController;        // import PropertyController
use App\Http\Controllers\PageController;            // import PageController
use App\Http\Controllers\FeatureBannerController;   // import FeatureBannerController
use App\Http\Controllers\FeaturePropertyController; // import FeaturePropertyController
use App\Http\Controllers\FeatureCondoController;    // import FeatureCondoController
use App\Http\Controllers\AdminController;           // import AdminController
use App\Http\Controllers\ContactController;         // import ContactController


Route::get('/',[PageController::class,'welcome'])->name('welcome');
Route::get('/property/list',[PageController::class,'propertyGrid'])->name('propertyGrid');
// Route::post('property/area',[PageController::class,'areaFilter'])->name('areaFilter');
Route::get('property/filter/{id}',[PageController::class,'filter'])->name('location#filter');
Route::get('/property/single/{id}',[PageController::class,'propertySingle'])->name('propertySingle');
Route::get('/feature/banner/single/{id}',[PageController::class,'propertySingleB'])->name('propertySingleB');
Route::get('/feature/property/single/{id}',[PageController::class,'propertySingleP'])->name('propertySingleP');
Route::get('/feature/condo/single/{id}',[PageController::class,'propertySingleC'])->name('propertySingleC');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact/create',[ContactController::class,'createContact'])->name('create#contact');

Route::get('admin/login/page',[AuthController::class,'loginPage'])->name('auth#loginPage');
// Route::get('admin/register/page',[AuthController::class,'registerPage'])->name('auth#registerPage');

Route::middleware(['auth'])->group(function () {
    // Admin Dashboard
    Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

    // admin account
    Route::prefix('admin')->group(function(){
        // password
        Route::get('password/changePage',[AdminController::class,'changePasswordPage'])->name('admin#changePasswordPage');
        Route::post('change/password',[AdminController::class,'changePassword'])->name('admin#changePassword');

        // profile
        Route::get('edit',[AdminController::class,'edit'])->name('admin#edit');
        Route::post('update/{id}',[AdminController::class,'update'])->name('admin#update');
    });

    // Location
    Route::prefix('location')->group(function(){
        Route::get('list',[LocationController::class,'list'])->name('location#list');
        Route::get('create/page',[LocationController::class,'createPage'])->name('location#createPage');
        Route::post('create',[LocationController::class,'create'])->name('location#create');
        Route::get('delete/{id}',[LocationController::class,'delete'])->name('location#delete');
        Route::get('edit/{id}',[LocationController::class,'edit'])->name('location#edit');
        Route::post('update',[LocationController::class,'update'])->name('location#update');
    });

    // Properties
    Route::prefix('properties')->group(function(){
        Route::get('list',[PropertyController::class,'list'])->name('property#list');
        Route::get('create/page',[PropertyController::class,'createPage'])->name('property#createPage');
        Route::post('create',[PropertyController::class,'create'])->name('property#create');
        Route::get('delete/{id}',[PropertyController::class,'delete'])->name('property#delete');
        Route::get('edit/{id}',[PropertyController::class,'edit'])->name('property#edit');
        Route::post('update',[PropertyController::class,'update'])->name('property#update');
    }); 

    // FeatureBanner
    Route::prefix('feature')->group(function(){
        Route::prefix('banner')->group(function(){
            Route::get('list',[FeatureBannerController::class,'list'])->name('banner#list');
            Route::get('create/page',[FeatureBannerController::class,'createPage'])->name('banner#createPage');
            Route::post('create',[FeatureBannerController::class,'create'])->name('banner#create');
            Route::get('delete/{id}',[FeatureBannerController::class,'delete'])->name('banner#delete');
            Route::get('edit/{id}',[FeatureBannerController::class,'edit'])->name('banner#edit');
            Route::post('update',[FeatureBannerController::class,'update'])->name('banner#update');
        });
        Route::prefix('property')->group(function(){
            Route::get('list',[FeaturePropertyController::class,'list'])->name('fproperty#list');
            Route::get('create/page',[FeaturePropertyController::class,'createPage'])->name('fproperty#createPage');
            Route::post('create',[FeaturePropertyController::class,'create'])->name('fproperty#create');
            Route::get('delete/{id}',[FeaturePropertyController::class,'delete'])->name('fproperty#delete');
            Route::get('edit/{id}',[FeaturePropertyController::class,'edit'])->name('fproperty#edit');
            Route::post('update',[FeaturePropertyController::class,'update'])->name('fproperty#update');
        });
        Route::prefix('condo')->group(function(){
            Route::get('list',[FeatureCondoController::class,'list'])->name('condo#list');
            Route::get('create/page',[FeatureCondoController::class,'createPage'])->name('condo#createPage');
            Route::post('create',[FeatureCondoController::class,'create'])->name('condo#create');
            Route::get('delete/{id}',[FeatureCondoController::class,'delete'])->name('condo#delete');
            Route::get('edit/{id}',[FeatureCondoController::class,'edit'])->name('condo#edit');
            Route::post('update',[FeatureCondoController::class,'update'])->name('condo#update');
        });   
    });

    // Messages
    Route::prefix('contact')->group(function(){
        Route::get('/customer/messages',[ContactController::class,'message'])->name('message');
        Route::get('/delete/message/{id}',[ContactController::class,'delete'])->name('message#delete');
    });
    
});
