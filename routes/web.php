<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductBookingController;
use App\Http\Controllers\HomeController;
use App\Models\ProductBooking;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about-us', function () {
    return view('frontend.about-us');
})->name('about');

Route::get('strabismus', function(){
    return view('frontend.strabismus');
})->name('strabismus');


Route::get('eyelid-surgery', function(){
    return view('frontend.eyelid-surgery');
})->name('eyelid-surgery');

Route::get('cataract-surgery', function(){
    return view('frontend.cataract-surgery');
})->name('cataract-surgery');

Route::get('nasolacrimal-duct-obstruction', function(){
    return view('frontend.nasolacrimal-duct-obstruction');
})->name('nasolacrimal-duct-obstruction');

 
Route::get('glaucoma', function(){
    return view('frontend.glaucoma');
})->name('glaucoma');

Route::get('dry-eyes', function(){
    return view('frontend.dry-eyes');
})->name('dry-eyes');

Route::get('computer-vision-syndrome', function(){
    return view('frontend.computer-vision-syndrome');
})->name('computer-vision-syndrome');

Route::get('adult-eye-checkup-in-dubai', function(){
    return view('frontend.adult-eye-checkup-in-dubai');
})->name('adult-eye-checkup-in-dubai');

Route::get('amblyopia-treatment-in-dubai', function(){
    return view('frontend.amblyopia-treatment-in-dubai');
})->name('amblyopia-treatment-in-dubai');

Route::get('pediatric-ophthalmologist-in-dubai', function(){
    return view('frontend.pediatric-ophthalmologist-in-dubai');
})->name('pediatric-ophthalmologist-in-dubai');

Route::get('cornea-specialist-dubai', function(){
    return view('frontend.cornea-specialist-dubai');
})->name('cornea-specialist-dubai');

Route::get('eye-specialist-in-dubai', function(){
    return view('frontend.eye-specialist-in-dubai');
})->name('eye-specialist-in-dubai');

Route::get('eye-specialist-for-kids-in-dubai', function(){
    return view('frontend.eye-specialist-for-kids-in-dubai');
})->name('eye-specialist-for-kids-in-dubai');

Route::get('eye-specialist-doctor-in-dubai', function(){
    return view('frontend.eye-specialist-doctor-in-dubai');
})->name('eye-specialist-doctor-in-dubai');

Route::get('keratoconus-treatment-in-dubai', function(){
    return view('frontend.keratoconus-treatment-in-dubai');
})->name('keratoconus-treatment-in-dubai');

Route::get('lazy-eye-treatment-in-dubai', function(){
    return view('frontend.lazy-eye-treatment-in-dubai');
})->name('lazy-eye-treatment-in-dubai');

Route::get('squint-specialist-in-dubai', function(){
    return view('frontend.squint-specialist-in-dubai');
})->name('squint-specialist-in-dubai');

Route::get('video-gallery', function(){
    return view('frontend.video-gallery');
})->name('video-gallery');

Route::get('image-gallery', function(){
    return view('frontend.image-gallery');
})->name('image-gallery');

Route::get('contact-us', function () {
    return view('frontend.contact-us');
})->name('contact');


Route::post('/contact-submit', [HomeController::class, 'sendContact'])->name('contact.store');
Route::get('/thank-you', function () {
    return view('frontend.thank-you');
})->name('thank.you');



Route::post('/product-booking-submit', [HomeController::class, 'productsubmit'])->name('product.booking');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'show'])->name('blog.detail');
Route::get('/category/{slug}', [HomeController::class, 'category'])->name('blog.category');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('dashboard')->group(function () {
        Route::resource('categories', CategoryController::class);
    });
    Route::prefix('dashboard')->name('admin.')->middleware(['auth'])->group(function () {
        Route::resource('blogs', BlogController::class);
    });
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/product-bookings', [ProductBookingController::class, 'index'])->name('product.bookings');
        Route::delete('/product-bookings/{id}', [ProductBookingController::class, 'destroy'])->name('product.bookings.destroy');
    });
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
        Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    });
});

require __DIR__ . '/auth.php';
