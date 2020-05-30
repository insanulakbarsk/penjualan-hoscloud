<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tools = \App\Tools::paginate(10);
        return view('tools.index', ['tools'=> $tools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_tools = new \App\Tools;
        $new_tools->title = $request->get('title');
        $new_tools->description = $request->get('description');
        $new_tools->sales = $request->get('sales');
        $new_tools->price = $request->get('price');
        $new_tools->stock = $request->get('stock');
        $new_tools->status = $request->get('save_action');

        $new_tools->type = \Str::slug($request->get('type'));
        $new_tools->created_by = \Auth::user()->id;
        $new_tools->save();
        if($request->get('save_action') == 'PUBLISH'){
            return redirect()->route('tools.create')->with('status', 'Tool successfully saved and published');
        } else {
            return redirect()->route('tools.create')->with('status', 'Tool saved as draft');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tools = \App\Tools::findOrFail($id);
        return view('tools.edit', ['tools' => $tools]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tools = \App\Tools::findOrFail($id);
        $tools->title = $request->get('title');
        $tools->type = $request->get('type');
        $tools->description = $request->get('description');
        $tools->sales = $request->get('sales');
        $tools->stock = $request->get('stock');
        $tools->price = $request->get('price');
        $tools->updated_by = \Auth::user()->id;
        $tools->status = $request->get('status');
        $tools->save();
        return redirect()->route('tools.edit', [$tools->id])->with('status','tools successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tools = \App\Tools::findOrFail($id);
        $tools->delete();
        return redirect()->route('tools.index')->with('status', 'Book moved to trash');
    }

    public function trash()
    {
        $tools = \App\Tools::onlyTrashed()->paginate(10);
        return view('tools.trash', ['tools' => $tools]);
    }

    public function restore($id)
    {
        $tools = \App\Tools::withTrashed()->findOrFail($id);
        if($tools->trashed())
        {
            $tools->restore();
            return redirect()->route('tools.trash')->with('status', 'tools successfully restored');
        } else 
        {
        return redirect()->route('tools.trash')->with('status', 'tools is not in trash');
        }
    }
}
