<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

//naar home controller
Route::get('/', [HomeController::class, 'index']);

//Route::get('/cards', [\App\Http\Controllers\CardController::class, 'index'])->name('cards.index')->middleware('auth');
//Route::get('/cards/{card}', [\App\Http\Controllers\CardController::class, 'show'])->name('cards.show')->middleware('auth');

Route::resource('cards', CardController::class)->middleware('auth');

//Route::get('/cards/{$id}', [HomeController::class, 'show']);

//Route::get('/create', function() {
//    return view('addcard');
//});

//Route::get('/contact', function() {
//    $company = 'Hogeschool Rotterdam';
//    return view('contact', [
//        'company' => $company
//    ]);
//});
//
//Route::get('products/{name}', function(string $name) {
//    return view('product', [
//        'product' => $name
//    ]);
//});
//named route
//Route::get('test/{id}', function(string $id) {
//    return view('test',['id' => $id]);
//})->name('test');

//Route::get('tests', TestController::class,'index');
//Route::get('tests/{id}', TestController::class,'show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
