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
    

	Route::get('/contact/all', admin\ContactMessageController::class .'@index')->name('admin.contact');
	Route::get('/contact/add', admin\ContactMessageController::class .'@create')->name('admin.contact.add');
	Route::post('/contact/store', admin\ContactMessageController::class .'@store')->name('admin.contact.store');
	Route::get('/contact/edit/{id}', admin\ContactMessageController::class .'@edit')->name('admin.contact.edit');
	Route::post('/contact/update/{id}', admin\ContactMessageController::class .'@update')->name('admin.contact.update');
	Route::get('/contact/delete/{id}', admin\ContactMessageController::class .'@destroy')->name('admin.contact.destroy');

	Route::get('/testimonial', admin\TestimonialController::class .'@index')->name('admin.testimonial');
	Route::get('/testimonial/add', admin\TestimonialController::class .'@create')->name('admin.testimonial.add');
	Route::post('/testimonial/store', admin\TestimonialController::class .'@store')->name('admin.testimonial.store');
	Route::get('/testimonial/edit/{id}', admin\TestimonialController::class .'@edit')->name('admin.testimonial.edit');
	Route::post('/testimonial/update/{id}', admin\TestimonialController::class .'@update')->name('admin.testimonial.update');
	Route::get('/testimonial/delete/{id}', admin\TestimonialController::class .'@destroy')->name('admin.testimonial.destroy');

	Route::get('/journey', admin\JourneyController::class .'@index')->name('admin.journey');
	Route::get('/journey/add', admin\JourneyController::class .'@create')->name('admin.journey.add');
	Route::post('/journey/store', admin\JourneyController::class .'@store')->name('admin.journey.store');
	Route::get('/journey/edit/{id}', admin\JourneyController::class .'@edit')->name('admin.journey.edit');
	Route::post('/journey/update/{id}', admin\JourneyController::class .'@update')->name('admin.journey.update');
	Route::get('/journey/delete/{id}', admin\JourneyController::class .'@destroy')->name('admin.journey.destroy');

	Route::get('/category', admin\CategoryController::class .'@index')->name('admin.Category');
	Route::get('/category/add', admin\CategoryController::class .'@create')->name('admin.Category.add');
	Route::post('/category/store', admin\CategoryController::class .'@store')->name('admin.Category.store');
	Route::get('/category/edit/{id}', admin\CategoryController::class .'@edit')->name('admin.Category.edit');
	Route::post('/category/update/{id}', admin\CategoryController::class .'@update')->name('admin.Category.update');
	Route::get('/category/delete/{id}', admin\CategoryController::class .'@destroy')->name('admin.Category.destroy');
	// career form
	Route::get('/form', admin\CareerformController::class .'@index')->name('admin.form');
	Route::get('/form/add', admin\CareerformController::class .'@create')->name('admin.form.add');
	Route::post('/form/store', admin\CareerformController::class .'@store')->name('admin.form.store');
	Route::get('/form/edit/{id}', admin\CareerformController::class .'@edit')->name('admin.form.edit');
	Route::post('/form/update/{id}', admin\CareerformController::class .'@update')->name('admin.form.update');
	Route::get('/form/delete/{id}', admin\CareerformController::class .'@destroy')->name('admin.form.destroy');




});