<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandymanController extends Controller
{
    public function index() {
      // get handyman list from DB :



require __DIR__ . '/vendor/autoload.php';

$client = Algolia\AlgoliaSearch\SearchClient::create(
  'undefined',
  'undefined'
);

$index = $client->initIndex('your_index_name');









      return view('');
    }

    public function show() {
      // show handyman details from DB;

      return view('');
    }
}
