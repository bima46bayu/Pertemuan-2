<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


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
// Route::get('/about', function () {
//     return view('about', [
//         "name" => "lala",
//         "email" => "lala@gmail.com"
//     ]);
// });
Route::get('/buku', [BukuController::class, 'index']);
// Route::get("/about",[Controller::class, "index"]);
