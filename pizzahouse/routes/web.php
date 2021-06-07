<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {

    // get data from db

     $pizzas = [
       ['type' => "Hawaiian",'base' => "Cheesy Crust"],
       ['type' => "Volcano",'base' => "Garlic Crust"],
       ['type' => "Veg Supreme",'base' => "Thin & Crispy"]
     ];

  request('name');

     return view('pizzas', [
       'pizzas' => $pizzas,
     ]);
     // return ['name' => 'veg pizzas', 'base' => 'classic'];
});
