<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/contact-us', [HomeController::class,'contactUs'])->name('contact.us');
Route::get('/privacy-policy', [HomeController::class,'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-condition', [HomeController::class,'termsCondition'])->name('terms.condition');
Route::get('/testimonial', [HomeController::class,'testimonials'])->name('testimonial');
Route::get('/construction', [HomeController::class,'construction'])->name('construction');
Route::get('/blogs', [HomeController::class,'blogs'])->name('blogs');
Route::get('/home-interior', [HomeController::class,'homeInterior'])->name('home.interior');
Route::get('/home-interior-detail', [HomeController::class,'homeInteriorDetails'])->name('home.interior.detail');
Route::get('/all-properties', [HomeController::class,'properties'])->name('home.properties');
Route::post('/filter-properties-by-search', [HomeController::class,'filterPropertyBySearch'])->name('filter.property.by.search');

Route::get('/get-detail-property/{id}', [HomeController::class,'propertyDetails'])->name('property.detail');
