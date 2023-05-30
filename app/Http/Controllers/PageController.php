<?php

namespace App\Http\Controllers;

// use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $comics = Comic::all();
        // return view('comics.index', compact('comics'));
        return view('welcome');
    }

    // public function show($id)
    // {
    //     $comic = Comic::findOrFail($id);
    //     return view('comics.show', compact('comic'));
    // }

    // public function create()
    // {
    //     return view('comics.create');
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //     ]);

    //     Comic::create($validatedData);

    //     return redirect()->route('comics.index');
    // }
}
