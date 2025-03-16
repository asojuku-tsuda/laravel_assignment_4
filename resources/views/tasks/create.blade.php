<!-- resources/views/tasks/create.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>新規タスク作成</h1>
        <p>これは課題9: リソースコントローラルートのサンプルページです。</p>

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
            <div class="mb-3">
                <label for="description" class="form-label">詳細説明</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="due_date" class="form-label">期限日</label>
                <input type="date" class="form-control" id="due_date" name="due_date">
            </div>
            <div class="mb-3">
                <label for="priority" class="form-label">優先度</label>
                <select class="form-select" id="priority" name="priority">
                    <option value="low">低</option>
                    <option value="medium" selected>中</option>
                    <option value="high">高</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">作成</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary">キャンセル</a>
        </form>

        <a href="{{ route('home') }}" class="btn btn-primary mt-3">ホームに戻る</a>
    </div>
</body>
</html>
