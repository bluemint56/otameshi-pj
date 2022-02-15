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
<div class="index-ttl">
  <h3>やること</h3>
</div>
<div class="menu-btn">
  <a href="/todo/create" class="create-btn">追加</a>
  <a href="/todo/update" class="update-btn">更新</a>
  <a href="/todo/delete" class="delete-btn">削除</a>
  <a href="/todo/find" class="search-btn">検索</a>
</div>

<div class="index-todo">
  <table>
    <tr>
      <th>作成時刻</th>
      <th>タスク名</th>
    </tr>

    <tr>
      <td>2022/01/01</td>
      <td>おさんぽする</td>
    </tr>

    {{--@foreach($items as $item)
    <tr>
      <td>{{$item->updated_at}}</td>
      <td>{{$item->content}}</td>
    </tr>
    @endforeach--}}
    </table>
@endsection
</body>
</html>