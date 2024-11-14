<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{

    public function apiIndex(Request $request)
    {
        $genre = $request->query('genre');

        if ($genre) {
            # code...
            $films = Film::where('genre', $genre)
            -> orderBy('title', 'asc')
            ->get();
        }else {
            $films =Film::orderBy('title', 'asc')->get();
            // $films = Film::all();
        }

        return response()->json($films);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $genre = $request->query('genre');

        if ($genre) {
            # code...
            $films = Film::where('genre', $genre)
            -> orderBy('title', 'asc')
            ->get();
        }else {
            $films =Film::orderBy('title', 'asc')->get();
        }
        return view ('films.index', compact('films','genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
