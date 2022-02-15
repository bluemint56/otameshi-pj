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
    <tr>
      <td>2022/01/01</td>
      <td>おさんぽする</td>
      {{--<form action="/todo/update" method="POST">
        @csrf
        <input type="hidden" name="content" value="{{$item->content}}">--}}
      <td><button type="submit" class="update-btn">更新</button></td>
    </tr>
    {{--@foreach($items as $item)
      <tr>
        <td>{{$item->updated_at}}</td>
        <td>{{$item->content}}</td>
    </tr>
    @endforeach
    --}}

</table>

<div class="back-home">
<a href="/home" class="home-btn">トップページに戻る</a>
</div>

@endsection
</body>
</html>