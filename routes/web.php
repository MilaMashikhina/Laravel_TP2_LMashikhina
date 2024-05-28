<?php

use App\Http\Controllers\Backoffice\DessertController as BackofficeDessertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DessertController;
use App\Http\Controllers\ModelController;
use App\Models\Dessert;
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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('desserts', [DessertController::class, 'index'])->name('desserts.index'); //home page
Route::get('desserts/{id}', [DessertController::class, 'show']); //individual page


//Route:: get('blade/directivas')

Route::get('models/all', [ModelController::class, 'all']); //db


//all the backoffice
Route::prefix('backoffice')->group(function () {
    Route::get('desserts', [BackofficeDessertController::class, 'index']);
    Route::get('desserts/create', [BackofficeDessertController::class, 'create']);
    Route::post('desserts', [BackofficeDessertController::class, 'store']);
    Route::get('desserts/{id}/edit', [BackofficeDessertController::class, 'edit']);
    Route::post('desserts/{id}', [BackofficeDessertController::class, 'update']);
});
