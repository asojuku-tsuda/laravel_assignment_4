<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .exercise-section {
            margin-bottom: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .uri-display {
            display: block;
            margin-top: 10px;
            padding: 8px;
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 4px;
            font-family: monospace;
        }
        .http-method {
            font-weight: bold;
            margin-right: 10px;
        }
        .get {
            color: #0d6efd;
        }
        .post {
            color: #198754;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Laravel ルーティング練習</h1>
        <p class="lead">以下のリンクをクリックして、様々なルーティングの動作を確認しましょう。</p>
        <p class="alert alert-info">各ボタンの下には、そのリンクをクリックした際のHTTPメソッドとURIが表示されています。</p>

        <div class="exercise-section">
            <h3>課題1: シンプルなGETルート</h3>
            <p>基本的なGETリクエストを処理するルート</p>
            <a href="{{ url('about') }}" class="btn btn-primary">Aboutページへ</a>
            <div class="uri-display">
                <span class="http-method get">GET</span>{{ url('/about') }}
            </div>
        </div>

        <div class="exercise-section">
            <h3>課題2: パラメータ付きGETルート</h3>
            <p>URLパラメータを受け取るルート</p>
            <a href="{{ url('user.show', ['id' => 123]) }}" class="btn btn-primary">ユーザーID:123のページへ</a>
            <div class="uri-display">
                <span class="http-method get">GET</span>{{ url('/user/123') }}
            </div>
        </div>

        <div class="exercise-section">
            <h3>課題3: 複数パラメータ付きGETルート</h3>
            <p>複数のURLパラメータを受け取るルート</p>
            <a href="{{ url('product.show', ['category' => 'electronics', 'id' => 456]) }}" class="btn btn-primary">電子機器カテゴリー、商品ID:456のページへ</a>
            <div class="uri-display">
                <span class="http-method get">GET</span>{{ url('/product/electronics/456') }}
            </div>
        </div>

        <div class="exercise-section">
            <h3>課題4: オプショナルパラメータ付きGETルート</h3>
            <p>オプショナルなURLパラメータを受け取るルート</p>
            <a href="{{ url('blog') }}" class="btn btn-primary">ブログ一覧ページへ</a>
            <div class="uri-display">
                <span class="http-method get">GET</span>{{ url('/blog') }}
            </div>
            <a href="{{ url('blog', ['post' => 'laravel-routing']) }}" class="btn btn-outline-primary mt-2">特定のブログ記事ページへ</a>
            <div class="uri-display">
                <span class="http-method get">GET</span>{{ url('/blog/laravel-routing') }}
            </div>
        </div>

        <div class="exercise-section">
            <h3>課題5: POSTリクエスト（フォーム送信）</h3>
            <p>フォームからデータを送信するPOSTリクエストを処理するルート</p>

            <form action="{{ route('message.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">お名前</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">メッセージ</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">送信する</button>
            </form>

            <div class="uri-display">
                <span class="http-method post">POST</span>{{ url('/message') }}
            </div>
            <div class="alert alert-warning mt-2">
                <strong>注意:</strong> POSTリクエストでは、CSRFトークン(@csrf)が必要です。また、フォームのデータはURLには表示されません。
            </div>
        </div>

        <div class="exercise-section">
            <h3>ボーナス: 404ページ</h3>
            <p>存在しないルートにアクセスした場合の404ページ</p>
            <a href="/non-existent-page" class="btn btn-warning">存在しないページへ</a>
            <div class="uri-display">
                <span class="http-method get">GET</span>{{ url('/non-existent-page') }}
            </div>
        </div>
    </div>
</body>
</html>
