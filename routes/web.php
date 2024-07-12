<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/', [MovieController::class, 'index']);
Route::get('/generate-barcode/{title}', function ($title) {
    $qrCode = QrCode::size(300)->generate($title);
    return view('movies/barcode', compact('qrCode'));
})->name('generateBarcode');

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

// Route::get('/', function () {
//     return view('welcome');
// });
