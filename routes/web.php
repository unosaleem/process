<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\RareCaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommunityEventController;
use App\Http\Controllers\CommunityEventGalleryController;
use App\Http\Controllers\PatientTestimonialController;
use App\Http\Controllers\VideoTestimonialController;
use App\Http\Controllers\FaqController;


Route::get('/index', function () {
    return view('welcome');
});


Route::get('/',[HomeController::class,'index']);
Route::get('/book-appointment', [HomeController::class, 'BookAppointment']);
Route::view('about','pages.about');
Route::view('contact','pages.contact-us');
Route::view('team','pages.our-team');
Route::view('doctor-detail','pages.team-details');
Route::view('team-detail2','pages.team-details2');
Route::view('c2','pages.contact');
Route::view('team1','pages.team');
Route::view('blogs','pages.blog');
Route::view('event','pages.event');
//Route::view('event-detail','pages.event-detail');
Route::get('/event/{event_url}', [HomeController::class, 'Event_detail']);
Route::view('award','pages.award');
Route::view('rare_case','pages.rare_case');
Route::view('blog-detail','pages.blog-detail');
Route::view('doctors','pages.doctor');
Route::view('gynae-laparoscopic-surgeries','pages.specialties.gynae_laparoscopic');
Route::view('obstetrics-and-gynaecology','pages.specialties.obstetrics');
Route::view('pediatricians','pages.specialties.pediatrician');
Route::view('ent','pages.specialties.infertility');
Route::view('general-surgery','pages.specialties.laparoscopic_surgeon');
Route::view('orthopedics','pages.specialties.orthopedics');
Route::view('reconstructive-uro-surgery','pages.specialties.uro_surgery');
Route::view('critical-cases-icu','pages.specialties.cardiac_science');
Route::view('bariatric-surgery','pages.specialties.bariatric_surgery');
Route::view('internal-medicine','pages.specialties.internal_medicine');
Route::view('patient_education','pages.patient_education');



// admin Route
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Dashboard (protected)
Route::middleware('auth')->group(function () {
    // Route::get('admin/dashboard', function () {
    //     return view('admin.pages.dashboard'); 
    // })->name('admin.dashboard');
});
Route::get('admin/dashboard', function () {
       return view('admin.pages.dashboard'); 
    })->name('admin.dashboard');

//     Route::prefix('admin')->name('doctors.')->group(function () {
//     Route::resource('doctors', DoctorController::class);
// });/
// our specialities

// Route::resource('specialties', SpecialityController::class);
// Specialties Management Routes
Route::prefix('/specialties')->group(function () {
    Route::get('/', [SpecialityController::class, 'index'])->name('specialties.index');        
    Route::get('/create', [SpecialityController::class, 'create'])->name('specialties.create'); 
    Route::post('/store', [SpecialityController::class, 'store'])->name('specialties.store'); 
    Route::get('/{specialty}', [SpecialityController::class, 'show'])->name('specialties.show'); 
    Route::get('/{specialty}/edit', [SpecialityController::class, 'edit'])->name('specialties.edit');  
    Route::put('/{specialty}/update', [SpecialityController::class, 'update'])->name('specialties.update'); 
    Route::delete('/{specialty}/delete', [SpecialityController::class, 'destroy'])->name('specialties.destroy'); 
});


// Doctor Management Routes

Route::prefix('admin/doctors')->group(function () {
    Route::get('/', [DoctorController::class, 'index'])->name('doctors.index');        
    Route::get('/create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::post('/store', [DoctorController::class, 'store'])->name('doctors.store');   
    Route::get('/{doctor}', [DoctorController::class, 'show'])->name('doctors.show');
    Route::get('/{id}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');   
    Route::put('/{id}/update', [DoctorController::class, 'update'])->name('doctors.update'); 
    Route::delete('/{id}/delete', [DoctorController::class, 'destroy'])->name('doctors.destroy'); 
});

Route::prefix('/rare-cases')->group(function () {
    Route::get('/', [RareCaseController::class, 'index'])->name('rare-cases.index');
    Route::get('/create', [RareCaseController::class, 'create'])->name('rare-cases.create');
    Route::post('/store', [RareCaseController::class, 'store'])->name('rare-cases.store');
    Route::get('/{id}', [RareCaseController::class, 'show'])->name('rare-cases.show');
    Route::get('/{id}/edit', [RareCaseController::class, 'edit'])->name('rare-cases.edit');
    Route::put('/{id}/update', [RareCaseController::class, 'update'])->name('rare-cases.update');
    Route::delete('/{id}/delete', [RareCaseController::class, 'destroy'])->name('rare-cases.destroy');
});


Route::prefix('/blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blogs.index');             
    Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');     
    Route::post('/store', [BlogController::class, 'store'])->name('blogs.store');       
    Route::get('/{id}', [BlogController::class, 'show'])->name('blogs.show');           
    Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');    
    Route::put('/{id}/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/{id}/delete', [BlogController::class, 'destroy'])->name('blogs.destroy');
});

