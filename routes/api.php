<?php

use App\Http\Controllers\RoupasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('cadastroRoupas',[RoupasController::class,'cadastroRoupas']);
Route::get('pesquisaCategoria/{busca}',[RoupasController::class,'pesquisarPorCategoria']);
Route::get('excluir/{id}',[RoupasController::class,'excluir']);
Route::get('vizualizar',[RoupasController::class,'retornarTodos']);
Route::put('editar',[RoupasController::class,'editar']);

