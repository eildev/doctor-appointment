<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\SocialIconController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DrInfoController;
use App\Http\Controllers\Backend\DrManagerController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\ManagingTeamController;
use App\Http\Controllers\Backend\OverviewController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\OurPartnerController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\WhyChooseUsController;
use App\Http\Controllers\Backend\EducationTrainingCotroller;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\Backend\AppointmentController;
use App\Http\Controllers\Backend\ConsultingCenterController;
use App\Http\Controllers\Backend\ImageOrVideoController;
use App\Http\Controllers\Backend\HotLinkController;
use App\Http\Controllers\Backend\ContactInfoController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\SlideController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Admin Dashboard
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
    Route::post('/admin/store/profile', [AdminController::class, 'AdminStoreProfile'])->name('store.profile');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    //Footer Route
    Route::controller(DrInfoController::class)->group(function () {
        Route::get('/dr-info/add', 'index')->name('add.dr.info');
        Route::post('/dr-info/store', 'store')->name('store.dr.info');
        Route::get('/dr-info/view', 'view')->name('view.dr.info');
        Route::get('/dr-info/edit/{id}', 'edit')->name('edit.dr.info');
        Route::post('/dr-info/update/{id}', 'update')->name('update.dr.info');
        Route::get('/dr-info/delete/{id}', 'delete')->name('delete.dr.info');
        // Route::get('/dr-info/status/{id}', 'status')->name('status.dr.info');
    });

    // Patient related routes
    Route::controller(PatientController::class)->group(function () {
        Route::get('/patient/add', 'index')->name('add.patient');
        Route::post('/patient/store', 'store')->name('patient.store');
        Route::get('/patient/view', 'view')->name('patient.view');
        Route::get('/patient/edit/{id}', 'edit')->name('patient.edit');
        Route::post('/patient/update/{id}', 'update')->name('patient.update');
        Route::get('/patient/delete/{id}', 'delete')->name('patient.delete');
    });

 //  Slider  routes
    Route::controller(SlideController::class)->group(function () {
         Route::get('/slider/add', 'SliderAdd')->name('add.slider');
         Route::post('/slider/store', 'StoreSlider')->name('store.slider');
         Route::get('/slider/view', 'ViewSlider')->name('slider.view');
         Route::get('/slider/edit/{id}', 'EditSlider')->name('edit.slider');
         Route::post('/slider/update/{id}', 'UpdateSlider')->name('update.slider');
        Route::get('/slider/delete/{id}', 'DeleteSlider')->name('delete.slider');
    });

    // social Icon related routes
    Route::controller(SocialIconController::class)->group(function () {
        Route::get('/social-icon', 'index')->name('social.icon');
        Route::post('/social-icon/store', 'store')->name('social.icon.store');
        Route::get('/manage/social-icon', 'view')->name('manage.social.icon');
        Route::get('/edit-social-icon/{id}', 'edit')->name('edit.social.icon');
        Route::post('/update-social-icon/{id}', 'update')->name('update.social.icon');
        Route::get('/delete-social-icon/{id}', 'delete')->name('delete.social.icon');
        // Route::post('/social-icon-status/{id}', 'status')->name('social.icon.status');
    });
    //Gallery Category Related Routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category/add', 'CategoryAdd')->name('category.add');
        Route::post('/category/store', 'StoreCategory')->name('store.category');
        Route::get('/category/view', 'ViewCategory')->name('category.view');
        Route::get('/category/edit/{id}', 'EditCategory')->name('edit.category');
        Route::post('/category/update/{id}', 'UpdateCategory')->name('update.category');
        Route::get('/category/delete/{id}', 'DeleteCategory')->name('delete.category');
    });
    //Gallery Related Routes
    Route::controller(GalleryController::class)->group(function () {
        Route::get('/gallery/add', 'GalleryAdd')->name('gallery.add');
        Route::post('/gallery/store', 'StoreGallery')->name('store.gallery');
        Route::get('/gallery/view', 'ViewGallery')->name('gallery.view');
        Route::get('/gallery/edit/{id}', 'EditGallery')->name('edit.gallery');
        Route::post('/gallery/update/{id}', 'UpdateGallery')->name('update.gallery');
        Route::get('/gallery/delete/{id}', 'DeleteGallery')->name('delete.gallery');
    });
    //Services Related Routes
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/services/add', 'index')->name('service.add');
        Route::post('/services/store', 'store')->name('store.services');
        Route::get('/services/view', 'view')->name('service.view');
        Route::get('/services/edit/{id}', 'edit')->name('edit.services');
        Route::post('/services/update/{id}', 'update')->name('update.services');
        Route::get('/services/delete/{id}', 'delete')->name('delete.services');
        // Route::get('/services/status/{id}', 'status')->name('status.services');
    });
    // Education Training  routes
    Route::controller(EducationTrainingCotroller::class)->group(function () {
        Route::get('/education/training/add', 'AddEducationTraining')->name('add.education.training');
        Route::post('/education/training/store', 'StoreEducationTraining')->name('store.education.training');
        Route::get('/education/training/view', 'ViewEducationTraining')->name('view.education.training');
        Route::get('/education/training/edit/{id}', 'EditEducationTraining')->name('edit.education.training');
        Route::post('/education/training/update/{id}', 'UpdateEducationTraining')->name('update.education.training');
        Route::get('/education/training/delete/{id}', 'DeleteEducationTraining')->name('delete.education.training');
    });
    // Appointment  routes
    Route::controller(AppointmentController::class)->group(function () {
        Route::get('/all/appointment/', 'AllAppointment')->name('appointment.view');
        Route::get('/approve/appointment/{id}', 'AppointmentApprove')->name('appointment.approve');
        Route::get('/cancel/appointment/{id}', 'AppointmentCancel')->name('appointment.canceled');
        Route::get('/delete/appointment/{id}', 'AppointmentDelete')->name('appointment.delete');

    });
    // ConSulting Center routes
    Route::controller(ConsultingCenterController::class)->group(function () {
        Route::get('/consulting/center/add', 'AddConsultingCenter')->name('add.consulting.center');
        Route::post('/consulting/center/store', 'StoreConsultingCenter')->name('store.consulting.center');
        Route::get('/consulting/center/view', 'ViewConsultingCenter')->name('view.consulting.center');
        Route::get('/consulting/center/edit/{id}', 'EditConsultingCenter')->name('edit.consulting.center');
        Route::post('/consulting/center/update/{id}', 'UpdateConsultingCenter')->name('update.consulting.center');
        Route::get('/consulting/center/delete/{id}', 'DeleteConsultingCenter')->name('delete.consulting.center');
    });
    // Image Or Video
    Route::controller(ImageOrVideoController::class)->group(function () {
        Route::get('/image/video/add', 'AddImageOrVideo')->name('add.image.video');
        Route::post('/image/video/store', 'StoreImageOrVideo')->name('store.image.video');
        Route::get('/image/video/view', 'ViewImageOrVideo')->name('view.image.video');
        Route::get('/image/video/edit/{id}', 'EditImageOrVideo')->name('edit.image.video');
        Route::post('/image/video/update/{id}', 'UpdateImageOrVideo')->name('update.image.video');
         Route::get('/image/video/delete/{id}', 'DeleteImageOrVideo')->name('delete.image.video');
    });
    //Hot Link All route
    Route::controller(HotLinkController::class)->group(function () {
        Route::get('/add/hot/link', 'AddHotLink')->name('add.hot.link');
        Route::post('/store/hot/link', 'StoreHotLink')->name('store.hot.link');
        Route::get('/view/hot/link/', 'ViewHotLink')->name('view.hot.link');
        Route::get('/edit/hot/link/{id}', 'EditHotLink')->name('edit.hot.link');
        Route::post('/update/hot/link/{id}', 'UpdateHotLink')->name('update.hot.link');
         Route::get('/delete/hot/link/{id}', 'DeleteHotLink')->name('delete.hot.link');
    });
    //Contact Info All route
    Route::controller(ContactInfoController::class)->group(function () {
        Route::get('/add/contact/info', 'AddContactInfo')->name('add.contact.info');
        Route::post('/store/contact/info', 'StoreContactInfo')->name('store.contact.info');
        Route::get('/view/contact/info', 'ViewContactInfo')->name('view.contact.info');
        Route::get('/edit/contact/info/{id}', 'EditContactInfo')->name('edit.contact.info');
        Route::post('/update/contact/info/{id}', 'UpdateContactInfo')->name('update.contact.info');
         Route::get('/delete/contact/info/{id}', 'DeleteContactInfo')->name('delete.contact.info');
    });
    //Review All route
    Route::controller(ReviewController::class)->group(function () {
        Route::get('/add/review', 'AddReview')->name('add.review');
        Route::post('/store/review', 'StoreReview')->name('store.review');
        Route::get('/view/review', 'ViewReview')->name('view.review');
        Route::get('/edit/review/{id}', 'EditReview')->name('edit.review');
        Route::post('/update/review/{id}', 'UpdateReview')->name('update.review');
         Route::get('/delete/review/{id}', 'DeleteReview')->name('delete.review');
    });
}); //End Middleware
//

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//Admin login forgot Pw Route
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/admin/forgot/password', [AdminController::class, 'AdminForgotPassword'])->name('admin.forgot.password');
require __DIR__ . '/auth.php';
