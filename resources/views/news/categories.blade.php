@extends('layouts.app') {{-- Путь до главного шаблона --}}

@section('title')
    @parent | Категории
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="mb-5">
        <h1>Новости по категориям</h1>
    </div>
    <div>
        <ul class="list-group">
            @forelse($categories as $category)
                <li class="list-group-item h3">
                    <a href="{{ route('news-titles', $category['slug']) }}" class="text-decoration-none">{{ $category['name'] }}</a>
                </li>
            @empty
                <li class="list-group-item"><p>Категории отсутствуют</p></li>
            @endforelse
        </ul>
    </div>
@endsection
