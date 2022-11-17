@extends('layouts.app') {{-- Путь до главного шаблона --}}

@section('title')
    @parent | Валюта
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="mb-5">
        <h1>Валюта</h1>
    </div>
    <div>
        <span></span>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
