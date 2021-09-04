<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Menue;

class FrontEndController extends Controller
{
    public function index()
    {
        $menus =Menue::where('status',1)->get();
        return view('layouts.frontend.welcome')->with('menus',$menus);
    }
    public function menu()
    {
        $menus =Menue::all();
        dd($menus);
        return view('layouts.frontend.header')->with('menus',$menus);
    }
}
