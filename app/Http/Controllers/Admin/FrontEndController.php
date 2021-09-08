<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Menue;
use App\Models\Admin\Project;

class FrontEndController extends Controller
{
    public function index()
    {
        $menus =Menue::where('status',1)->get();
        $projects = Project::all();
        return view('layouts.frontend.welcome')
        ->with('menus',$menus)
        ->with('projects',$projects);
    }
    public function menu()
    {
        $menus =Menue::all();
        $projects = Project::all();
        return view('layouts.frontend.header')
        ->with('menus',$menus)
        ->with('projects',$projects);
    }
}
