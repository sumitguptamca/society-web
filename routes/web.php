<?php


use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\Auth\DashboardController;
use App\Http\Controllers\Admin\FlateOwner\FlateOwnerController;
use App\Http\Controllers\Admin\GST\GSTController;
use App\Http\Controllers\Admin\Notice\NoticeController;
use App\Http\Controllers\Admin\Services\ElectricityBillController;
use App\Http\Controllers\Admin\Services\WaterBillController;
use App\Http\Controllers\Admin\Ticket\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\EmailController;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/template/{slug}', function () {
    return view('Admin/'.request()->route('slug'));
});



Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('faq', [FrontendController::class, 'software'])->name('faq');
Route::get('web-dev', [FrontendController::class, 'web_dev'])->name('web-dev');
Route::get('mobile-app', [FrontendController::class, 'mobile_app'])->name('mobile-app');
Route::get('e-commerce', [FrontendController::class, 'e_commerce'])->name('e-commerce');
Route::get('ui-ux', [FrontendController::class, 'ui_ux'])->name('ui-ux');
Route::get('digital-marketing', [FrontendController::class, 'digital_marketing'])->name('digital-marketing');
Route::get('outsource', [FrontendController::class, 'outsource'])->name('outsource');
Route::get('support', [FrontendController::class, 'support'])->name('support');
Route::get('industries', [FrontendController::class, 'industries'])->name('industries');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');





Route::get('price', [FrontendController::class, 'price'])->name('price');

Route::post('contact/send', [FrontendController::class, 'sendEmails'])->name('contact.send');

Route::get('/send-email', [EmailController::class, 'sendEmail']);


// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');


// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
// 	Route::get('/', [AdminLoginController::class, 'showLoginForm'])->name('index');
// 	Route::post('login', [AdminLoginController::class, 'login'])->name('login');
// });
Route::controller(AdminLoginController::class)->prefix('admin')->name('admin.')->group(function () {
		Route::get('/', 'showLoginform')->name('index');                     
		Route::post('login', 'login')->name('login');
		Route::get('logout', 'logout')->name('logout');
		Route::get('updateProfile', 'updateProfile')->name('updateProfile');
		Route::put('/updateProfile', 'profileSave')->name('update');
		Route::middleware('auth')->group(function () {
			Route::controller(FlateOwnerController::class)->prefix('flatowner')->name('flatowner.')->group(function () {
				Route::get('/', 'index')->name('index');
				Route::get('/create', 'create')->name('create');
				Route::post('/store', 'store')->name('store');
				Route::get('{id}/edit', 'edit')->name('edit');
				Route::put('/{id}', 'update')->name('update');
				Route::delete('/{id}', 'destroy')->name('destroy');
			});
		
			Route::controller(TicketController::class)->prefix('tickets')->name('tickets.')->group(function () {
				Route::get('/', 'index')->name('index');
				Route::get('/{id}', 'show')->name('show');
			});
		
			Route::prefix('bills')->name('bills.')->group(function () {
				Route::controller(ElectricityBillController::class)->prefix('electricities')->name('electricities.')->group(function () {
					Route::get('/', 'index')->name('index');
					Route::get('/create', 'create')->name('create');
					Route::post('/store', 'store')->name('store');
					Route::get('{id}/edit', 'edit')->name('edit');
					Route::put('/{id}', 'update')->name('update');
					Route::delete('/{id}', 'destroy')->name('destroy');
				});
		
				Route::controller(WaterBillController::class)->prefix('water')->name('water.')->group(function () {
					Route::get('/', 'index')->name('index');
					Route::get('/create', 'create')->name('create');
					Route::post('/store', 'store')->name('store');
					Route::get('{id}/edit', 'edit')->name('edit');
					Route::put('/{id}', 'update')->name('update');
					Route::delete('/{id}', 'destroy')->name('destroy');
				});
			});
		
			Route::controller(NoticeController::class)->prefix('notice')->name('notice.')->group(function () {
				Route::get('/', 'index')->name('index');
				Route::get('/create', 'create')->name('create');
				Route::post('/store', 'store')->name('store');
				Route::get('{id}/edit', 'edit')->name('edit');
				Route::put('/{id}', 'update')->name('update');
				Route::delete('/{id}', 'destroy')->name('destroy');
			});
		
			Route::controller(GSTController::class)->prefix('gst')->name('gst.')->group(function () {
				Route::get('/', 'index')->name('index');
				Route::get('/create', 'create')->name('create');
				Route::post('/store', 'store')->name('store');
				Route::get('{id}/edit', 'edit')->name('edit');
				Route::put('/{id}', 'update')->name('update');
				Route::delete('/{id}', 'destroy')->name('destroy');
			});
		});
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
