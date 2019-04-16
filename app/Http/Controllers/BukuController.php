<?php

namespace App\Http\Controllers;

use App\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah(){

        return view ('formulir')
    }

    public function proses(Request $request){

    

    }

    public function index()
    {
        //
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
         $this->validate($request, [
          'judul'         =>  'required',
          'penerbit'     =>  'required',
          'tahunterbit'   =>  'required',
          'pengarang'      =>  'required'
      ]);
      $data = new buku([
          'judul'         =>  $request->get('judul'),
          'penerbit'     =>  $request->get('penerbit'),
          'tahunterbit'   =>  $request->get('tahunterbit'),
          'pengarang'      =>  $request->get('pengarang')
      ]);
      $data->save();
      return redirect()->route('input/tambah')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(buku $buku)
    {
        //
    }
}
