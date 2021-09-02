<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Menue;

class FrontEndController extends Controller
{
    public function menu()
    {
        $menus =Menue::all();
        dd($menus);
        return view('layouts.frontend.header')->with('menus',$menus);
    }
}
