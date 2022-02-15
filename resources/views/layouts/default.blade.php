<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    body {
      font-size: 15px;
      margin: 5px;
    }
    h1 {
      font-size: 50px;
      color: blue;
      text-shadow: DodgerBlue 1px 0 10px;
      letter-spacing: -4px;
      margin-left: 10px;

    }
    .main {
      margin: 10px;
    }
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('main')
  </div>
</body>
</html>