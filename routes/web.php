<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelTab;
use App\Http\Controllers\HotelTabController;
use App\Http\Controllers\HotelTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomTypeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",[HomeController::class,"index"])->name("dashboard");


Route::prefix('hotel')->group(function () {
    Route::get("/hotels",[HotelController::class,"index"])->name("hotel");
    Route::get("/hotels/tab",[HotelTabController::class,"index"])->name("hotel_tab");
});

Route::prefix('room_types')->group(function () {
    Route::get("/roomtypes",[RoomTypeController::class,"index"])->name("room_types");
});

Route::prefix('hotel_types')->group(function () {
    Route::get("/hotel_types",[HotelTypeController::class,"index"])->name("hotel_types");
    Route::post("/hotel_types/store",[HotelTypeController::class,"store"])->name("hotel_types.store");
    Route::get("/hotel_types/all",[HotelTypeController::class,"all"])->name("hotel_types.all");
    Route::delete("/hotel_types/delete/{id}",[HotelTypeController::class,"delete"])->name("hotel_types.delete");
    Route::get("/hotel_types/find/{id}",[HotelTypeController::class,"find"])->name("hotel_types.find");
    Route::post("/hotel_types/update/{id}",[HotelTypeController::class,"update"])->name("hotel_types.update");
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard/index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
