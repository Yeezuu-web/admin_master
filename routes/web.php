<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\FilesController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\SeriesController;
use App\Http\Controllers\Admin\SchedulesController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Auth\ChangePasswordController;

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    // Files
    Route::delete('files/destroy', [FIlesController::class, 'massDestroy'])->name('files.massDestroy');
    Route::resource('files', FilesController::class)->except(['create']);

    // series
    Route::resource('series', SeriesController::class);

    // schedule
    Route::delete('schedules/destroy', [SchedulesController::class, 'massDestroy'])->name('schedules.massDestroy');
    Route::resource('schedules', SchedulesController::class);
    
    // Sort
    Route::get('schedules/sort', [SchedulesController::class, 'sort'])->name('schedules.sort');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', [ChangePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password', [ChangePasswordController::class, 'update'])->name('password.update');
        Route::post('profile', [ChangePasswordController::class, 'updateProfile'])->name('password.updateProfile');
        Route::post('profile/destroy', [ChangePasswordController::class, 'destroy'])->name('password.destroyProfile');
    }
});