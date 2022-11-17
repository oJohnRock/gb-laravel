@extends('layouts.main')

@section('title')
@parent | Новости
@endsection

@section('content')

<h1>Новости</h1>
<!-- <p><a href="< ?= route('news.category.index') ?>">Все категории</a></p> -->

<h2>Категории</h2>
@forelse($categories as $item)
<a href="{{ route('news.category.show', $item['slug']) }}">{{ $item['title'] }}</a>
@empty
<p>Категорий нет</p>
@endforelse

<h2>Все новости</h2>
@forelse($news as $item)
<a href="{{ route('news.show', $item['id']) }}">{{ $item['title'] }}</a>
@empty
<p>Новостей нет</p>
@endforelse

@endsection