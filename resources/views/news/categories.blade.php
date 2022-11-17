@extends('layouts.main')

@section('title')
@parent | Категории
@endsection

@section('content')

<h1>Категории</h1>

<nav>
    @foreach ($categories as $item)
    <a href="{{ route('news.category.show', $item['slug']) }}">{{ $item['title'] }}</a>
    @endforeach
</nav>
@endsection