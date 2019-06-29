<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>
<body>
  <h1>@yield('title')</h1>
  @section('menubar')
  <ul>
    <p class="menutitle">※メニュー</p>
    <li>@show</li>
  </ul>
  <div class="content">
  @yield('content')
  </div>
  <div class="footer">
  @yield('footer')
  </div>
</body>
</html>
