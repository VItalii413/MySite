  <div class="product-item">
    <img src="img/<?php echo $product['image'];?>" alt="">
    <div class="product-list">
      <h3>{{$product->name}}</h3>
      <span class="price">₴ {{$product->price}}</span>
      <form action="{{route('basket-add', $product)}}" method="POST">
        <button type="submit" class="btn btn-primary" role="button">В корзину</button>
        @csrf
      </form>
    </div>
  </div>
    