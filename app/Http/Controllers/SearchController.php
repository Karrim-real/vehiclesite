<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
  public function index(Request $request)
    {
       
       
        $data = DB::table('vehicles')->select('makes_id')->distinct()->get()->pluck('makes_id')->sort();
        $years = DB::table('vehicles')->select('year')->distinct()->get()->pluck('year');

        $searches = Vehicle::query();

        if($request->filled('makes_id')){
            $searches->where('makes_id', $request->makes_id);
        }
        if($request->filled('year')){
            $searches->where('year', $request->year);
            
        }

        return view('index', [
            'vehicles' => $vehicles,
            'data' => $data,
            'years' => $years,
            'searches' => $searches->get(),
            ]);
    }
    public function storesearch(Request $request)
    {
        return $request->all();
        return view('my-search');
    }
}
