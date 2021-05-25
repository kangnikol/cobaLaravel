<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $data = DB::table('data', 'datas');
        return view('index',['data', 'datas' => $data]);
    }

    public function search(request $request)
    {
        $search = $request->search;
        $data = DB::table('data', 'datas')
        ->where('nama', 'like', "%".$search."%")
        return view('index',['data', 'datas' => $data]);
    }
}
