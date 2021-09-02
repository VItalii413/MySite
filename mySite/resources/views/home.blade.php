@extends('layout')
@section('title', 'Главная')
@section('content')
<div class="block__body">
  <div class="image-slider swiper-container">
    <div class="image-slider__wrapper swiper-wrapper">
      <div class="image-slider__slide swiper-slide">
        <div class="image-slider__image">
          <img src="img/slider1.jpg" alt="Картинка">
          <h2>Lorem ipsum dolor sit.!</h2>
        </div>
      </div>
      <div class="image-slider__slide swiper-slide">
        <div class="image-slider__image">
          <img src="img/slider2.jpg" alt="Картинка">
          <h2>Lorem ipsum dolor sit amet.!</h2>
        </div>
      </div>
      <div class="image-slider__slide swiper-slide">
        <div class="image-slider__image">
          <img src="img/slider3.jpg" alt="Картинка">
          <h2>Lorem ipsum dolor sit amet consectetur.!</h2>
        </div>
      </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- РЕКОМЕНДАЦИИ-меню -->
<div class="text1">
  <h1>Наши рекомендации</h1>
</div>
<div class="flex-container">
  @foreach($products as $product)
  @include('card', compact('product'))
  @endforeach
</div>

<!-- О нас -->
<div class="text1">
  <h1>О нас</h1>
</div>

<div class="about">

  <p><img src="img/slider1.jpg" alt="logo" class="leftImg" width="50%">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum cum soluta omnis praesentium voluptate beatae repudiandae accusamus commodi aperiam,
    earum quo vero a maxime facere provident sed error! Reprehenderit inventore veniam aliquid accusantium iste molestiae doloremque voluptatum placeat facere.
    Neque perferendis earum exercitationem fuga consequatur ipsa asperiores magni perspiciatis non nesciunt qui eos aliquam ratione ducimus eveniet sit dolor,
    recusandae voluptatem pariatur officia officiis. Voluptatum soluta tenetur aliquam sint excepturi. Iste vero ex aspernatur quasi, repellat inventore nam amet
    tempora rerum necessitatibus rem autem eligendi dolor, molestiae delectus consectetur exercitationem id. Consectetur, ad error. Pariatur aperiam architecto
    corporis? Nam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum cum soluta omnis praesentium voluptate beatae repudiandae accusamus commodi aperiam,
    earum quo vero a maxime facere provident sed error! Reprehenderit inventore veniam aliquid accusantium iste molestiae doloremque voluptatum placeat facere.
    Neque perferendis earum exercitationem fuga consequatur ipsa asperiores magni perspiciatis non nesciunt qui eos aliquam ratione ducimus eveniet sit dolor,
    recusandae voluptatem pariatur officia officiis. Voluptatum soluta tenetur aliquam sint excepturi. Iste vero ex aspernatur quasi, repellat inventore nam amet
    tempora rerum necessitatibus rem autem eligendi dolor, molestiae delectus consectetur exercitationem id. Consectetur, ad error. Pariatur aperiam architecto
    corporis? Nam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum cum soluta omnis praesentium voluptate beatae repudiandae accusamus commodi aperiam,
    earum quo vero a maxime facere provident sed error! Reprehenderit inventore veniam aliquid accusantium iste molestiae doloremque voluptatum placeat facere.
    Neque perferendis earum exercitationem fuga consequatur ipsa asperiores magni perspiciatis non nesciunt qui eos aliquam ratione ducimus eveniet sit dolor,
    recusandae voluptatem pariatur officia officiis. Voluptatum soluta tenetur aliquam sint excepturi. Iste vero ex aspernatur quasi, repellat inventore nam amet
    tempora rerum necessitatibus rem autem eligendi dolor, molestiae delectus consectetur exercitationem id. Consectetur, ad error. Pariatur aperiam architecto
    corporis? Nam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum cum soluta omnis praesentium voluptate beatae repudiandae accusamus commodi aperiam,
    earum quo vero a maxime facere provident sed error! Reprehenderit inventore veniam aliquid accusantium iste molestiae doloremque voluptatum placeat facere.
    Neque perferendis earum exercitationem fuga consequatur ipsa asperiores magni perspiciatis non nesciunt qui eos aliquam ratione ducimus eveniet sit dolor,
    recusandae voluptatem pariatur officia officiis. Voluptatum soluta tenetur aliquam sint excepturi. Iste vero ex aspernatur quasi, repellat inventore nam amet
    tempora rerum necessitatibus rem autem eligendi dolor, molestiae delectus consectetur exercitationem id. Consectetur, ad error. Pariatur aperiam architecto
    corporis? Nam.</p>
</div>

@endsection