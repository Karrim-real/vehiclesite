<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Makes;
use App\Models\Models;
use App\Models\Contact;
use App\Models\Vehicle;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactRequest;

class PagesController extends Controller
{
    public function index(Request $request)
    {

        $carousels = Carousel::limit(1)->get();
        $vehicles = Vehicle::limit(8)->get();
        $data = DB::table('makes')->get();
        $years = DB::table('vehicles')->select('year')->distinct()->get()->pluck('year');

        $searches = Vehicle::query();

        if($request->filled('year')){
            $searches->where('year', $request->year);
        }

        return view('index', compact('vehicles', 'carousels','searches', 'data', 'years'));
    }
    public function GetModelAgainstMakeEdit($id){
        echo json_encode(DB::table('models')->where('makes_id', $id)->get());
    }


    public function about()
    {
        return view('about-us');
    }

    public function vehicle(Request $request)
    {
        $vehicles = Vehicle::all();
        $data = DB::table('makes')->get();
        return view('all-vehicles' , compact('vehicles', 'data'));
    }

    public function details($id)
    {
        $detail = Vehicle::findOrFail($id);
        //dd($detail);
        return view('vehicle-details', compact('detail'));
    }

    public function contact()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'comment' => 'required'
        ]);

        Contact::create($request->all());

        return redirect('/contact-us')->with('message', 'Message sent Succesfully');

    }

    public function copyright()
    {
        return view('copyright');
    }

    public function terms()
    {
        return view('terms-of-service');
    }

    public function finance()
    {
        return view('financing');
    }
    public function blog()
    {
        return view('blogs');
    }

    public function career()
    {
        return view('careers');
    }

    public function getData(Request $request)
    {
        // dd($request->all());
        return view('my-search');
    }

    public function searchCar(Request $request)
    {
        // dd($request->all());
        $maker_id = $request->maker;
        $model_id = $request->model;
        $year = $request->year;
        $vehicles = $result = Vehicle::query()->where('makes_id', 'LIKE',"%".$maker_id."%")
        ->orWhere('models_id', 'LIKE', "%". $model_id. "%")->orWhere('year', $year)
        ->get();
        $data = DB::table('makes')->get();
        return view('all-vehicles' , compact('vehicles', 'data'));

    }
}
