<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Updated - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="alert alert-success">
            <h1>プロフィールを更新しました！</h1>
            <p>プロフィールの変更が保存されました。</p>
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary">ホームに戻る</a>
    </div>
</body>
</html>
