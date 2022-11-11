@extends('layouts.app')

@section('title', 'Редактирование новости')


@section ('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Редактировать новость') }}</div>
                    <div class="card-body">

                        @include('inc.message')
                        <form action="{{ route('admin.editor-form', $news->id) }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="newsTitle">Заголовок новости</label>
                                <input type="text" name="title" id="newsTitle" class="form-control"
                                       value="{{ $news->title }}">
                                @error('title') <span style="color: red">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="newsCategory">Категория новости</label>
                                <select name="category_id" id="newsCategory" class="form-control">
                                    @forelse($categories as $categoryItem)
                                        <option @if ($categoryItem->id == $news->category_id) selected
                                                @endif value="{{ $categoryItem->id }}">{{ $categoryItem->name }}</option>
                                    @empty
                                        <option value="0" selected>Нет категории</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="newsText">Текст новости</label>
                                <textarea name="text" id="newsText" class="form-control">{!! $news->text !!}</textarea>
                                @error('text') <span style="color: red">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-check mb-3">
                                <input name="is_private" type="hidden" value="0">
                                <input @if ($news->is_private == "1") checked @endif id="newsPrivate" name="is_private"
                                       type="checkbox" value="1" class="form-check-input">
                                <label for="newsPrivate">Приватная</label>
                            </div>

                            <div class="form-group mb-3">
                                <input type="submit" class="btn btn-outline-primary" value="Добавить новость">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#newsText'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
