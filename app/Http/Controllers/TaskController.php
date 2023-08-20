<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile;
use App\Http\Requests\Profile_Task;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::OrderBy('id', 'desc')->paginate(10);
        return response()->view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        return response()->view('task.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Profile_Task $request)
    {


        $tasks = new Task();
        $tasks->order = $request->input('order');
        $tasks->title_en = $request->input('title_en');

        $tasks->description = $request->input('description');
        $tasks->worker = $request->input('worker');
        $tasks->hours = $request->input('hours');
        $tasks->project_id = $request->input('project_id');


        $save =  $tasks->save();

        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::FindOrFail($id);
       
        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = Task::findOrFail($id);
        $projects = Project::all();
        return response()->view('task.edit', compact('tasks', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Profile_Task $request, $id)
    {


        $tasks =  Task::findOrFail($id);
        $tasks->order = $request->input('order');
        $tasks->title_en = $request->input('title_en');

        $tasks->description = $request->input('description');
        $tasks->worker = $request->input('worker');
        $tasks->hours = $request->input('hours');
        $tasks->project_id = $request->input('project_id');


        $updated =  $tasks->save();
        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = Task::destroy($id);
        return redirect()->back();
    }
}
