<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController ;

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





/*------------ Main Nav-Urls ------------*/
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/services', [PageController::class, 'services'])->name('services');
    Route::get('/services/canal-transit', [PageController::class, 'canalTransit'])->name('services.canal_transit');
    Route::get('/services/huspandary', [PageController::class, 'huspandary'])->name('services.huspandary');
    Route::get('/services/novcc', [PageController::class, 'novcc'])->name('services.novcc');
    Route::get('/services/sea-freight', [PageController::class, 'seaFreight'])->name('services.sea-freight');

Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');







/*------------ Redirect Unmatched URLs ------------*/
Route::get('/{any}', [PageController::class, 'home'])->where('any', '.*');

