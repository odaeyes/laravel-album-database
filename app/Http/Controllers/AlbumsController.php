<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Songs;
use App\Artists;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $albums = Albums::all();
      return response()->json($albums, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('albums.create');
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
        $request->validate([
        'albumname'=>'required',
        'productyear'=> 'required',
        'kind' => 'required',
        'cover' => 'required',
        'label' => 'required',
        'rank' => 'required',
        'name' => 'required',
        'productdate' => 'required',
        'lastname' => 'required',
        'firstname' => 'required'
      ]);
      $album = new Albums([
        'albumname' => $request->get('albumname'),
        'productyear'=> $request->get('productyear'),
        'kind'=> $request->get('kind'),
        'cover'=> $request->get('cover'),
        'label'=> $request->get('label'),
        'rank'=> $request->get('rank')
      ]);
      $album->save();
      $song = new Songs([
        'name'=> $request->get('name'),
        'productdate'=> $request->get('productdate')
      ]);
      $song->save();
      $artist = new Artists([
        'lastname'=> $request->get('lastname'),
        'firstname'=> $request->get('firstname')
      ]);
      $artist->save();
      return $status ? "OK" : 'Failed';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function show(Albums $albums)
    {
        //
        $album = Albums::find($albums);
        return response()->json($album, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function edit(Albums $albums)
    {
        //
        $album = Albums::find($albums);
        return view('albums.edit', compact('album'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Albums $albums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function destroy(Albums $albums)
    {
        //
    }
}
