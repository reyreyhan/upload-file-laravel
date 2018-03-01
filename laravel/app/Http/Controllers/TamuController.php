<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ModelTamu;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelTamu::all();
        return view('tamu2',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tamu2create');
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
        $data = new ModelTamu();
        $data->nama = $request->nama;
        $data->nrp = $request->nrp;
        $data->laporan = $request->laporan;
        $data->status = 'Belum';

        $this->validate($request, [
            'file' => 'required|file|max:2000'
        ]);

        $file = $request->file('file');
        $path = base_path() . '\public\image';
        print_r($path);
        $fileName = $file->getClientOriginalName();
        $up = $request->file('file')->move($path,$fileName);


        $data->image = $fileName;
        $data->save();
        return redirect()->route('tamu.index');

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
        $data = ModelTamu::where('id',$id)->get();
        return view('tamu2edit',compact('data'));
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
        $data =  ModelTamu::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->nrp = $request->nrp;
        $data->laporan = $request->laporan;
        $data->status = 'Belum';
        $data->save();
        return redirect()->route('tamu.index');
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
        $data = ModelTamu::where('id',$id)->first();
        $data->delete();
        return redirect()->route('tamu.index');
    }
}
