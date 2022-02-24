<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/tag.css" type="text/css" >
  <title>Tag ページ</title>
</head>
<body>
@extends('layouts.default')

@section('title', 'TAG 編集')

@section('main')
<h2>タグ編集ページ</h2>
<form action="/tag/add" method="POST" class="tag-cre">
  @csrf
  <table>
    <tr>
      <th>タスクID :</th>
      <td><input type="number" name="todos_id"></td>
    </tr>
    <tr>
      <th>タグ :</th>
      <td><input type="text" name="tag"></td>
    </tr>
  </table>
  <button type="submit" class="c-btn">タグ追加</button>
</form>

<table class="tag-content">
  <tr>
    <th>TAGS</th>
    <th>タグ編集</th>
    <th>タグ削除</th>
</tr>
@foreach($tags as $tag)
  <tr>
  <form action="/tag/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$tag->id}}">
    <td><input type="text" value="{{$tag->getTag()}}" name="tag"></td>
    <td><button type="submit" class="u-btn">編集</button></td>
  </form>

  <form action="/tag/delete" method="POST">
        @csrf
      <input type="hidden" name="id" value="{{$tag->id}}">
      <td><button type="submit" class="d-btn">削除</button></td>
      </form>
</tr>
@endforeach
</table>

<div class="tag-link">
<a href="/relation" class="tt-btn">タスク&タグ</a>
<a href="/home" class="home-btn">トップページへ</a>
@endsection
</body>
</html>