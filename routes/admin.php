<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EntryController;
use App\Http\Controllers\Admin\ApproveController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DoctorEntryController;

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
    
    

    //** ENTRY PATIENT */
    Route::get('patient-entry', [EntryController::class, 'entryPatient'])->name('entry.patient');
    Route::post('patient-entry', [EntryController::class, 'storePatientData'])->name('store.patient');
    
    
    //**DOCTOR ENTRY */
    Route::get('doctor-entry', [DoctorEntryController::class, 'doctorEntry'])->name('entry.doctor');
    Route::post('doctor-entry', [DoctorEntryController::class, 'storeUpdateData'])->name('sote.doctor.data');
    Route::get('doctor-list', [DoctorEntryController::class, 'doctorList'])->name('list.doctor');
 });
?>