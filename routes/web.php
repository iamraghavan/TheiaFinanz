<?php

use App\Http\Controllers\MainPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

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

Route::get('/', [MainPage::class, 'index']);
Route::get('/about-us', [MainPage::class, 'about_page']);
Route::get('/offerings', [MainPage::class, 'offering']);
Route::get('/providers', [MainPage::class, 'providers']);
Route::get('/contact-us', [MainPage::class, 'contact_us']);

Route::get('/policy/privacy', [MainPage::class, 'policy_privacy']);
Route::get('/policy/terms-and-conditions', [MainPage::class, 'terms']);

Route::post('/enquiry/submit', [EnquiryController::class, 'submitEnquiry'])->name('submitEnquiry');
Route::get('/thanks', [MainPage::class, 'thankyou_page'])->name('thanks');


Route::get('/health', HealthCheckResultsController::class);
