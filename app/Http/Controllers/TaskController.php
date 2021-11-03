<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index() {
        return view('tasks', [
            'tasks' => Task::all()->groupBy('status'),
        ]);
    }

    public function show($task) {
        $tasks = Task::all()->groupBy('status');

        return view('show-task', [
            'tasks' => $tasks,
            'task' => $task
        ]);
    }

    public function create() {
        return view('create-task', [
            'tasks' => Task::all()->groupBy('status')
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:64',
            'content' => 'required|max:255',
        ]);

        $task = new Task;
        $task->title = $request->get('title');
        $task->content = $request->get('content');

        $task->save();

        return redirect('/show/'.$task->id);
    }

    public function edit(Task $task) {
        $tasks = Task::all()
            ->groupBy('status');

        return view('edit-task', [
            'task' => $task,
            'tasks' => $tasks
        ]);
    }

    public function update(Request $request, Task $task) {
        $request->validate([
            'title' => 'required|max:64',
            'content' => 'required|max:255',
        ]);

        $task->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);
        $task->save();
        return redirect('/show/'.$task->id.'#active');
    }

    public function destroy(Request $request) {
        Task::destroy($request->get('id'));
        return redirect('/');
    }

    public function updateTaskStatus(Request $request, Task $task) {
        $task->update([
            'status' => $request->get('status')
        ]);
        $task->save();
        return redirect('/show/'.$task->id.'#active');
    }
}
