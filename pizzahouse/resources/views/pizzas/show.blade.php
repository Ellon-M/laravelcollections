@extends('layout')

@section('content')
  <div class="wrapper-pizza-details">
    <h1> Order for {{ $pizza -> name }}</h1>
    <p class="type"> Type: {{ $pizza -> type }}</p>
    <p class="base"> Base: {{ $pizza -> base }}</p>
    <p class="toppings"> Extra toppings: </p>
    <ul>
      @foreach($pizza -> toppings as $topping)
      <li>{{ $topping }}</li>
      @endforeach
    </ul>
    <form class="" action=""/pizzas/{{ $pizza -> id }}" method="POST">
        @csrf
        @method('DELETE')
        <button name="button">Complete Order</button>
    </form>
  </div>

  <div class="link-wrap">
    <a href="/pizzas">Back to all pizzas</a>
  </div>
@endsection
