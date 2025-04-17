<?php

use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Theme\ThemeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/', function () {
    return view('welcome');
});
//
Route::controller(ThemeController::class)->group(function(){

    Route::get('/','index')->name('home');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
    Route::get('/home','index')->name('home');
    Route::get('/service','services')->name('service');

});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'home')->name('admin-home');
    });
   Route::controller(ServicesController::class)->group(function () {
       //Services
       Route::get('/services', 'services')->name('admin-services');
      Route::get('/services/create', 'create')->name('admin-services-create');
      Route::post('/services/create', 'store')->name('admin-services-store');
      Route::get('/services/show/{id}', 'show')->name('admin-services-show');
      Route::get('/services/edit/{id}', 'edit')->name('admin-services-edit');
      Route::PUT('/services/update/{id}', 'update')->name('admin-services-update');
      Route::Delete('/services/{id}', 'destroy')->name('admin-services-destroy');


   });
    Route::controller(FeatureController::class)->group(function () {

       Route::get('/features', 'features')->name('admin-features');
        Route::get('/features/create', 'create')->name('admin-features-create');
        Route::post('/features/store', 'store')->name('admin-features-store');
        Route::get('/features/show/{id}', 'show')->name('admin-features-show');
        Route::get('/features/edit/{id}', 'edit')->name('admin-features-edit');
        Route::PUT('/features/update/{id}', 'update')->name('admin-features-update');
        Route::Delete('/features/{id}', 'destroy')->name('admin-features-destroy');

    });
    Route::controller(MessageController::class)->group(function () {
        Route::get('/messages', 'messages')->name('admin-messages');
        Route::get('/message/show/{message}', 'show')->name('admin-message-show');
        Route::Post('/message/store', 'store')->name('admin-message-store');
        Route::Delete('/message/{message}', 'destroy')->name('admin-message-destroy');

    });
    Route::controller(SubscriberController::class)->group(function () {
        Route::get('/subscribers', 'subscribers')->name('admin-subscribers');
        Route::post('/subscribers/store', 'store')->name('admin-subscribers-store');
        Route::Delete('/subscribers/{subscriber}', 'destroy')->name('admin-subscribers-destroy');

    });
    Route::controller(SettingController::class)->group(function () {
        Route::get('/settings', 'settings')->name('admin-settings');
        Route::get('/settings/edit/{setting}', 'edit')->name('admin-settings-edit');
        Route::PUT('/settings/update/{setting}', 'update')->name('admin-settings-update');
        Route::Delete('/settings/{setting}', 'destroy')->name('admin-settings-destroy');
    });
    Route::controller(MemberController::class)->group(function () {
        Route::get('/members', 'members')->name('admin-members');
        Route::get('/members/create', 'create')->name('admin-members-create');
        Route::post('/members/store', 'store')->name('admin-members-store');
        Route::get('/members/show/{member}', 'show')->name('admin-members-show');
        Route::get('/members/edit/{member}', 'edit')->name('admin-members-edit');
        Route::PUT('/members/update/{member}', 'update')->name('admin-members-update');
        Route::Delete('/members/{member}', 'destroy')->name('admin-members-destroy');
    });
    Route::controller(TestimonialController::class)->group(function () {
        Route::get('/testimonials', 'testimonials')->name('admin-testimonials');
        Route::get('/testimonials/create', 'create')->name('admin-testimonials-create');
        Route::post('/testimonials/store', 'store')->name('admin-testimonials-store');
        Route::get('/testimonials/show/{testimonial}', 'show')->name('admin-testimonials-show');
        Route::get('/testimonials/edit/{testimonial}', 'edit')->name('admin-testimonials-edit');
        Route::PUT('/testimonials/update/{testimonial}', 'update')->name('admin-testimonials-update');
        Route::Delete('/testimonials/{testimonial}', 'destroy')->name('admin-testimonials-destroy');
    });
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
