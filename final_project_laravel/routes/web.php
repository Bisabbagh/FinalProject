<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ImageController;
use App\Models\Point;
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


Route::get('/', [TemplateController::class,'index'])->name('home');

Route::get('/serves', [TemplateController::class,'serves'])->name('serves');
Route::get('/lstsss', [TemplateController::class,'admin'])->name('admin');

Route::get('/table', [TemplateController::class,'table'])->name('table');
Route::get('/tablecp', [PointController::class,'create'])->name('createpoint');
Route::get('/editpoint{point}', [PointController::class,'edit'])->name('editpoint');
Route::put('/update{point}', [PointController::class,'update'])->name('updatepoints');
Route::delete('/delete{point}', [PointController::class,'delete'])->name('deletepoints');

Route::post('/points/view', [PointController::class,'store'])->name('storepoints');
Route::get('/view', [PointController::class,'view'])->name('pointview');


Route::post('/upload-image', [ImageController::class, 'upload'])->name('upload.image');
Route::post('/upload-image2', [ImageController::class, 'upload2'])->name('upload.image2');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
