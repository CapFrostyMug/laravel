@extends('layouts.app') {{-- Путь до главного шаблона --}}

@section('title')
    @parent | Главная
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div>
        <h1>Добро пожаловать!</h1>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
