<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/css/login.css" type="text/css" />
  <title>ログインページ</title>
</head>
<body>
@extends('layouts.default')

@section('title', 'LOGIN PAGE')

@section('main')
<div class="login-ttl">
  <p>ログインしてください</p>
</div>

<form action="/auth" method="POST">
  @csrf
<table>
<tr><th>メールアドレス:</th></tr>
<tr><td><input type="text" name="email"></td></tr>

<tr><th>パスワード:</th></tr>
<tr><td><input type="password" name="password"></td></tr>

<tr><th></th></tr>
<tr><td><button type="submit" class="login-btn">送信</button></td></tr>
</table>
</form>
<div class="registration">
<a href="" >新規登録</a>
@endsection
</body>
</html>