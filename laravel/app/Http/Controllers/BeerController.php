<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        // dd($beers);
        return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $request->validate(
            [
                'nome' => 'required',
                'produttore' => 'required',
                'grado_alcolico' => 'required|size:1',
                'nazionalità' => 'required|max:10'
            ]
        );
        $beer = new Beer();
        // $beer->nome = $data['nome'];
        // $beer->produttore = $data['produttore'];
        // $beer->grado_alcolico = $data['grado_alcolico'];
        // $beer->nazionalità = $data['nazionalità'];

        $beer->fill($data);

        $result = $beer->save();

        return redirect()->route('beers.index');

        // $newBeer = Beer::orderBy('id', 'DESC')->first();
        // return redirect()->route('beers.show', $newBeer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    // public function show($id)
    {
        // $beer = Beer::findOrFail($id);
        // if(empty($beer)) {
        //     abort('404');
        // }

        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request->all();
        $beer->update($data);

        return redirect()->route('beers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();
        return redirect()->route('beers.index');
    }
}
