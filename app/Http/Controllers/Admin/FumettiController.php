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
        // Salva il nuovo fumetto nel database
        $fumetti = new Fumetti;
        $fumetti->title = $request->title;
        $fumetti->description = $request->description;
        $fumetti->thumb = $request->thumb;
        $fumetti->price = $request->price;
        $fumetti->sale_date = $request->sale_date;
        $fumetti->save();

        // Reindirizza a una pagina di conferma o visualizza un messaggio di successo
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
        // Aggiorna i dati del fumetto nel database
        $fumetti->title = $request->title;
        $fumetti->description = $request->description;
        $fumetti->thumb = $request->thumb;
        $fumetti->price = $request->price;
        $fumetti->sale_date = $request->sale_date;
        $fumetti->save();

        // Reindirizza a una pagina di conferma o visualizza un messaggio di successo
    }

    public function destroy(Fumetti $fumetti)
    {
        // Elimina un fumetto dal database
        $fumetti->delete();

        // Reindirizza a una pagina di conferma o visualizza un messaggio di successo
    }
}
