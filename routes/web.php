<?php

use App\Http\Controllers\CouncilStructureController;
use App\Http\Controllers\DeputiesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\SettlementsController;
use App\Http\Controllers\StructureController;
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
    return view('district');
})->name('home');

Route::prefix('/district')->group(function () {
    Route::get('/', function () {
        return view('district');
    })->name('district');

    Route::get('/settlements', [SettlementsController::class, 'index'])->name('settlements');

    Route::get('/phones', [PhonesController::class, 'index'])->name('phones');
});

Route::prefix('/about')->group(function () {
    Route::get('/', function () {
        return view('about');
    })->name('about');

    Route::get('/about_structure', [StructureController::class, 'index'])->name('about_structure');

    Route::get('/isystems', function () {
        return view('isystems');
    })->name('isystems');

    Route::get('/contacts', function () {
        return view('contacts');
    })->name('contacts');
});

Route::prefix('/council')->group(function () {
    Route::get('/', function () {
        return view('council');
    })->name('council');

    Route::get('/councilstructure', [CouncilStructureController::class, 'index'])->name('councilstructure');

    Route::get('/deputies', [DeputiesController::class, 'index'])->name('deputies');
});

Route::prefix('/presscenter')->group(function (){
    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.id');
    Route::get('/events', [EventsController::class, 'index'])->name('events');
    Route::get('/events/{id}', [EventsController::class, 'show'])->name('events.id');
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
    Route::post('/feedback', [FeedbackController::class, 'send']);
    Route::get('/answer', [FeedbackController::class, 'answers'])->name('answers');
});

