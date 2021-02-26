<?php

use App\Http\Controllers\{HomeController, PostController, RekapController, BayiController, ImunisasiController,WilayahController};
use App\Models\Wilayah;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::view('dashboard', 'dashboard');

Route::get('/', HomeController::class);


// Post
Route::get('posts', [PostController::class, 'index'])->name('index');

Route::get('posts/create', [PostController::class, 'create'])->name('create');
Route::post('posts/postadd', [PostController::class, 'postadd'])->name('postadd');

Route::get('posts/{post:slug}/edit', [PostController::class, 'edit'])->name('edit');
Route::patch('posts/{post:slug}/edit', [PostController::class, 'update'])->name('update');
Route::delete('posts/{post:slug}/delete', [PostController::class, 'delete'])->name('delete');

Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('show');


// Bayi
Route::get('bayis', [BayiController::class, 'bayi'])->name('bayi');

Route::get('bayis/create', [BayiController::class, 'create'])->name('create');
Route::post('bayis/tambah', [BayiController::class, 'tambah'])->name('tambah');

Route::get('bayis/{bayi:slug}/edit', [BayiController::class, 'edit'])->name('edit');
Route::patch('bayis/{bayi:slug}/edit', [BayiController::class, 'update'])->name('update');
Route::get('bayis/{bayi:slug}/delete', [BayiController::class, 'delete'])->name('delete');

// Wilayah
Route::get('wilayahs', [WilayahController::class, 'wilayah'])->name('wilayah');

Route::get('wilayahs/create', [WilayahController::class, 'create'])->name('create');
Route::post('wilayahs/tambah', [WilayahController::class, 'tambah'])->name('tambah');

Route::get('wilayahs/{wilayah:slug}/edit', [WilayahController::class, 'edit'])->name('edit');
Route::patch('wilayahs/{wilayah:slug}/edit', [WilayahController::class, 'update'])->name('update');
Route::delete('wilayahs/{wilayah:slug}/delete', [WilayahController::class, 'delete'])->name('delete');


// Rekap
Route::get('rekaps', [RekapController::class, 'rekap'])->name('rekap');

Route::get('rekaps/create', [RekapController::class, 'create'])->name('create');
Route::post('rekaps/tambah', [RekapController::class, 'tambah'])->name('tambah');

Route::get('rekaps/{rekap:slug}/edit', [RekapController::class, 'edit'])->name('edit');
Route::patch('rekaps/{rekap:slug}/edit', [RekapController::class, 'update'])->name('update');
Route::delete('rekaps/{rekap:slug}/delete', [RekapController::class, 'delete'])->name('delete');

// Imunisasi
Route::get('imunisasis', [ImunisasiController::class, 'imunisasi'])->name('imunisasi');

Route::get('imunisasis/create', [ImunisasiController::class, 'create'])->name('create');
Route::post('imunisasis/tambah', [ImunisasiController::class, 'tambah'])->name('tambah');

Route::get('imunisasis/{imunisasi:slug}/edit', [ImunisasiController::class, 'edit'])->name('edit');
Route::patch('imunisasis/{imunisasi:slug}/edit', [ImunisasiController::class, 'update'])->name('update');
Route::delete('imunisasis/{imunisasi:slug}/delete', [ImunisasiController::class, 'delete'])->name('delete');

// Anggota
Route::view('anggota', 'anggotas/anggota');

Route::view('informasi', 'informasi/informasi');

Route::view('login','login');
