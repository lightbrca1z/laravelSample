<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メッセージ一覧</title>
    <style>
        .message-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .message-text {
            flex-grow: 1;
            margin-right: 10px;
        }
        .delete-btn {
            background-color: #ff4444;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .delete-btn:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <h1>メッセージ</h1>
    
    <!-- 投稿フォーム -->
    <form action="/messages" method="post">
        @csrf
        <input type="text" name="body">
        <input type="submit" value="投稿">
    </form>

    <!-- 削除フォーム -->
    <form action="/messages" method="post" style="margin-top: 20px;">
        @csrf
        @method('DELETE')
        <input type="submit" value="全件削除" onclick="return confirm('本当に全てのメッセージを削除しますか？')">
    </form>

    <!-- メッセージ一覧 -->
    <div style="margin-top: 20px;">
        @foreach($messages as $message)
            <div class="message-item">
                <div class="message-text">{{ $message->body }}</div>
                <form action="/messages/{{ $message->id }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除" class="delete-btn" onclick="return confirm('このメッセージを削除しますか？')">
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>
