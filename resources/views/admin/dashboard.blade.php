<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>管理画面ダッシュボード</h1>
        <p>これは課題5: 名前付きルートグループのサンプルページです。</p>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.settings') }}" class="btn btn-outline-primary">設定ページへ</a>
            <a href="{{ route('home') }}" class="btn btn-primary">ホームに戻る</a>
        </div>
    </div>
</body>
</html>

<!-- resources/views/admin/settings.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>管理画面設定ページ</h1>
        <p>これは課題5: 名前付きルートグループのサンプルページです。</p>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-primary">ダッシュボードへ</a>
            <a href="{{ route('home') }}" class="btn btn-primary">ホームに戻る</a>
        </div>
    </div>
</body>
</html>
