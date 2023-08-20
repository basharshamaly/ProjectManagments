<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile;
use App\Http\Requests\Profile_Project;
use App\Models\Project;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::OrderBy('id', 'desc')->paginate(10);
        return response()->view('project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return response()->view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Profile_Project $request)
    {
        $validators = Validator($request->all(), [

            // 'code' => 'required|min:2|max:4|unique:projects,code',
            // 'title_en' => 'string|min:3',
            // 'methodology' => 'string|min:3',
        ]);
        if (!$validators->fails()) {
            $projects = new Project();
            $projects->code = $request->input('code');

            $projects->title_en = $request->input('title_en');

            $projects->methodology = $request->input('methodology');

            $save = $projects->save();

            return redirect(route('projects.index'));
        } else {
            return response()->json([
                'icon' => 'error',
                'title' => $validators->getMessageBag()->first(),
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return response()->view('project.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Profile_Project $request, $id)
    {


        $projects = Project::findOrFail($id);
        $projects->code = $request->input('code');

        $projects->title_en = $request->input('title_en');

        $projects->methodology = $request->input('methodology');

        $update = $projects->save();
        // return ['redirect' => route('projects.index')];
        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::destroy($id);
        return redirect()->back();
    }
}
