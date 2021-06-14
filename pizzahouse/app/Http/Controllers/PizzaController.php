<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
   public function index(){
     // get all
         $pizzas = Pizza::all();

     // order alphabetically
        // $pizzas = Pizza::orderBy('name') -> get();

     // order in alphabetical descending order
        // $pizzas = Pizza::orderBy('name', 'desc') -> get();

     // get by type
        // $pizzas = Pizza::where('type', 'Hawaiian') -> get();


      return view('pizzas.index', [
        'pizzas' => $pizzas,
      ]);
   }

   public function show($id){

     $pizza = Pizza::findOrFail($id);

      return view('pizzas.show', ['pizza' => $pizza]);
   }


   public function create(){
      return view('pizzas.create');
   }


   public function store() {

      $pizza = new Pizza();

      $pizza -> name = request('name');
      $pizza -> type = request('type');
      $pizza -> base = request('base');
      $pizza -> base = request('base');
      $pizza -> toppings = request('toppings');

      // logging the pizza object to the console
      // error_log($pizza);

       $pizza -> save();

      return redirect('/') -> with('message', 'Thanks for your order');
   }

   public function destroy($id) {
     $pizza = Pizza::findOrFail($id);
     $pizza -> delete();

     return redirect('/pizzas');
   }

}
