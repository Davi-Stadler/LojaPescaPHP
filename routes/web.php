<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/sobrenos', function() {
    return view('sobrenos');});

    Route::get('/produtos', function() {
        return view('produtos');});

        Route::get('/localizacao', function() {
            return view('localizacao');});
    