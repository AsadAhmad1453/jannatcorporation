<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CompanyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarController as Carpage;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomePageController;

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


Auth::routes();

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function(){  
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard','dashboard')->name('dashboard');
    });

    Route::controller(CarController::class)->group(function(){
        Route::get('/cars','cars')->name('car.list');
        Route::get('/upload-car','uploadCar')->name('upload.car');
        Route::post('/store-car','storeCar')->name('store.car');
        Route::get('/delete-car/{id}','deleteCar')->name('delete.car');
        Route::get('/edit-car/{id}','editCar')->name('edit.car');
        Route::post('/update-car/{id}','updateCar')->name('update.car');
        Route::get('/delete-car-image/{id}','deleteImage')->name('delete.image');
    });

    Route::controller(CompanyController::class)->group(function(){
        Route::get('/companies','companies')->name('company.list');
        Route::post('/store-company','storeCompany')->name('store.company');
        Route::get('/edit-company/{id}','editCompany')->name('edit.company');
        Route::post('/update-company/{id}','updateCompany')->name('update.company');
        Route::get('/delete-company/{id}','deleteCompany')->name('delete.company');
    });

    Route::controller(CustomerController::class)->group(function(){
        Route::get('/customers','customers')->name('customer.list');
        Route::get('/delete-customer/{id}','deleteCustomer')->name('delete.customer');
    });

    Route::controller(SettingController::class)->group(function(){
        Route::post('/store-setting','storeSetting')->name('store.setting');
        Route::get('/header-setting','headerSetting')->name('header.setting');
        Route::get('/homepage-setting','homepageSetting')->name('homepage.setting');
        Route::get('/footer-setting','footerSetting')->name('footer.setting');
        Route::get('/contactus-setting','contactusSetting')->name('contactuspage.setting');
        Route::get('/aboutus-setting','aboutusSetting')->name('aboutuspage.setting');
    });

});

Route::get('/',[HomePageController::class,'homePage'])->name('homepage');
Route::get('/cars',[Carpage::class,'carsPage'])->name('carpage');
Route::post('/advance-search',[Carpage::class,'advanceSearch'])->name('advance-search');
Route::get('/car-detail/{id}',[Carpage::class,'carDetail'])->name('car-detail');
Route::get('/about-us',[AboutUsController::class,'aboutusPage'])->name('aboutus-page');
Route::get('/contact-us/{id}',[ContactUsController::class,'contactusPage'])->name('contactus-page');
Route::post('/send-message',[ContactUsController::class,'sendMessage'])->name('send-message');
