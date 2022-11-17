@extends('layouts.main')

@section('title')
@parent | Новости
@endsection

@section('content')

@if ($news)
@if (!$news['is_private'])
<h1>{{ $news['title'] }}</h1>
<p>{{ $news['text'] }}</p>
@else
<p>Зарегистрируйтесь для просмотра</p>
@endif
@else
<h1>Нет такой новости</h1>
@endif

@endsection