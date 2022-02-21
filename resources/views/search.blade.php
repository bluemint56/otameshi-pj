<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/css/search.css" type="text/css" />
  <title>検索ページ</title>
</head>
<body>
@extends('layouts.default')

@section('title', 'Todo List')

@section('main')
<div class="search-ttl">
<h3>検索<h3>
</div>

<form action="/todo/find" method="POST">
  @csrf
  <input type="hidden" name="updated_at">
    <p>日付を入力してください</p>
  <div class="f-search">
  <input type="date" name="updated_at" class="frame" placeholder="例: 2022-01-01">
  <button type="submit" class="search-btn">検索</button>
  </div>
</form>

<table>
    <tr>
      <th>作成時刻</th>
      <th>タスク名</th>
    </tr>

@foreach($todos as $todo)
      <tr>
        <td>{{$todo->updated_at}}</td>
        <td>{{$todo->content}}</td>
      </tr>
@endforeach

</table>

<div class="back-home">
<a href="/home" class="home-btn">トップページに戻る</a>
</div>

@endsection
</body>
</html>