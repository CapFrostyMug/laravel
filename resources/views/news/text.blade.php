@extends('layouts.app') {{-- Путь до главного шаблона --}}

@section('title')
    @parent | Текст новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @if ($newsText)
        @if (!$newsText['isPrivate'])
            <div class="mb-5">
                <h1>Текст новости</h1>
            </div>
            <div>
                <p class="h4"><?= $newsText['text'] ?></p>
            </div>
        @else
            <h2 class="mb-5">Зарегистрируйтесь для просмотра ¯\_(ツ)_/¯</h2>
            <h4><a href="{{ route('login') }}">Регистрация</a></h4>
        @endif
    @else
        <h2>Что-то пошло не так :(</h2>
    @endif
@endsection
