<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use SweetAlert;

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
    public function show()
    {
        // $menu = New Menue;
        // return view('layouts.backend.menu.create')->with('menu',$menu);

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

        // Session::flash('success', 'Menu registered successfully');
        SweetAlert::message('Menu registered successfully');
        return redirect()->route('menu.index');
    }


    public function edit(Menue $menu)
    {
        return view('layouts.backend.menu.edit')->with('menu',$menu);
    }

    public function update(Request $request, $id)
    {
           $this->validate($request, [
            'title' =>  'required|unique:menues,title,' . $id,
            'link' =>  'required'
        ]);

        $menu =  Menue::findOrFail($id);
        $menu->title = $request->title;
        $menu->slug = Str::slug($request->title);
        $menu->link = $request->link;
        $menu->status = $request->status;
        $menu->save();
        // Session::flash('success', 'Menu updated successfully');
        SweetAlert::message('Menu updated successfully!');
        return redirect()->route('menu.index');
    }

    public function destroy($id)
    {
       dd($id);
    }
}
