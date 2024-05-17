<?php

use App\Http\Controllers\Admin\ApproveController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

 Route::prefix('/admin/')->middleware('admin')->name('admin.')->group( function(){
    Route::get('dashboard',[DashboardController::class, 'index'])->name('index');
    Route::get('profile',[DashboardController::class, 'profile'])->name('profile');
    Route::put('profile-update/{id}',[DashboardController::class, 'profileUpdate'])->name('profile.update');
    Route::get('logout',[DashboardController::class, 'logout'])->name('profile.logout');

    //** NOTIFICATIONAS 
    Route::get('notification',[DashboardController::class, 'notification'])->name('notification');


    //*APPROVE PEOPLES SECTION */
    Route::get('approve',[ApproveController::class, 'getApprove'])->name('get.approve');
    Route::get('approve/{id}',[ApproveController::class, 'approvedUser'])->name('approved.user');
    Route::get('declie/{id}',[ApproveController::class, 'declinedUser'])->name('declined.user');
    
    
    

 });
?>