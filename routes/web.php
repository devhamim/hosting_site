<?php

use App\Http\Controllers\clientController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Hosting_packageController;
use App\Http\Controllers\sendMessageController;
use App\Models\hosting_pakage;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

// frontend
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/hosting/view/{id}', [FrontendController::class, 'hosting_view'])->name('hosting.view');
Route::get('/affiliates', [FrontendController::class, 'affiliates'])->name('affiliates');
Route::get('/contact-us', [FrontendController::class, 'contact_us'])->name('contact.us');
Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about.us');
Route::get('/partners', [FrontendController::class, 'partners'])->name('partners');
Route::get('/network', [FrontendController::class, 'network'])->name('network');
Route::get('/terms/condition', [FrontendController::class, 'terms_condition'])->name('terms.condition');
Route::get('/privacy/policy', [FrontendController::class, 'privacy_policy'])->name('privacy.policy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resources([
        'hosting_package'  => Hosting_packageController::class,
        'client'           => clientController::class,
        'sendMessage'      => sendMessageController::class,
    ]);
});

Route::get('/hosting/package/delete/{id}', [Hosting_packageController::class, 'hosting_package_delete'])->name('hosting.package.delete');
Route::get('/hosting/package/inventory/{id}', [Hosting_packageController::class, 'hosting_package_inventory'])->name('hosting_package.inventory');
Route::get('/hosting/category', [Hosting_packageController::class, 'hosting_category'])->name('hosting.category');
Route::post('/hosting/category/store', [Hosting_packageController::class, 'hosting_category_store'])->name('hosting.category.store');
Route::get('/hosting/category/delete/{id}', [Hosting_packageController::class, 'hosting_category_delete'])->name('hosting.category.delete');
Route::post('/getinventory', [FrontendController::class, 'getinventory']);
