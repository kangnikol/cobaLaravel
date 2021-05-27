<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Datas;

class DatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if($request->has('search')){
            $datas = Datas::where('nama', 'like', '%'.$request->search.'%')->paginate(5);
        }
        else{
            // $data = DB::table('data')->paginate(5);
            $datas = Datas::paginate(5);
        }
        return view('datas/index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(datas $datas)
    {
        return view('datas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datas = new Datas;
        // $datas->nama = $request->nama;
        // $datas->alamat = $request->alamat;
        // $datas->telp = $request->telp;

        // $datas->save();

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ]);

        datas::create($request->All());

        return redirect('/datas')->with('status', 'Profile created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(datas $datas)
    {
        return view('datas/show', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(datas $datas)
    {
        return view('datas/edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datas $datas)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'telp' => 'required',
        // ]);

        // datas::edit($request->All());
            datas::where('id', $datas->id)
                    ->update([
                        'nama' => $request->nama,
                        'alamat' => $request->alamat,
                        'telp' => $request->telp
                    ]);
        return redirect('/datas')->with('status', 'Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(datas $datas)
    {
        datas::destroy($datas->id);
        return redirect('/datas')->with('status', 'Profile deleted!');
    }
}
