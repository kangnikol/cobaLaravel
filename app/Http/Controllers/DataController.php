<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Data;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if($request->has('search')){
            $datA = Data::where('nama', 'like', '%'.$request->search.'%')->paginate(5);
        }else{
            // $data = DB::table('data')->paginate(5);
            $datA = Data::paginate(5);
        }
        return view('data/index', compact('datA'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(data $data)
    {
        return view('data/create');
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
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ]);

        data::create($request->All());

        return redirect('/data')->with('status', 'Data Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(data $data)
    {
        return view('data/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(data $data)
    {
        return view('data/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data $data)
    {
        data::where('id', $data->id)
                    ->update([
                        'nama' => $request->nama,
                        'alamat' => $request->alamat,
                        'telp' => $request->telp
                    ]);
        return redirect('/data')->with('status', 'Data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(data $data)
    {
        data::destroy($data->id);
        return redirect('/data')->with('status', 'Data deleted!');
    }
}
