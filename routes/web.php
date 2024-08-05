<?php

use App\Livewire\Addstaff;
use App\Livewire\Editpage;
use App\Livewire\Staff;
use App\Livewire\Tentor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Livewire\Editstaff;
use App\Livewire\Staffpage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('userview.home');
});

//route admin-area
Route::get('/editpage', Editpage::class)->name('editpage');
Route::get('/staffpage', Staffpage::class)->name('staff');

//route nav-staff
Route::get('/addstaff', Addstaff::class)->name('addstaff');
Route::get('/editstaff/{id}',Editstaff::class)->name('editstaff'); 

//route crud-staff
Route::post('/staff', [StaffController::class, 'addStaff'])->name('addStaff');
Route::put('/staff/{id}', [StaffController::class, 'editStaff'])->name('editStaff');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
