<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SushiSite: @yield('title')</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/sign-up.css">
  <link rel="stylesheet" href="css/basket.css">
  <link rel="stylesheet" href="css/card.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />


</head>

<div class="starter-template">
  @if(session()->has('success'))
  <p class="alert alert-success">{{ session()->get('success') }}</p>
  @endif
</div>

<body>
  <header>
    <nav>
      <input type="checkbox" id="checkbox-menu">
      <label for="checkbox-menu">
        <ul class="menu touch">
          <img src="img/Akatsuki.png" alt="logo" class="img">
          <li><a href="http://mysite/public"><i class="fa fa-"></i><b>Главная</b></a></li>
          <li><a href="http://mysite/public/about"><i class="fa fa-"></i><b>О нас</b></a></li>
          <li><a href="http://mysite/public/menu"><i class="fa fa-"></i><b>Меню</b></a></li>
          <li><a href="http://mysite/public/basket"><i class="fa fa-"></i><b>Корзина</b></a></li>
          <li><a href="http://mysite/public/login"><i class="fa fa-"></i><b>Войти</b></a></li>
          <li><a href="http://mysite/public/registration"><i class="fa fa-"></i><b>Регистрация</b></a></li>
        </ul>
        <span class="toggle">☰</span>
      </label>
    </nav>
  </header>

  @yield('content')

  <!-- Футер -->



  <footer class="footer-distributed">

    <div class="footer-right">

      <a href="https://ru-ru.facebook.com"><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/?lang=ru"><i class="fa fa-twitter"></i></a>
      <a href="https://www.instagram.com/?hl=ru"><i class="fa fa-instagram"></i></a>
      <a href="https://github.com"><i class="fa fa-github"></i></a>

    </div>

    <div class="footer-left">

      <p class="footer-links">
        <a class="link-1" href="http://mysite/public/home">Главная</a>
        <a href="#">Корзина</a>
        <a href="http://mysite/public/menu">Меню</a>
        <a href="http://mysite/public/about">О нас</a>
        <a href="#">Доставка</a>
      </p>

      <p>Company Name &copy; 2021</p>
    </div>

  </footer>


</body>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/main.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>

</html>