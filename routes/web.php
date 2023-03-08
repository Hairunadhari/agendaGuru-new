<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AgendaController;

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
    return view('auth/login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/proseslogin', [AuthController::class, 'proseslogin']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::resource('agenda', AgendaController::class);
Route::resource('guru', GuruController::class);
Route::resource('kelas', KelasController::class);
?>

