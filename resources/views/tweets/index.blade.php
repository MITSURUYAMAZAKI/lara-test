<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Tweet一覧</h1>
  {{-- {{ $tweeter }} --}}
  {{ $tweet ->title}}
<br>
  {{ $tweet2 ->title}}

  {{-- キーを'->'で入れる --}}

  <!-- return view('tweets.index', ['tweeter'=> $tweet]); -->
</body>
</html>