@extends('layout')
@section('title', 'Вход')
@section('content')
<div class="text1">
    <h1>Вход</h1>
</div>
<center>
    <form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.login')}}">
        @csrf
        <fieldset>
            <legend align="right">Sign In</legend>
            <table>
                    <tr>
                        <td><label for="email">Введите email:</label></td>
                        <td><input id="email" name="email" value="" type="email" placeholder="Почта"></td>
                        @error('email')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </tr>
                    <tr> 
                        <td><label for="password">Введите пароль:</label></td>
                        <td><input id="password" name="password" value="" type="password" placeholder="Пароль"></td>
                    </tr>
                </table>
            <button type="submit">Войти</button>
        </fieldset>
    </form>
</center>
@endsection