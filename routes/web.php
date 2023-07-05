<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\AsesoriasController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\VisionController;


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
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/Servicios',[ServiciosController::class,'index'])->name('Servicios.index');
Route::get('/Servicios/Asesorias',[AsesoriasController::class,'index'])->name('Asesorias.index');
Route::get('/Nosotros',[NosotrosController::class,'index'])->name('Nosotros.index');
Route::get('/Vision',[VisionController::class,'index'])->name('Vision.index');