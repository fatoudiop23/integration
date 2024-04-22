<?php

namespace App\Http\Controllers;
use App\Models\Test;
 

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        
        $test = Test::orderBy('created_at', 'DESC')->get();
 
        return view('test.index', compact('test'));
    }

    public function search(Request $request){

        $search=$request->search;
        $test=Test::where(function($query) use ($search){

            $query->where('titre', 'like', "%$search%")
            -> orwhere('contenu', 'like', "%$search%");
            

        })
        ->get();
        return view('test.index', compact('test', 'search'));
    }

   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Test::create($request->all());
 
        return redirect()->route('test.index')->with('success', 'Journal added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::findOrFail($id);
 
        return view('test.show', compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Test::findOrFail($id);
 
        return view('test.edit', compact('test'));
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
        $test = Test::findOrFail($id);
 
        $test->update($request->all());
 
        return redirect()->route('test.index')->with('success', 'Journal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::findOrFail($id);
 
        $test->delete();
 
        return redirect()->route('test.index')->with('success', 'Journal deleted successfully');
    }
}
