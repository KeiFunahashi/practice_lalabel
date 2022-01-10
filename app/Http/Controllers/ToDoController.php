<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class ToDoController extends Controller
{
    // 一覧画面を表示
    public function index()
    {
        $todos = Todo::orderBy('id', 'asc')->get();
        return view('list', [
            "todos" => $todos
        ]);
    }

    // タスク作成画面を表示
    public function createPage()
    {
        return view('todo_create');
    }

    // タスクを登録
    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->assign_person_name = $request->assign_person_name;
        $todo->estimate_hour = $request->estimate_hour;
        $todo->save();

        return redirect('/');
    }
}
