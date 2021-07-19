<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function room() {
    // get room data from db

    return view('services.room');
  }

  public function service() {
    // get service data from db

    return view('services.service');
  }  
}
