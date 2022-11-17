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
        @forelse($news as $item)
            <div class="mb-3">
                <p class="m-0">{{ $item->title }}</p>
                <a href="{{ route('admin.editor-form', $item->id) }}" class="text-decoration-none">Редактировать</a>
            </div>
        @empty
            <div>
                <p>Упс! Что-то пошло не так :(</p>
            </div>
        @endforelse
    </div>
@endsection
