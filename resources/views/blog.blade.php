<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>ブログページ</h1>
        <p>これは課題4: オプショナルパラメータ付きGETルートのサンプルページです。</p>

        @if($post)
            <div class="alert alert-info">
                <strong>表示中の記事:</strong> {{ $post }}
            </div>
        @else
            <div class="alert alert-warning">
                特定の記事が指定されていません。すべての記事を表示しています。
            </div>
        @endif

        <a href="{{ route('home') }}" class="btn btn-primary">ホームに戻る</a>
    </div>
</body>
</html>
