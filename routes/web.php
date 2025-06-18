<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::controller(StudentController::class)->group(function () {
    Route::get('/students', 'index')->name('dashboard'); 
    Route::post('/students', 'store')->name('student.store');
    Route::get('/students/create', 'create')->name('student.create');
    Route::get('/students/{id}', 'show')->name('student.show');
    Route::put('/students/{id}', 'update')->name('student.update');
    Route::delete('/students/{id}', 'destroy')->name('student.destroy');
});
