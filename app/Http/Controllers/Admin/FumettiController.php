<?php

namespace App\Http\Controllers\Admin; // <-- update namespace

use App\Models\Fumetti;
use App\Http\Requests\StoreFumettiRequest;
use App\Http\Requests\UpdateFumettiRequest;
use App\Http\Controllers\Controller; // <-- importo il controller 
class FumettiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Fumetti::all());
        $fumettis =Fumetti::orderByDesc('id')->get();
        return view('admin.fumettis.index', compact('fumettis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fumettis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFumettiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFumettiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fumetti  $fumetti
     * @return \Illuminate\Http\Response
     */
    public function show(Fumetti $fumetti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fumetti  $fumetti
     * @return \Illuminate\Http\Response
     */
    public function edit(Fumetti $fumetti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFumettiRequest  $request
     * @param  \App\Models\Fumetti  $fumetti
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFumettiRequest $request, Fumetti $fumetti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fumetti  $fumetti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetti $fumetti)
    {
        //
    }
}
