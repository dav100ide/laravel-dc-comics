<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //prendo tutti i dati
        // $data = $request->all();
        // //creo l'oggetto model
        // $new_comic = new Comic();
        // //mass fill
        // $new_comic->fill($data);

        // $new_comic->save();
        // return redirect()->route('comics.show', $new_comic->id);

        $request->validate([
            'title' => 'required|string|min:5|max:50',
            'thumb' => 'nullable|url',
            'type' => 'required|string|min:5|max:50',
            'price' => 'required|decimal:2',
            'series' => 'required|string|min:5|max:50',
            'description' => 'nullable|string',
            'sale_date' => 'date'
        ]);

        $data = $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // recupero tutti i dati
        // $data = $request->all();

        // $comic->update($data);

        // return redirect()->route('comics.show', $comic->id);
        $request->validate([
            'title' => 'required|string|min:5|max:50',
            'thumb' => 'nullable|url',
            'type' => 'required|string|min:5|max:50',
            'price' => 'required|decimal:2',
            'series' => 'required|string|min:5|max:50',
            'description' => 'nullable|string',
            'sale_date' => 'date'
        ]);

        $data = $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
