<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="{{ url('style.css') }}">
</head>
<body>
    <main>
        <h1>メッセージ</h1>
        <form action="/messages" method="post">
            @csrf
            <input type="text" name="body">
            <input type="submit" value="投稿">
        </form>
        <hr>
        <ul>
            @foreach($messages as $message)
            <li>{{ $message->body }}</li>
            @endforeach
        </ul>
    </main>
</body>
</html>
