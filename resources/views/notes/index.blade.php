<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>メモ一覧</h1>
        <p>これは課題8: DELETEルート (リソース削除) のサンプルページです。</p>

        <div class="list-group mt-4">
            @foreach($notes as $note)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $note['title'] }}
                    <form action="{{ route('notes.delete', $note['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">削除</button>
                    </form>
                </div>
            @endforeach
        </div>

        <a href="{{ route('home') }}" class="btn btn-primary mt-3">ホームに戻る</a>
    </div>
</body>
</html>
