<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SiteSettingController;

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {


    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::get('/site-settings', [SiteSettingController::class, 'index'])
        ->name('sitesettings.index');
    Route::post('/site-settings/update', [SiteSettingController::class, 'update'])
        ->name('settings.update');

    Route::resource('user', UserController::class);
    Route::resource('post', PostController::class);

});
Route::get('/toggle-status/{model}/{id}', [AdminController::class, 'toggleStatus'])
    ->name('toggleStatus');
