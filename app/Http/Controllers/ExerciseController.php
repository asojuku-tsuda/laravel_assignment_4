<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * タスク一覧を表示
     */
    public function index()
    {
        $tasks = [
            ['id' => 1, 'name' => 'Laravelの学習', 'completed' => false],
            ['id' => 2, 'name' => 'ルーティングの練習', 'completed' => false],
            ['id' => 3, 'name' => 'ブレードテンプレートの練習', 'completed' => true],
        ];

        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * タスク作成フォームを表示
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * 新しいタスクを保存
     */
    public function store(Request $request)
    {
        // 実際にはバリデーションとデータベースへの保存を行う
        return redirect()->route('tasks.index')->with('status', 'タスクが作成されました！');
    }

    /**
     * 特定のタスクを表示
     */
    public function show($id)
    {
        $task = ['id' => $id, 'name' => 'サンプルタスク' . $id, 'completed' => false];

        return view('tasks.show', ['task' => $task]);
    }

    /**
     * タスク編集フォームを表示
     */
    public function edit($id)
    {
        $task = ['id' => $id, 'name' => 'サンプルタスク' . $id, 'completed' => false];

        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * 特定のタスクを更新
     */
    public function update(Request $request, $id)
    {
        // 実際にはバリデーションとデータベースの更新を行う
        return redirect()->route('tasks.show', $id)->with('status', 'タスクが更新されました！');
    }

    /**
     * 特定のタスクを削除
     */
    public function destroy($id)
    {
        // 実際にはデータベースからの削除を行う
        return redirect()->route('tasks.index')->with('status', 'タスクが削除されました！');
    }
}
