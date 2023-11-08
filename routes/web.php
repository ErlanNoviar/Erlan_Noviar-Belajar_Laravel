<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     $nama = 'Erlan Noviar';

//     $mahasiswa = [
//         [
//             'nama' => 'Erlan Noviar',
//             'nim' => '20110022'
//         ]
//     ];
//     return view('admin/biodata', compact('nama', 'mahasiswa'));
// });

// Route::get('/biodata', function () {
//     $nama = 'Erlan Noviar';

//     $hitung = 2;
//     $mahasiswa = [
//         [
//             'nama' => 'Erlan Noviar',
//             'nim' => '20110022'
//         ]
//     ];
//     return view('pages.biodata', compact('mahasiswa','hitung'));
// });
Route::get("/", [HomeController::class,"index"]);