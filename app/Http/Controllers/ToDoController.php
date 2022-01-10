<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('id', 'asc')->get();
        return view('list', [
            "todos" => $todos
        ]);
    }
}
