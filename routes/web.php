<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Keadaan setelah login
Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Students
    Route::prefix('students')->name('students.')->group(function () {
        Route::get('/', \App\Http\Livewire\Students\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Students\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Students\Detail::class)->name('detail');
    });

    // Class
    Route::prefix('class')->name('class.')->group(function () {
        Route::get('/', \App\Http\Livewire\Class\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Class\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Class\Detail::class)->name('detail');
    });

    // Journal
    Route::prefix('journal')->name('journal.')->group(function () {
        Route::get('/', \App\Http\Livewire\Journal\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Journal\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Journal\Detail::class)->name('detail');
    });


    // Teacher
    Route::prefix('teacher')->name('teacher.')->group(function () {
        Route::get('/', \App\Http\Livewire\Teacher\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Teacher\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Teacher\Detail::class)->name('detail');
    });

    // Subject
    Route::prefix('subject')->name('subject.')->group(function () {
        Route::get('/', \App\Http\Livewire\Subject\Index::class)->name('index');
        Route::get('/create', \App\Http\Livewire\Subject\Create::class)->name('create');
        Route::get('/detail', \App\Http\Livewire\Subject\Detail::class)->name('detail');
    });
});