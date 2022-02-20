<?php

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
    return view('welcome');
});

Auth::routes();


Route::group(['prefix' => 'admin','middleware' => 'authadmin'], function () {
    // Admin Dashboard
    Route::get('/dashboard', admin\DashboardController::class .'@index')->name('admin.dashboard');



    Route::get('/video', admin\HomeBgvideoController::class .'@index')->name('admin.video');
	Route::get('/video/add', admin\HomeBgvideoController::class .'@create')->name('admin.video.add');
    
	Route::post('/video/store', admin\HomeBgvideoController::class .'@store')->name('admin.video.store');
	Route::get('/video/edit/{id}', admin\HomeBgvideoController::class .'@edit')->name('admin.video.edit');
	Route::post('/video/update/{id}', admin\HomeBgvideoController::class .'@update')->name('admin.video.update');
	Route::get('/video/delete/{id}', admin\HomeBgvideoController::class .'@destroy')->name('admin.video.destroy');


	Route::get('/about/about', admin\AboutUsController::class .'@index')->name('admin.about.about');
	Route::get('/about/add', admin\AboutUsController::class .'@create')->name('admin.about.add');
	Route::post('/about/store', admin\AboutUsController::class .'@store')->name('admin.about.store');
	Route::get('/about/edit/{id}', admin\AboutUsController::class .'@edit')->name('admin.about.edit');
	Route::post('/about/update/{id}', admin\AboutUsController::class .'@update')->name('admin.about.update');
	Route::get('/about/delete/{id}', admin\AboutUsController::class .'@destroy')->name('admin.about.destroy');

	// Route::get('/about/why-choose-us', admin\WhyChooseController::class .'@index')->name('admin.about.choose');
	// Route::get('/why-choose-us/add', admin\WhyChooseController::class .'@create')->name('admin.choose.add');
	// Route::post('/why-choose-us/store', admin\WhyChooseController::class .'@store')->name('admin.choose.store');
	// Route::get('/why-choose-us/edit/{id}', admin\WhyChooseController::class .'@edit')->name('admin.choose.edit');
	// Route::post('/why-choose-us/update/{id}', admin\WhyChooseController::class .'@update')->name('admin.choose.update');
	// Route::get('/why-choose-us/delete/{id}', admin\WhyChooseController::class .'@destroy')->name('admin.choose.destroy');

	Route::get('/company-contacts', admin\CompanyContactController::class .'@index')->name('admin.companyContacts');
	Route::get('/company-contacts/add', admin\CompanyContactController::class .'@create')->name('admin.companyContacts.add');
	Route::post('/company-contacts/store', admin\CompanyContactController::class .'@store')->name('admin.companyContacts.store');
	Route::get('/company-contacts/edit/{id}', admin\CompanyContactController::class .'@edit')->name('admin.companyContacts.edit');
	Route::post('/company-contacts/update/{id}', admin\CompanyContactController::class .'@update')->name('admin.companyContacts.update');
	Route::get('/company-contacts/delete/{id}', admin\CompanyContactController::class .'@destroy')->name('admin.companyContacts.destroy');

	Route::get('/Whatweuse', admin\WhatweuseController::class .'@index')->name('admin.icon');
	Route::get('/Whatweuse/add', admin\WhatweuseController::class .'@create')->name('admin.icon.add');
	Route::post('/Whatweuse/store', admin\WhatweuseController::class .'@store')->name('admin.icon.store');
	Route::get('/Whatweuse/edit/{id}', admin\WhatweuseController::class .'@edit')->name('admin.icon.edit');
	Route::post('/Whatweuse/update/{id}', admin\WhatweuseController::class .'@update')->name('admin.icon.update');
	Route::get('/Whatweuse/delete/{id}', admin\WhatweuseController::class .'@destroy')->name('admin.icon.destroy');

    Route::get('/services', admin\ServiceController::class .'@index')->name('admin.service');
	Route::get('/services/add', admin\ServiceController::class .'@create')->name('admin.service.add');
	Route::post('/services/store', admin\ServiceController::class .'@store')->name('admin.service.store');
	Route::get('/services/edit/{id}', admin\ServiceController::class .'@edit')->name('admin.service.edit');
	Route::post('/services/update/{id}', admin\ServiceController::class .'@update')->name('admin.service.update');
	Route::get('/services/destroy/{id}', admin\ServiceController::class .'@destroy')->name('admin.service.destroy');

});