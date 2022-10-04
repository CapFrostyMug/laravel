@extends('layouts.main') {{-- Путь до главного шаблона --}}

@section('title')
    @parent | Авторизация
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div>
        <h1>Авторизация</h1>
    </div>
    <div>
        <form>
            <div>
                <input type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$"
                       id="username" placeholder="Логин / Email" required>
            </div>
            <div>
                <input type="password" name="Пароль" minlength="6" id="password" placeholder="Пароль" required style="margin: 10px 0">
            </div>
            <div>
                <button type="submit">Войти</button>
            </div>
        </form>
    </div>
@endsection
