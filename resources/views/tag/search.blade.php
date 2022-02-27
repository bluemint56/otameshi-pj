<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/css/tagsearch.css" type="text/css" />
  <title>タグ検索</title>
</head>
<body>
@extends('layouts.default')

@section('title', 'TAG 検索')

@section('main')

<p>検索したいタグ名を入力してください</p>

<div class="s-form">
<form action="/tag/search" method="POST" class="tag-search">
  @csrf
<input type="text" name="tag" placeholder="例）仕事">
<button type="submit" class="search-btn">検索</button>
</form>
</div>

<div class="search-table">
<table>
    <tr>
      <th>作成時刻</th>
      <th>タスクID</th>
      <th>タグ名</th>
    </tr>

@foreach($tags as $tag)
      <tr>
        <td>{{$tag->updated_at}}</td>
        <td>{{$tag->todos_id}}</td>
        <td>{{$tag->tag}}</td>
      </tr>
@endforeach
</table>
</div>

<div class="tag-link">
<a href="/relation" class="tt-btn">タスク&タグ</a>
<a href="/tag" class="t-btn">タグ編集</a>
<a href="/home" class="home-btn">トップページへ</a>
</div>

@endsection
</body>
</html>
