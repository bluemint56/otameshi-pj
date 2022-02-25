<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/css/delete.css" type="text/css" />
  <title>削除ページ</title>
</head>
<body>
@extends('layouts.default')

@section('title', 'Todo List')

@section('main')
<div class="delete-ttl">
<h3>削除<h3>
</div>

<table>
    <tr>
      <th>作成時刻</th>
      <th>タスク名</th>
      <th>削除ボタン</th>
    </tr>
    
    @foreach($todos as $todo)
      <tr>
        <form action="/todo/delete" method="POST">
          @csrf
        <input type="hidden" name="id" value="{{$todo->id}}">
        <td>{{$todo->updated_at}}</td>
        <td>{{$todo->content}}</td>
        <td><button type="submit" class="delete-btn">削除</button></td>
        </form>
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