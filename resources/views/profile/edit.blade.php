<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>プロフィール編集</h1>
        <p>これは課題7: PUT/PATCHルート (リソース更新) のサンプルページです。</p>

        <form action="{{ route('profile.update') }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">名前</label>
                <input type="text" class="form-control" id="name" name="name" value="サンプルユーザー" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" id="email" name="email" value="sample@example.com" required>
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">自己紹介</label>
                <textarea class="form-control" id="bio" name="bio" rows="3">Laravel勉強中です。</textarea>
            </div>
            <button type="submit" class="btn btn-primary">更新</button>
            <a href="{{ route('home') }}" class="btn btn-outline-secondary">ホームに戻る</a>
        </form>
    </div>
</body>
</html>
