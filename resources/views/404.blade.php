<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="display-1">404</h1>
        <h2>ページが見つかりません</h2>
        <p>お探しのページは存在しないか、移動された可能性があります。</p>
        <a href="{{ route('home') }}" class="btn btn-primary mt-3">ホームに戻る</a>
    </div>
</body>
