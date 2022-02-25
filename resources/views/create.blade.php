<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/css/create.css" type="text/css" />
  <title>新規追加ページ</title>
</head>
<body>
@extends('layouts.default')

@section('title', 'Todo List')

@section('main')
<div class="create-ttl">
<h3>新規追加<h3>
</div>

<div class="create-todo">
  <form action="/todo/create" method="POST">
    @csrf

      @if (count($errors) > 0)
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
      @endif
    <div class="f-create">
      <input type="text" name="content" class="frame">
      <button type="submit" class="create-btn">追加</button>
</div>
</div>

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

{{$todos->links()}}

<div class="back-home">
<a href="/home" class="home-btn">トップページに戻る</a>
</div>
@endsection
</body>
</html>