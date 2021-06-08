<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
   public function index(){
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
      return ['name' => 'veg pizzas', 'base' => 'classic'];
   };

   public function show($id){
      return view('details', ['id' => $id]);
   };
}
