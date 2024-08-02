<?php

use App\Livewire\Addstaff;
use App\Livewire\Editpage;
use App\Livewire\Staff;
use App\Livewire\Tentor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('userview.home');
});

//route admin-area
Route::get('/editpage', Editpage::class)->name('editpage');
Route::get('/staff', Staff::class)->name('staff');

//route crud-staff
Route::get('/addstaff', Addstaff::class)->name('addstaff');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
