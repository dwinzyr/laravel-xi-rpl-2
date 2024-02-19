<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppControllers;
use App\Http\Controllers\KelassController;
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

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/project/about', function () {
//     return view('project.about'); 
// });

// Route::get('/project/contact', function () {
//     return view('project.contact');
// });

Route::get('/views/spp/create', function () {
        return view('views.spp.create');
    });

// Route Untuk mengelola GenreController

Route::controller(SppControllers::class)->group(function () {
    Route::get('/spp', 'index')->name('spp.index');
    Route::get('/spp/create', 'create')->name('spp.create');
    Route::post('/spp', 'store')->name('spp.store');
    Route::get('/spp/{spp}/edit', 'edit')->name('spp.edit');
    Route::get('/spp/{spp}', 'show')->name('spp.show');
    Route::put('/spp/{spp}', 'update')->name('spp.update');
    Route::delete('/spp/{spp}', 'destroy')->name('spp.destroy');
});

route::resource('/kelass', KelassController::class);