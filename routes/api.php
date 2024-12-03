<?php

use App\Http\Controllers\ProfesorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\InscriptionsController;

//Rutas Estudiantes
Route::get('/students', [StudentController :: class, 'index']);


Route::get('/students/{id}', [StudentController :: class, 'show']);


Route::post('/students',[StudentController :: class, 'store'] );


Route::put('/students/{id}', [StudentController :: class, 'update']);


Route::delete('/students/{id}', [StudentController :: class, 'destroy']);


//Rutas Profesores

Route::get('/profesors', [ProfesorController :: class, 'index']);


Route::get('/profesors/{id}', [ProfesorController :: class, 'show']);


Route::post('/profesors',[ProfesorController :: class, 'store'] );


Route::put('/profesors/{id}', [ProfesorController :: class, 'update']);


Route::delete('/profesors/{id}', [ProfesorController :: class, 'destroy']);

//Rutas Categrorias

Route::get('/categories', [CategoriesController :: class, 'index']);


Route::get('/categories/{id}', [CategoriesController :: class, 'show']);


Route::post('/categories',[CategoriesController :: class, 'store'] );


Route::put('/categories/{id}', [CategoriesController :: class, 'update']);


Route::delete('/categories/{id}', [CategoriesController :: class, 'destroy']);

//Rutas Inscripciones

Route::get('/inscriptions', [InscriptionsController :: class, 'index']);


Route::get('/inscriptions/{id}', [InscriptionsController :: class, 'show']);


Route::post('/inscriptions',[InscriptionsController :: class, 'store'] );


Route::put('/inscriptions/{id}', [InscriptionsController :: class, 'update']);


Route::delete('/inscriptions/{id}', [InscriptionsController :: class, 'destroy']);