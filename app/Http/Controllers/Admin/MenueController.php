<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus =Menue::all();
        return view('layouts.backend.menu.index')->with('menus',$menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = New Menue;
        return view('layouts.backend.menu.create')->with('menu',$menu);

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>  'required|unique:menues,title',
            'link' =>  'required'
        ]);

        $menu = new Menue;
        $menu->title = $request->title;
        $menu->slug = Str::slug($request->title);
        $menu->link = $request->link;
        $menu->status = 0;
        $menu->save();

        Session::flash('success', 'Menu registered successfully');
        return redirect()->route('menu.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
