<?php

use App\Http\Controllers\KegiatanController;
use App\Livewire\Addstaff;
use App\Livewire\Editpage;
use App\Livewire\Staff;
use App\Livewire\Tentor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\ProgramController;
use App\Livewire\Addkegiatan;
use App\Livewire\Addtesti;
use App\Livewire\Addmetode;
use App\Livewire\Addprogram;
use App\Livewire\Editstaff;
use App\Livewire\Edittesti;
use App\Livewire\Editkegiatan;
use App\Livewire\Editmetode;
use App\Livewire\Editprogram;
use App\Livewire\Profilpage;
use App\Livewire\Programpage;
use App\Livewire\Staffpage;
use App\Livewire\Testipage;
use App\Livewire\Kegiatanpage;
use App\Livewire\Metodepage;
use App\Models\Kegiatan;
use App\Models\Profil;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('userview.home');
});

Route::get('/about', function(){
    return view('userview.about');
});

Route::get('/profile', function(){
    return view('userview.profile');
});

//route admin-area
Route::get('/editpage', Editpage::class)->name('editpage');
Route::get('/staffpage', Staffpage::class)->name('staff');
Route::get('/testipage', Testipage::class)->name('testi');
Route::get ('/programpage', Programpage::class)->name('program');
Route::get('/profilpage/data', Profilpage::class)->name('profil');
Route::get ('/kegiatanpage', Kegiatanpage::class)->name('kegiatan');
Route::get ('/metodepage', Metodepage::class)->name('metode');


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
Route::get('/addprogram', Addprogram::class)->name('addprogram');
Route::get ('/editprogram/{id}', Editprogram::class)->name('editprogram');
//Route crud-program

Route::post('/program', [ProgramController::class, 'addProgram'])->name('addProgram');
Route::put('/program/{id}', [ProgramController::class, 'editProgram'])->name('editProgram');


//route nav-profil
//route crud-profil
Route::put('/profil/{id}', [ProfilController::class, 'editProfil'])->name('editProfil');



//route nav-kegiatan
Route::get('/addkegiatan', Addkegiatan::class)->name('addkegiatan');
Route::get ('/editkegiatan/{id}', Editkegiatan::class)->name('editkegiatan');
//route crud-kegiatan

Route::post('/kegiatan', [KegiatanController::class, 'addKegiatan'])->name('addKegiatan');
Route::put('/kegiatan/{id}', [KegiatanController::class, 'editKegiatan'])->name('editKegiatan');


//route nav-metode
Route::get('/addmetode', Addmetode::class)->name('addmetode');
Route::get ('/editmetode/{id}', Editmetode::class)->name('editmetode');

//route crud-metode
Route::post('/metode', [MetodeController::class, 'addMetode'])->name('addMetode');
Route::put('/metode/{id}', [MetodeController::class, 'editMetode'])->name('editMetode');







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
