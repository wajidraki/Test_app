<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstituationController;


Route::get('/',function (){
    return view('welcome');
});


Route::get('/student',[StudentController::class,'index']);
Route::post('/student/Registration',[StudentController::class,'store'])->name('student.store');
Route::get('/details/{id}',[StudentController::class,'show'])->name('student.show');
Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');

Route::get('/edit/{id}',[\App\Http\Controllers\StudentController::class,'edit'])->name('student.edit');
Route::post('/update/save/{id}',[\App\Http\Controllers\StudentController::class,'update'])->name('student.update');


Route::get('/level',[LevelController::class,'index']);
//Route::post('/level/store',[LevelController::class,'store'])->name('level.store');



Route::get('/instituatition',[ InstituationController::class, 'index']);
Route::post('/instituatition/store',[ InstituationController::class, 'store'])->name('instituation.store');
Route::get('/instituatition/details',[ InstituationController::class, 'indexo']);
