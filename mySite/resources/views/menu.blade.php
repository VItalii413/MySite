@extends('layout')
@section('title', 'Меню')
@section('content')
<div class="text1">
        <h1>Меню</h1>
      </div>
      <!-- Меню вверх -->
      <div class="flex-container">
        @foreach($products as $product)
          @include('card', compact('product'))
        @endforeach
      </div>
@endsection