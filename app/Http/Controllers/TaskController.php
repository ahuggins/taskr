<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function postTasks(Request $request)
    {
        $tasks = \App\Task::where('list_id', $request->list_id)->get();
        return $tasks;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function postCreateTask(Request $request)
    {
        $task['content'] = $request->get('content');
        $task['user_id'] = Auth::user()->id;
        $task['list_id'] = $request->get('list_id');
        $task['complete']= 0;
        return \App\Task::create($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function postDeleteTask(Request $request)
    {
        $id = $request->id;
        \App\Task::where('id', $id)->delete();
    }

    public function postCompleteTask(Request $request)
    {
        $task = \App\Task::where('id', $request->id)->first();
        $task->complete = ! $task->complete;
        $task->save();
    }

    public function postCompleteAll(Request $request)
    {
        $tasks = \App\Task::where('list_id', $request->list_id)
                         ->get();

        foreach ($tasks as $task) {
            $task->complete = true;
            $task->save();
        }
    }

    public function postDeleteComplete(Request $request)
    {
        $tasks = \App\Task::where('list_id', $request->list_id)
                           ->where('complete', 1)
                           ->get();

        foreach ($tasks as $task) {
            $task->delete();
        }
    }
}
