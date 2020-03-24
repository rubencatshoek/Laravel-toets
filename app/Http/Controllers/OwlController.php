<?php

namespace App\Http\Controllers;

use App\Owl;
use App\Teacher;
use Illuminate\Http\Request;

class OwlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('owl.index', ['owls' => Owl::all(), 'teachers' => Teacher::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Owl $owl
     * @return \Illuminate\Http\Response
     */
    public function store(Owl $owl)
    {
        $owl->create(request()->validate([
            'name' => 'required',
            'is_resit' => 'required',
            'version_nr' => 'required',
            'comments' => 'required'
        ]));
        return redirect('owl');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Owl  $owl
     * @return \Illuminate\Http\Response
     */
    public function show(Owl $owl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Owl  $owl
     * @return \Illuminate\Http\Response
     */
    public function edit(Owl $owl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Owl  $owl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owl $owl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owl  $owl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owl $owl)
    {
        //
    }
}
