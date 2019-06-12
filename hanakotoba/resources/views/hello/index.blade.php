<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello/Index</title>
</head>
<body>
  <h1>Blade / Index</h1>
  <p>これはBladeのサンプルページです。</p>
  <p>{{$msg}}</p>
  <form action="/hello" method="POST">
    {{ csrf_field() }}
    <input type="text" name="msg">
    <input type="submit">
  </form>
</body>
</html>
