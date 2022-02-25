<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/relation.css" type="text/css" >
  <title>タスク&タグ 一覧ページ</title>
</head>
<body>
@extends('layouts.default')


@section('title', 'TASK&TAG List')

@section('main')
<table>
  <tr>
    <th>タスク</th>
    <th>タグ</th>
</tr>

@foreach($todos as $todo)
<tr>
  <td>{{$todo->getDetail()}}</td>
  <td>
    @if ($todo->tags != null)
    <table width="100%">
      @foreach($todo->tags as $obj)
      <tr>
        <td>{{$obj->getTag()}}</td>
      </tr>
      @endforeach
    </table>
    @endif
  </td>
</tr>
@endforeach
</table>

<div class="page">
{{$todos->links()}}
</div>

<div class="tag-link">
<a href="/tag" class="tag-page">タグ編集ページへ</a>
<a href="/home" class="home-btn">トップページへ</a>
</div>

@endsection
</body>
</html>
