@extends('layout')

@section('content')
      <h1>Pizzas</h1>
      <div class="content">
        <div class="pizza-list-title">
          <h2>Pizza list</h2>
        </div>

          @foreach($pizzas as $pizza)
          <div>
            {{ $pizza['type'] }} - {{ $pizza['base'] }}
          </div>
          @endforeach

        </div>
@endsection
