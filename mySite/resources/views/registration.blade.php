@extends('layout')
@section('title', 'Регистрация')
@section('content')
<div class="text1">
    <h1>Регистрация</h1>
  </div>
<center>
        <form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.registration')}}">
            @csrf
            <fieldset>
                <legend align="right">Sign up</legend>
                <table>
                    <tr>
                        <td><label for="name">Введите имя:</label></td>
                        <td><input id="name" name="name" type="text" value="" placeholder="Имя"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Введите пароль:</label></td>
                        <td><input id="password" name="password" value="" type="password" placeholder="Пароль"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Введите email:</label></td>
                        <td><input id="email" name="email" value="" type="email" placeholder="Почта"></td>
                        @error('email')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </tr>
                    <tr>
                        <td><label for="phone">Введите телефон:</label></td>
                        <td><input type="text" name="phone" id="phone" class="form-control" placeholder="Телефон"></td>
                    </tr>
                </table>
                <div class="g-recaptcha" data-sitekey="КЛЮЧ_САЙТА"></div>
                <button type="submit">Регистрация</button>
            </fieldset>
        </form>
</center>
@endsection