<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/index.css" type="text/css" />
  <title>トップページ</title>
</head>
<body>
@extends('layouts.default')

@section('title', 'Todo List')

@section('main')
@if (Auth::check())
<p>ログイン中のユーザー: {{$user->name}} さん</p>
@endif
<div class="index-ttl">
  <h3>タスク  一覧表</h3>
</div>
<div class="menu-btn">
  <a href="/todo/create" class="create-btn">追加</a>
  <a href="/todo/update" class="update-btn">更新</a>
  <a href="/todo/delete" class="delete-btn">削除</a>
  <a href="/todo/find" class="search-btn">検索</a>
  <a href="/relation" class="tag-btn">タグページ</a>
</div>

<div class="index-todo">
  <table>
    <tr>
      <th>ID No.</th>
      <th>作成時刻</th>
      <th>タスク名</th>
    </tr>

    @foreach($todos as $todo)<
    <tr>
      <td>{{$todo->id}}</td>
      <td>{{$todo->updated_at}}</td>
      <td>{{$todo->content}}</td>
    </tr>
    @endforeach
    </table>
    {{$todos->links()}}
  <form action="/logout" method="POST">
    @csrf
  <div class="logout-button">
    <button type="submit" class="logout-btn">ログアウト</button>
</div>
@endsection
</body>
</html>