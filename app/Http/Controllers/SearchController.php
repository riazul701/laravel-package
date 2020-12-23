<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
//        $data = Item::select("name")
//            ->where("name","LIKE","%{$request->query}%")
//            ->get();

        $query = $request->get('query');
        $data = Item::select("name")
            ->where("name","LIKE","%{$query}%")
            ->get();

        return response()->json($data);
    }
}
