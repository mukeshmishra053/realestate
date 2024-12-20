<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
Route::get('/help', [HomeController::class,'help'])->name('help');
Route::get('/privacy-policy', [HomeController::class,'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-condition', [HomeController::class,'termsCondition'])->name('terms.condition');
Route::get('/about-us', [HomeController::class,'aboutUs'])->name('about.us');
Route::get('/testimonial', [HomeController::class,'testimonials'])->name('testimonial');
Route::get('/construction', [HomeController::class,'construction'])->name('construction');
Route::get('/blogs', [HomeController::class,'blogs'])->name('blogs');
Route::get('/home-interior', [HomeController::class,'homeInterior'])->name('home.interior');
Route::get('/home-interior-detail', [HomeController::class,'homeInteriorDetails'])->name('home.interior.detail');
Route::get('/all-properties', [HomeController::class,'properties'])->name('home.properties');
Route::get('/all-projects', [HomeController::class,'projects'])->name('home.projects');
Route::post('/filter-properties-by-search', [HomeController::class,'filterPropertyBySearch'])->name('filter.property.by.search');
Route::any('/filter-properties-by-options', [HomeController::class,'getFilterProperties'])->name('filter.property.by.options');
Route::get('/search-cities', [HomeController::class,'searchCities'])->name('search.cities');
Route::get('/search-categories', [HomeController::class,'searchCategories'])->name('search.categories');
Route::get('/search-project', [HomeController::class,'searchProjects'])->name('search.projects');

Route::get('/get-detail-property/{id}', [HomeController::class,'propertyDetails'])->name('property.detail');
Route::get('/get-detail-project/{id}', [HomeController::class,'projectDetails'])->name('project.detail');
Route::post('/apply-property-filter', [HomeController::class,'applyFilter'])->name('submit.filter.data.for.property');
Route::post('/save-contact-us', [HomeController::class,'saveContactUs'])->name('save.contact.us');
Route::post('/save-help', [HomeController::class,'saveEnquiry'])->name('save.help');
Route::post('/save-review', [HomeController::class,'saveReview'])->name('submit.review');
Route::post('/save-consultant', [HomeController::class,'saveConsultant'])->name('save.consultant');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');
Route::post('/register', [AuthController::class,'register'])->name('register');
