<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>タスク一覧</h1>
        <p>これは課題9: リソースコントローラルートのサンプルページです。</p>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('tasks.create') }}" class="btn btn-success">新規タスク作成</a>
        </div>

        <div class="list-group">
            @foreach($tasks as $task)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        @if($task['completed'])
                            <span class="text-decoration-line-through">{{ $task['name'] }}</span>
                            <span class="badge bg-success ms-2">完了</span>
                        @else
                            {{ $task['name'] }}
                        @endif
                    </div>
                    <div class="d-flex gap-2">
                        <a href="{{ route('tasks.show', $task['id']) }}" class="btn btn-sm btn-info">詳細</a>
                        <a href="{{ route('tasks.edit', $task['id']) }}" class="btn btn-sm btn-warning">編集</a>
                        <form action="{{ route('tasks.destroy', $task['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">削除</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="{{ route('home') }}" class="btn btn-primary mt-3">ホームに戻る</a>
    </div>
</body>
</html>
