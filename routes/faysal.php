<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AccountantController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PrescriptionController;
use App\Http\Controllers\Admin\ReceptionistController;

// Route::group(['as' => 'admin.', 'middleware' => ['auth']], function () {

Route::get('/', [HomeController::class, 'index'])
    ->name('dashboard');

Route::get('/site-settings', [SiteSettingController::class, 'index'])
    ->name('sitesettings.index');
Route::post('/site-settings/update', [SiteSettingController::class, 'update'])
    ->name('settings.update');


// CMS Part

// });



Route::resource('post', PostController::class);




Route::put('/toggle-status/{id}/', [AdminController::class, 'toggleUserStatus'])
    ->name('user.toggle.status');
Route::put('/toggle-department/{id}/', [AdminController::class, 'toggleDepartmentStatus'])
    ->name('department.toggle.status');
