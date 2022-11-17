@extends('layouts.app') {{-- Путь до главного шаблона --}}

@section('title')
    @parent | Новости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="mb-5">
        <h1>Категория ...</h1>
    </div>
    <div>
        <ul class="list-group">
            @forelse($news as $item)
                <li class="list-group-item h4 mb-2">
                    <a href="{{ route('news-text', [$item->category_id, $item->id]) }}" class="text-decoration-none">{{ $item->title }}</a>
                </li>
            @empty
                <li class="list-group-item"><p>Сегодня новостей нет</p></li>
            @endforelse
        </ul>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
