<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [HomeController::class, 'about']);

// Route::get('/test', [HomeController::class, 'test']);

// Route::get('/test/{id}', [HomeController::class, 'test']);



// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [HomeController::class, 'about']);

// Route::get('/add', [HomeController::class, 'tambah']);

// Route::post('/save', [HomeController::class, 'simpan']);

// Route::get('/test', [HomeController::class, 'test']);


Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/add', [HomeController::class, 'tambah']);

Route::post('/save', [HomeController::class, 'simpan']);

Route::get('/makanan', [HomeController::class, 'view_makanan']);


Route::get('/test_query_builder', [HomeController::class, 'test_query_builder']);
Route::get('/test_eloquent', [HomeController::class, 'test_eloquent']);





















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