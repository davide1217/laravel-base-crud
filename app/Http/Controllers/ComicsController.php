<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicsController extends Controller
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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|url',
            'type' => 'required|max:50'
        ],
        [
            'title.required' => 'Campo obbligatorio',
            'title.max' => 'Diminuire i carratteri, max :max spazi inclusi',
            'image.required' => 'Campo obbligatorio',
            'image.url' => 'Inserire una URL valida',
            'type.required' => 'Campo obbligatorio',
            'type.max' => 'Diminuire i carratteri, max :max spazi inclusi',

        ]);

        $data = $request->all();
        $data['slug'] = $this->createSlug($data['title']);

        $new_comic = new Comic;

        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

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
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|url',
            'type' => 'required|max:50'
        ],
        [
            'title.required' => 'Campo obbligatorio',
            'title.max' => 'Diminuire i carratteri, max :max spazi inclusi',
            'image.required' => 'Campo obbligatorio',
            'image.url' => 'Inserire una URL valida',
            'type.required' => 'Campo obbligatorio',
            'type.max' => 'Diminuire i carratteri, max :max spazi inclusi',

        ]);

        $data = $request->all();
        $data['slug'] = $this->createSlug($data['title']);

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
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

    private function createSlug($string) {
        $slug = Str::slug($string ,'-');

        return $slug;
    }
}
