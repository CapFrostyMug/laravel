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
        @foreach($currency as $key => $value)
            @foreach($value as $item)
                <div class="mb-4">
                    <p class="m-0">{{ $item['NumCode'] }}</p>
                    <p class="m-0">{{ $item['CharCode'] }}</p>
                    <p class="m-0">{{ $item['Nominal'] }}</p>
                    <p class="m-0">{{ $item['Name'] }}</p>
                </div>
            @endforeach
        @endforeach
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
