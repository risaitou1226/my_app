<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo index</title>
</head>
<body>
    <h1>INDEX</h1>
    <ul>
         @foreach( $memos as $memo)
            <li><a href="/memos/{{ $memo->id }}">{{ $memo->title }}</a></li>
         @endforeach
    </ul>
</body>
</html>
