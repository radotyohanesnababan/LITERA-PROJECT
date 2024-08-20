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
use App\Http\Controllers\ViewHomeController;
use App\Http\Controllers\ViewAboutController;
use App\Http\Controllers\ViewGaleriController;
use App\Http\Controllers\ViewProfileController;
use App\Http\Controllers\GaleriController;
use App\Livewire\Addkegiatan;
use App\Livewire\Addtesti;
use App\Livewire\Addmetode;
use App\Livewire\Addprogram;
use App\Livewire\Addgaleri;
use App\Livewire\Editstaff;
use App\Livewire\Edittesti;
use App\Livewire\Editkegiatan;
use App\Livewire\Editmetode;
use App\Livewire\Editprogram;
use App\Livewire\Editgaleri;
use App\Livewire\Profilpage;
use App\Livewire\Programpage;
use App\Livewire\Staffpage;
use App\Livewire\Testipage;
use App\Livewire\Kegiatanpage;
use App\Livewire\Metodepage;
use App\Livewire\Galeripage;
use App\Models\Kegiatan;
use App\Models\Profil;


// Route::get('/', function(){
//     return view('userview.home');
// });

Route::get('/', [ViewHomeController::class, 'index'])->name('home');

// Route::get('/about', function(){
//     return view('userview.about');
// });
Route::get('/about', [ViewAboutController::class, 'index'])->name('about');

// Route::get('/profile', function () {
//     return view('userview.profile');
// });

Route::get('/profile', [ViewProfileController::class, 'index'])->name('profile');

// Route::get('/galeri', function () {
//     return view('userview.galeri');
// });

Route::get('/galeri', [ViewGaleriController::class, 'index'])->name('galeri');

// GALERI
Route::get('/praktek', function () {
    return view('userview.praktek');
});
Route::get('/outbond', function () {
    return view('userview.outbond');
});
Route::get('/bukber', function () {
    return view('userview.bukber');
});
Route::get('/reguler', function () {
    return view('userview.reguler');
});
Route::get('/outdoor', function () {
    return view('userview.outdoor');
});
Route::get('/audio', function () {
    return view('userview.audio');
});
Route::get('/flashcard', function () {
    return view('userview.flashcard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //route admin-area
    Route::get('admin/editpage', Editpage::class)->name('editpage');
    Route::get('admin/staffpage', Staffpage::class)->name('staff');
    Route::get('admin/testipage', Testipage::class)->name('testi');
    Route::get('admin/programpage', Programpage::class)->name('program');
    Route::get('admin/profilpage/data', Profilpage::class)->name('profil');
    Route::get('admin/kegiatanpage', Kegiatanpage::class)->name('kegiatan');
    Route::get('admin/metodepage', Metodepage::class)->name('metode');
    Route::get('admin/galeri', Galeripage::class)->name('galeri');


    //route nav-staff
    Route::get('admin/addstaff', Addstaff::class)->name('addstaff');
    Route::get('admin/editstaff/{id}', Editstaff::class)->name('editstaff');

    //route crud-staff
    Route::post('admin/staff', [StaffController::class, 'addStaff'])->name('addStaff');
    Route::put('admin/staff/{id}', [StaffController::class, 'editStaff'])->name('editStaff');


    //route nav-testi
    Route::get('admin/addtesti', Addtesti::class)->name('addtesti');
    Route::get('admin/edittesti/{id}', Edittesti::class)->name('edittesti');

    //route crud-testi
    Route::post('admin/testi', [TestiController::class, 'addTesti'])->name('addTesti');
    Route::put('admin/testi/{id}', [TestiController::class, 'editTesti'])->name('editTesti');



    //route nav-program
    Route::get('admin/addprogram', Addprogram::class)->name('addprogram');
    Route::get('admin/editprogram/{id}', Editprogram::class)->name('editprogram');
    //Route crud-program

    Route::post('admin/program', [ProgramController::class, 'addProgram'])->name('addProgram');
    Route::put('admin/program/{id}', [ProgramController::class, 'editProgram'])->name('editProgram');


    //route nav-profil
    //route crud-profil
    Route::put('admin/profil/{id}', [ProfilController::class, 'editProfil'])->name('editProfil');



    //route nav-kegiatan
    Route::get('admin/addkegiatan', Addkegiatan::class)->name('addkegiatan');
    Route::get('admin/editkegiatan/{id}', Editkegiatan::class)->name('editkegiatan');
    //route crud-kegiatan

    Route::post('admin/kegiatan', [KegiatanController::class, 'addKegiatan'])->name('addKegiatan');
    Route::put('admin/kegiatan/{id}', [KegiatanController::class, 'editKegiatan'])->name('editKegiatan');


    //route nav-metode
    Route::get('admin/addmetode', Addmetode::class)->name('addmetode');
    Route::get('admin/editmetode/{id}', Editmetode::class)->name('editmetode');

    //route crud-metode
    Route::post('admin/metode', [MetodeController::class, 'addMetode'])->name('addMetode');
    Route::put('admin/metode/{id}', [MetodeController::class, 'editMetode'])->name('editMetode');

    //Rpute crud-galeri
    Route::post('admin/galeri', [GaleriController::class, 'addGaleri'])->name('addGaleri');
    Route::put('admin/galeri/{id}', [GaleriController::class, 'editGaleri'])->name('editGaleri');

    //Route nav-galeri
    Route::get('admin/addfoto', Addgaleri::class)->name('addgaleri');
    Route::get('admin/editfoto/{id}', Editgaleri::class)->name('editgaleri');
});