Route::prefix('/community-events')->group(function () {
    Route::get('/', [CommunityEventController::class, 'index'])->name('community-events.index');
    Route::get('/create', [CommunityEventController::class, 'create'])->name('community-events.create');
    Route::post('/store', [CommunityEventController::class, 'store'])->name('community-events.store');
    Route::get('/{id}', [CommunityEventController::class, 'show'])->name('community-events.show');
    Route::get('/{id}/edit', [CommunityEventController::class, 'edit'])->name('community-events.edit');
    Route::put('/{id}/update', [CommunityEventController::class, 'update'])->name('community-events.update');
    Route::delete('/{id}/delete', [CommunityEventController::class, 'destroy'])->name('community-events.destroy');
});

Route::prefix('community-gallery')->group(function () {
    Route::get('/{event_id}/create', [CommunityEventGalleryController::class, 'create'])->name('community-gallery.create');
    Route::post('/store', [CommunityEventGalleryController::class, 'store'])->name('community-gallery.store');
    Route::get('/', [CommunityEventGalleryController::class, 'index'])->name('community-gallery.index');
    Route::get('/{event_id}', [CommunityEventGalleryController::class, 'show'])->name('community-gallery.show');
    Route::delete('/{id}/delete', [CommunityEventGalleryController::class, 'destroy'])->name('community-gallery.destroy');
});

Route::prefix('/patient-testimonials')->group(function () {
    Route::get('/', [PatientTestimonialController::class, 'index'])->name('patient_testimonials.index');
    Route::get('/create', [PatientTestimonialController::class, 'create'])->name('patient_testimonials.create');
    Route::post('/store', [PatientTestimonialController::class, 'store'])->name('patient_testimonials.store');
    Route::get('/{id}', [PatientTestimonialController::class, 'show'])->name('patient_testimonials.show');
    Route::get('/{id}/edit', [PatientTestimonialController::class, 'edit'])->name('patient_testimonials.edit');
    Route::put('/{id}/update', [PatientTestimonialController::class, 'update'])->name('patient_testimonials.update');
    Route::delete('/{id}/delete', [PatientTestimonialController::class, 'destroy'])->name('patient_testimonials.destroy');
});

Route::prefix('/video-testimonials')->group(function () {
    Route::get('/', [VideoTestimonialController::class, 'index'])->name('video_testimonials.index');
    Route::get('/create', [VideoTestimonialController::class, 'create'])->name('video_testimonials.create');
    Route::post('/store', [VideoTestimonialController::class, 'store'])->name('video_testimonials.store');
    Route::get('/{id}', [VideoTestimonialController::class, 'show'])->name('video_testimonials.show');
    Route::get('/{id}/edit', [VideoTestimonialController::class, 'edit'])->name('video_testimonials.edit');
    Route::put('/{id}/update', [VideoTestimonialController::class, 'update'])->name('video_testimonials.update');
    Route::delete('/{id}/delete', [VideoTestimonialController::class, 'destroy'])->name('video_testimonials.destroy');
});

Route::prefix('/faqs')->group(function () {
    Route::get('/', [FaqController::class, 'index'])->name('faqs.index');
    Route::get('/create', [FaqController::class, 'create'])->name('faqs.create');
    Route::post('/store', [FaqController::class, 'store'])->name('faqs.store');
    Route::get('/{id}', [FaqController::class, 'show'])->name('faqs.show');
    Route::get('/{id}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
    Route::put('/{id}/update', [FaqController::class, 'update'])->name('faqs.update');
    Route::delete('/{id}/delete', [FaqController::class, 'destroy'])->name('faqs.destroy');
});