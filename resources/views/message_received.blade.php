<!-- resources/views/message_received.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メッセージ受付 - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="alert alert-success">
            <h1>メッセージを受け付けました</h1>
            <p>フォームから送信されたデータを受け付けました。</p>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                送信内容
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $name }} さんからのメッセージ</h5>
                <p class="card-text">{{ $message }}</p>
            </div>
            <div class="card-footer text-muted">
                送信時間: {{ now()->format('Y-m-d H:i:s') }}
            </div>
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary">ホームに戻る</a>
    </div>
</body>
</html>
