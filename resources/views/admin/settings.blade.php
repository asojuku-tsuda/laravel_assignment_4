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

<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>お問い合わせフォーム</h1>
        <p>これは課題6: POSTルート (フォーム送信) のサンプルページです。</p>

        <form action="{{ route('tasks.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">タスク名</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="completed" name="completed">
                <label class="form-check-label" for="completed">完了</label>
            </div>
            <button type="submit" class="btn btn-primary">作成</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">キャンセル</a>
        </form>

        <a href="{{ route('home') }}" class="btn btn-primary mt-3">ホームに戻る</a>
    </div>
</body>
</html>
