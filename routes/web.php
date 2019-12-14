<?php

// Load the app view
Route::get('/', function () {
    return view('app');
});

Route::get('/allTodos', "TodosController@index");
Route::post('/todos', 'TodosController@store');
Route::delete('/todos/{todo}', 'TodosController@destroy');