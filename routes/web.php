<?php
// routes/web.php

/**
 * Laravelルーティング定義ファイル
 *
 * このファイルではアプリケーションのURLルートとそれに対応するアクションを定義します。
 * Laravelのルーティングシステムを使用して、URLリクエストをコントローラやクロージャに
 * マッピングします。
 */

// 必要なクラスをインポート
use Illuminate\Support\Facades\Route;  // ルーティング機能を提供するクラス
use App\Http\Controllers\ExerciseController;  // 課題9で使用するコントローラクラス
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * ホームページルート
 *
 * URLパス: /
 * HTTPメソッド: GET
 * 処理: homeビューを表示
 * 名前: home (名前付きルートとして参照可能)
 */
Route::get('/', function () {
    return view('home');  // resources/views/home.blade.phpを表示
})->name('home');  // ルートに'home'という名前を付ける

/**
 * 課題1: シンプルなGETルート
 *
 * URLパス:
 * HTTPメソッド: GET
 * 処理: aboutビューを表示
 * 名前: about
 *
 * 説明: 最も基本的なルート定義。特定のURLに対して単一のビューを表示します。
 */
// Route::xxx('xxx', function () {
//     return view('about');  // resources/views/about.blade.phpを表示
// })->name('about');

/**
 * 課題2: パラメータ付きGETルート
 *
 * URLパス:
 * HTTPメソッド: GET
 * 処理: userビューにidパラメータを渡して表示
 * 名前: user.show
 *
 * 説明: URLの一部をパラメータとして受け取り、そのデータをビューに渡します。
 * 例: /user/123 にアクセスすると、$id=123 となります。
 */
// Route::get('xxx', function ($id) {
//     return view('user', ['id' => $id]);  // 変数$idをビューに渡す
// })->name('user.show');

/**
 * 課題3: 複数パラメータ付きGETルート
 *
 * URLパス:
 * HTTPメソッド: GET
 * 処理: productビューに複数のパラメータを渡して表示
 * 名前: product.show
 *
 * 説明: 複数のパラメータを受け取るルート。順番に変数として受け取ります。
 * 例: /product/electronics/456 にアクセスすると、$category='electronics', $id=456 となります。
 */
// Route::xxx('xxx', function ($category, $id) {
//     return view('product', [
//         'category' => $category,  // カテゴリーパラメータをビューに渡す
//         'id' => $id               // 商品IDパラメータをビューに渡す
//     ]);
// })->name('product.show');

/**
 * 課題4: オプショナルパラメータ付きGETルート
 *
 * URLパス:
 * HTTPメソッド: GET
 * 処理: blogビューにpostパラメータ（オプション）を渡して表示
 * 名前: blog
 *
 * 説明: パラメータが省略可能なルート。パラメータ名の後に?をつけると省略可能になります。
 * パラメータが省略された場合はデフォルト値(null)が使用されます。
 * 例1: /blog/laravel-tips にアクセスすると、$post='laravel-tips' となります。
 * 例2: /blog にアクセスすると、$post=null となります。
 */
// Route::xxx('xxxx', function ($post = null) {
//     return view('blog', ['post' => $post]);  // オプショナルパラメータをビューに渡す
// })->name('blog');

/**
 * 課題5: POSTリクエスト（フォーム送信）
 *
 * URLパス:
 * HTTPメソッド: POST
 * 処理: blogビューにpostパラメータ（オプション）を渡して表示
 * 名前: blog
 *
 */

Route::get('/xxxx', function (Request $request) {
    // 送信されたデータを取得 - Request::input() ではなく直接プロパティとしてアクセス
    $name = $request->name;
    $message = $request->message;

    // データを表示用にセッションに保存
    session(['name' => $name, 'message' => $message]);

    // メッセージ受付ページにリダイレクト
    return redirect()->route('message.received');
})->name('message.submit');

// メッセージ受付確認ページ
Route::get('/message/received', function () {
    // セッションからデータを取得
    $name = session('name');
    $message = session('message');

    // データが存在しない場合はホームにリダイレクト
    if (!$name || !$message) {
        return redirect()->route('home');
    }

    return view('message_received', [
        'name' => $name,
        'message' => $message
    ]);
})->name('message.received');

/**
 * 404ページ表示用のフォールバックルート
 *
 * URLパス: 定義されていない全てのURL
 * HTTPメソッド: 全て
 * 処理: 404ビューを表示
 * 名前: 404
 *
 * 説明: 他のどのルートにもマッチしなかった場合に実行されるフォールバックルート。
 * 404エラーページを表示するために使用されます。
 * このルートは必ず他のすべてのルート定義の後に配置する必要があります。
 */
// Route::xxxxxx(function () {
//     return view('404');  // resources/views/404.blade.phpを表示
// })->name('404');
