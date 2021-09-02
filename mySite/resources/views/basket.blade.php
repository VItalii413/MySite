@extends('layout')
@section('title', 'Корзина')
@section('content')

<div class="text1">
  <h1>Корзина</h1>
</div>
<div class="flex-basket">
  @foreach($order->products as $product)

  <div class="product-item">
    <img src="img/<?php echo $product['image']; ?>" alt="">
    <div class="product-list">
      <h3>{{$product->name}}</h3>
      <span class="price">₴ {{$product->price}}</span>
      @csrf
    </div>
  </div>
  <form action="{{route('basket-remove', $product)}}" method="POST">
    <button type="submit" class="btn btn-success" href="">
      <span class="fa fa-trash-o" aria-hidden="true" href=""></span>
    </button>
    @csrf
  </form>
  @endforeach
</div>
<div class="fullPrice">
  <td colspan="">Общая стоимость:</td>
  <td>{{$order -> getFullPrice()}} UAN</td>
</div>
<form action="{{route('basket-place')}}" method="POST">
  <button type="submit" class="btn btn-success" href=""> Оформить заказ</button>
  @csrf
</form>
@endsection