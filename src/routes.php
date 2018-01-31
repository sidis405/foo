<?php


Route::get('calculator', function () {
    echo 'Hello from the calculator package!';
});


Route::get('add/{a}/{b}', 'Sid\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Sid\Calculator\CalculatorController@subtract');
