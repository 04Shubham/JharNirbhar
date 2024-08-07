<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/email/verify', [App\Http\Controllers\Email\EmailVerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Email\EmailVerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [App\Http\Controllers\Email\EmailVerificationController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('get-new-captcha', [App\Http\Controllers\Auth\LoginController::class, 'get_new_captcha']);
Route::get('get-new-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'get_new_captcha']);

Route::get('/', [App\Http\Controllers\Client\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\Client\HomeController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\Client\HomeController::class, 'contact']);
Route::post('/contact/store', [App\Http\Controllers\Client\HomeController::class, 'store']);
Route::get('/help', [App\Http\Controllers\Client\HomeController::class, 'help']);
Route::get('/faqs', [App\Http\Controllers\Client\HomeController::class, 'faq']);
Route::get('/terms-and-condition', [App\Http\Controllers\Client\HomeController::class, 'terms']);
Route::get('/privacy', [App\Http\Controllers\Client\HomeController::class, 'privacy']);

Route::get('/category/{slug}', [App\Http\Controllers\Client\CategoryController::class, 'index']);
Route::get('/services', [App\Http\Controllers\Client\ServiceController::class, 'index']);
Route::get('/services/{category_slug}/{service_slug}', [App\Http\Controllers\Client\ServiceController::class, 'services']);
Route::post('/freelancer/request/call', [App\Http\Controllers\Client\ServiceController::class, 'store']);
Route::get('/book/{category_slug}/{service_slug}/{freelancer_id}', [App\Http\Controllers\Client\ServiceController::class, 'book']);

Route::get('/service/request/call', [App\Http\Controllers\Client\AppointmentController::class, 'index']);
Route::post('/service/request/call', [App\Http\Controllers\Client\AppointmentController::class, 'store']);


// Freelance Routes
Route::prefix('freelancer')->middleware(['auth', 'email-verify'])->group(function () {
    Route::get('/register', [App\Http\Controllers\Freelancer\FreelancerController::class, 'register']);
    Route::post('/register', [App\Http\Controllers\Freelancer\FreelancerController::class, 'store']);
    Route::get('/dashboard', [App\Http\Controllers\Freelancer\FreelancerController::class, 'index']);

    Route::get('/refresh-captcha', [App\Http\Controllers\Freelancer\FreelancerController::class, 'get_new_captcha']);
    
    Route::get('/booking/search', [App\Http\Controllers\Freelancer\SearchController::class, 'index']);
    
    Route::get('/appointment/{appointmentId}/book', [App\Http\Controllers\Freelancer\BookedAppointmentController::class, 'store']);
    Route::get('/booking/{bookingId}/complete', [App\Http\Controllers\Freelancer\BookedAppointmentController::class, 'complete']);
    Route::get('/booking/{bookingId}/revert', [App\Http\Controllers\Freelancer\BookedAppointmentController::class, 'revert']);

    Route::get('get-new-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'get_new_captcha']);

});



// ADMIN ROUTES
Route::prefix('admin')->middleware(['auth','email-verify'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/profile', [App\Http\Controllers\Admin\DashboardController::class, 'profile']);

    Route::get('/customer', [App\Http\Controllers\Admin\AppointmentController::class, 'index']);
    
    Route::get('/contact', [App\Http\Controllers\Admin\ContactController::class, 'index']);
    Route::get('/request', [App\Http\Controllers\Admin\CallController::class, 'index']);

    Route::get('/seeker', [App\Http\Controllers\Admin\JobController::class, 'seeker']);
    Route::get('/provider', [App\Http\Controllers\Admin\JobController::class, 'provider']);

    Route::get('/freelancer',[App\Http\Controllers\Admin\FreelancerController::class,'index']);

    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::post('/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::post('/category/{id}/update', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('/category/{id}/delete', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('/service', [App\Http\Controllers\Admin\ServiceController::class, 'index']);
    Route::post('/service/store', [App\Http\Controllers\Admin\ServiceController::class, 'store']);

});
