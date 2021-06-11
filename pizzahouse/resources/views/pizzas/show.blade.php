@extends('layout')

@section('content')
  <div class="wrapper-pizza-details">
    <h1> Order for {{ $pizza -> name }}</h1>
    <p class="type"> Type: {{ $pizza -> type }}</p>
    <p class="base"> Base: {{ $pizza -> base }}</p>
  </div>

  <div class="link-wrap">
    <a href="/pizzas">Back to all pizzas</a>
  </div>
@endsection
