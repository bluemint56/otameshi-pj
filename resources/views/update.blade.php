<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/css/update.css" type="text/css" />
  <title>更新ページ</title>
</head>
<body>
@extends('layouts.default')

@section('title', 'Todo List')

@section('main')
<div class="update-ttl">
<h3>更新<h3>
</div>

<table>
    <tr>
      <th>作成時刻</th>
      <th>タスク名</th>
      <th>更新ボタン</th>
    </tr>

    @foreach($todos as $todo)
    <tr>
      <form action="/todo/update" method="POST">
      @csrf
    <input type="hidden" value="{{$todo->id}}" name="id">
      <td>{{$todo->updated_at}}</td>
      <td><input type="text" value="{{$todo->content}}" name="content" class="frame"></td>
      <td><button type="submit" class="update-btn">更新</button></td>
    </tr>
    </form>
    @endforeach

</table>

<div class="back-home">
<a href="/home" class="home-btn">トップページに戻る</a>
</div>

@endsection
</body>
</html>