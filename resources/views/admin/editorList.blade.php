@extends('layouts.app')

@section('title')
    @parent | Редактор
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="mb-5">
        <h1>Все новости</h1>
    </div>
    <div>
        @forelse($allNews as $news)
            <div class="mb-3">
                <p class="m-0">{{ $news->title }}</p>
                <a href="{{ route('admin.editor-form', $news->id) }}" class="text-decoration-none">Редактировать</a>
            </div>
        @empty
            <div>
                <p>Упс! Что-то пошло не так :(</p>
            </div>
        @endforelse
    </div>
@endsection
