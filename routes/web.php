<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', [HomeController::class, 'index']);


Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/add', [MenuController::class, 'add']);
Route::get('/menu/{id}/edit', [MenuController::class, 'edit']);
Route::get('/menu/{id}/delete', [MenuController::class, 'delete']);
Route::post('/menu/save', [MenuController::class, 'save']);


Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/add', [KategoriController::class, 'add']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete']);
Route::post('/kategori/save', [KategoriController::class, 'save']);




















// Route::get('home', function () {
//     return view('home');
// });

// Route::get('about', function () {
//     return view('about');
// });



// Route::get('/hallo', function () {

//     return view('admin.hallo', ['nama' => 'IK2', 'alamat' => 'jl.supriyadi no.05', 'title' => 'Woiii']);
// });


// Route::get('/login', function () {

//     $nama = 'Uncle Atong';

//     $lampu = 1;

//     $kelas = env('KELAS', 'Data Kelas tidak ada');

//     $nilai = "B";

//     $perulangan_for = 100;

//     $hobi_banyak = [
//         'Memancing',
//         'Membaca',
//         'Traveling',
//         'Memasak',
//         'Bersepeda',
//         'Berenang',
//     ];

//     return view('admin.login', [
//         'nama' => $nama,
//         'kelas' => $kelas,
//         'lampu' => $lampu,
//         'nilai' => $nilai,
//         'limit' => $perulangan_for,
//         'hobbies' => $hobi_banyak,

//     ]);
// });