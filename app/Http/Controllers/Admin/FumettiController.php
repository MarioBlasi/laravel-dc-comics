<?php

namespace App\Http\Controllers\Admin;

use App\Models\Fumetti;
use App\Http\Requests\StoreFumettiRequest;
use App\Http\Requests\UpdateFumettiRequest;
use App\Http\Controllers\Controller;

class FumettiController extends Controller
{
    public function index()
    {
        // Mostra una lista di tutti i fumetti
        $fumettis = Fumetti::orderByDesc('id')->get();
        return view('admin.fumettis.index', compact('fumettis'));
    }

    public function create()
    {
        // Mostra il form per creare un nuovo fumetto
        return view('admin.fumettis.create');
    }

    public function store(StoreFumettiRequest $request)
    {
      
        $data = $request->validate([

            'title' => 'required|min:5|max:200',
            'description' => 'nullable|max:255',
            'thumb' => 'nullable',
            'price' => 'nullable',
            'sale_date' =>'nullable',
        ] );

       Fumetti::create($data);
       return redirect()->route('fumettis.index')->with('message', 'IL FUMETTO E` STATO AGGIUNTO CON SUCCESSO !!!')->with('message_type', 'success');
    }

    public function show(Fumetti $fumetti)
    {
        // Mostra i dettagli di un singolo fumetto
        return view('admin.fumettis.show', compact('fumetti'));
    }

    public function edit(Fumetti $fumetti)
    {
        // Mostra il form per modificare un fumetto esistente
        return view('admin.fumettis.edit', compact('fumetti'));
    }

    public function update(UpdateFumettiRequest $request, Fumetti $fumetti)
    {
        $data =[
            'title' => $request->title,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'sale_date' => $request->sale_date,
        ];
        $fumetti->update($data);

        return view('admin.fumettis.edit')->with('message','fumetti updated');
    }

    public function destroy(Fumetti $fumetti)
    {
        // Elimina un fumetto dal database
        if ($fumetti->delete()) {
            return redirect()->back()->with('message', 'IL FUMETTO e` STATO CANCELLATO')->with('message_type', 'danger');
        } else {
            return redirect()->back()->with('message', 'Errore di cancellazione.')->with('message_type', 'danger');
        }
    }
}
