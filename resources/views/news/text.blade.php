@extends('layouts.app') {{-- Путь до главного шаблона --}}

@section('title')
    @parent | Текст новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    @foreach($news as $item)
        @if(!$item->is_private)
            <div class="mb-5">
                <h1><?= $item->title ?></h1>
            </div>
            <div>
                <p class="h4"><?= $item->text ?></p>
            </div>
        @else
            <h2 class="mb-5">Зарегистрируйтесь для просмотра ¯\_(ツ)_/¯</h2>
            <h4><a href="{{ route('login') }}">Регистрация</a></h4>
        @endif
    @endforeach
@endsection

@section('footer')
    @include('footer')
@endsection
