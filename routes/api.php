<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\carteraController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\notasContables;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Login and user
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/user', [userController::class, 'index']);

// Contactos
Route::get('/contactos',[contactoController::class,'index']);
Route::post('/crear/contacto',[contactoController::class,'store']);

// Cartera
Route::post('/cartera',[carteraController::class,'store']);
Route::post('/cartera/{id_contacto}',[carteraController::class,'show']);

// Notas
Route::post('/notas',[notasContables::class,'store']);
Route::post('/notas/{id_nota}',[notasContables::class,'show']);

