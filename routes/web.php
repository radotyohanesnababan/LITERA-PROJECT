<?php

use App\Livewire\Addstaff;
use App\Livewire\Editpage;
use App\Livewire\Staff;
use App\Livewire\Tentor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\ProfilController;
use App\Livewire\Addtesti;
use App\Livewire\Editstaff;
use App\Livewire\Edittesti;
use App\Livewire\Profilpage;
use App\Livewire\Programpage;
use App\Livewire\Staffpage;
use App\Livewire\Testipage;
use App\Models\Profil;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('userview.home');
});

//route admin-area
Route::get('/editpage', Editpage::class)->name('editpage');
Route::get('/staffpage', Staffpage::class)->name('staff');
Route::get('/testipage', Testipage::class)->name('testi');
Route::get ('/programpage', Programpage::class)->name('program');
Route::get('/profilpage/data', Profilpage::class)->name('profil');

//route nav-staff
Route::get('/addstaff', Addstaff::class)->name('addstaff');
Route::get('/editstaff/{id}',Editstaff::class)->name('editstaff'); 

//route crud-staff
Route::post('/staff', [StaffController::class, 'addStaff'])->name('addStaff');
Route::put('/staff/{id}', [StaffController::class, 'editStaff'])->name('editStaff');


//route nav-testi
Route::get('/addtesti', Addtesti::class)->name('addtesti');
Route::get('/edittesti/{id}',Edittesti::class)->name('edittesti'); 

//route crud-testi
Route::post('/testi', [TestiController::class, 'addTesti'])->name('addTesti');
Route::put('/testi/{id}', [TestiController::class, 'editTesti'])->name('editTesti');



//route nav-program
//Route crud-program


//route nav-profil
//route crud-profil
Route::put('/profil/{id}', [ProfilController::class, 'editProfil'])->name('editProfil');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
