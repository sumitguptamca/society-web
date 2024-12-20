<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\EmailController;



// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('faq', [FrontendController::class, 'software'])->name('faq');
Route::get('web-dev', [FrontendController::class, 'web_dev'])->name('web-dev');
Route::get('mobile-app', [FrontendController::class, 'mobile_app'])->name('mobile-app');
// Route::get('e-commerce', [FrontendController::class, 'e_commerce'])->name('e-commerce');
// Route::get('ui-ux', [FrontendController::class, 'ui_ux'])->name('ui-ux');
// Route::get('digital-marketing', [FrontendController::class, 'digital_marketing'])->name('digital-marketing');
// Route::get('outsource', [FrontendController::class, 'outsource'])->name('outsource');
// Route::get('support', [FrontendController::class, 'support'])->name('support');
// Route::get('industries', [FrontendController::class, 'industries'])->name('industries');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');





Route::get('price', [FrontendController::class, 'price'])->name('price');

Route::post('contact/send', [FrontendController::class, 'sendEmails'])->name('contact.send');

Route::get('/send-email', [EmailController::class, 'sendEmail']);


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');





Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin-layout/{template}', function(){
    return view('Frontend/admin_page/'.request()->route('template'));
});
