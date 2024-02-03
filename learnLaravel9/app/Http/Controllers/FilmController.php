<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;
use File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::get();
        return view('film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::get();
        return view('film.create', compact('genre'));
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
            'title' => 'required',
            'summary' => 'required',
            'year' => 'required',
            'poster' => 'required | image | mimes:png,jpg,jpeg,svg | max:2048',
            'genre_id' => 'required',
        ]);

        $filename = time().'.'.$request->poster->extension();
        $request->poster->move(public_path('image'), $filename);

        $film = new Film;
        $film->title = $request->title;
        $film->summary = $request->summary;
        $film->year = $request->year;
        $film->poster = $filename;
        $film->genre_id = $request->genre_id;
        $film->save();

        return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::find($id);
        return view('film.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
        $genre = Genre::get();

        return view('film.edit', compact('film', 'genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'year' => 'required',
            'poster' => 'image | mimes:png,jpg,jpeg,svg | max:2048',
            'genre_id' => 'required',
        ]);

        $film = Film::find($id);
        if ($request->has('poster')){
            $path = 'image/';
            File::delete($path. $film->poster);

            $filename = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('image'), $filename);

            $film->poster = $filename;
            $film->save();
        }

        $film->title = $request['title'];
        $film->summary = $request['summary'];
        $film->year = $request['year'];
        $film->genre_id = $request['genre_id'];
        $film->save();

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::find($id);

        $path = 'image/';
        File::delete($path. $film->poster);

        $film->delete();
        return redirect('/film');
    }
}
