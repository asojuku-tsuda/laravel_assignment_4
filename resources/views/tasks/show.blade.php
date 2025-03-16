<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>タスク詳細</h1>
        <p>これは課題9: リソースコントローラルートのサンプルページです。</p>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card mt-4">
            <div class="card-header">
                タスクID: {{ $task['id'] }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $task['name'] }}</h5>
                <p class="card-text">
                    ステータス:
                    @if($task['completed'])
                        <span class="badge bg-success">完了</span>
                    @else
                        <span class="badge bg-warning">未完了</span>
                    @endif
                </p>
                <div class="d-flex gap-2">
                    <a href="{{ route('tasks.edit', $task['id']) }}" class="btn btn-warning">編集</a>
                    <form action="{{ route('tasks.destroy', $task['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                    <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">一覧に戻る</a>
                </div>
            </div>
        </div>

        <a href="{{ route('home') }}" class="btn btn-primary mt-3">ホームに戻る</a>
    </div>
</body>
</html>
