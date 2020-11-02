<?php

namespace App\Http\Controllers;

use App\Models\Project;

use Illuminate\Http\Request;

class projectcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projectdatos=Project::latest('updated_at')->paginate();

       return view('projects.index',compact('projectdatos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //

        $fields = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'required'
        ]);



        Project::create($fields);

        return redirect()->route('projects');

    }

    public function create()
    {
        //



        return view('projects.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
             return view('projects.show',$project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        return view('projects.edit',[$project]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
