<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Customer;
use App\Models\Admin\Project;
use App\Models\Admin\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('layouts.backend.projects.index')->with('projects',$projects);
    }

    public function create()
    {
        $customers= Customer::all();
        $catagories = Category::all();

        $tags = Tag::all();
         return view('layouts.backend.projects.create')
         ->with('customers',$customers)
         ->with('catagories',$catagories)
         ->with('tags',$tags);
    }

    public function store(Request $request)
    {
        // dd($request->all());
      $validated=   $this->validate($request,[
            'title'=>'required|unique:projects,title',
            'body'=>'required',
            'when'=>'required|date',
            'link'=>'required',
            'category_id'=>'required',
            'client_id'=>'required',
            'tag_id'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);
        $project = new Project;
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->body = $request->body;
        $project->when = $request->when;
        $project->link = $request->link;
        $project->client_id = $request->client_id;
        $project->user_id =auth()->user()->id;
        $project->status = 0;
        if ($request->hasFile('image')) {
            $image       = $request->file('image');
            $filename    = time() . $image->getClientOriginalName();
            $image->move(public_path() . '/images/user_image/', $filename);
            // dd($filename);
            $image_resize = Image::make(public_path() . '/images/user_image/' . $filename);
            $image_resize->fit(300, 300);
            $image_resize->save(public_path('images/thumbnail/' . $filename));
            $project->image =  $filename;
        }
        $project->save();
        $project->categories()->attach($request->category_id);
        $project->tags()->attach($request->tag_id);

        // Session::flash('success', 'Menu registered successfully');
        SweetAlert::message('Menu registered successfully');
        return redirect()->route('project.index');
    }


    public function show($id)
    {
        //
    }

    public function edit(Project $project)
    {
        $customers= Customer::all();
        $catagories = Category::all();
        $tags = Tag::all();

        return view('layouts.backend.projects.edit')
        ->with('project',$project)
        ->with('customers',$customers)
        ->with('catagories',$catagories)
        ->with('tags',$tags);
    }


    public function update(Request $request, $id)
    {
    $this->validate($request,[
            'title'=>'required|unique:projects,title,' . $id,
            'body'=>'required',
            'when'=>'required|date',
            'link'=>'required',
            'client_id'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
    ]);
    $project = Project::findOrFail($id);
         $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->body = $request->body;
        $project->when = $request->when;
        $project->link = $request->link;
        $project->client_id = $request->client_id;
        $project->user_id =auth()->user()->id;
        $project->status = $request->status;
        $project->save();

        $project->categories()->sync($request->category_id);
        $project->tags()->sync($request->tag_id);

        SweetAlert::message('Menu registered successfully');
        return redirect()->route('project.index');
    }

    public function destroy($id)
    {
        //
    }
}
