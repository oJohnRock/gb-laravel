@extends('layouts.main')

@section('title')
@parent | Категории
@endsection

@section('content')

<h1>{{ $category }}</h1>

<nav>
    @foreach ($news as $item)
    <a href="{{ route('news.show', $item['id']) }}">{{ $item['title'] }}</a>
    @endforeach
</nav>

@endsection