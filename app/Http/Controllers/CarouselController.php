<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CarouselFormRequest;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        return view('admin.carousels.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousels.create');
    }

    public function store(CarouselFormRequest $request)
    {
        
        $validatedData = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() .'.'. $ext;
            $file->move('uploads/cara/', $filename);
            $validatedData['image'] = "uploads/cara/$filename";
        }

        Carousel::create([
            'image' => $validatedData['image'],
        ]);
        return redirect('/carousels')->with('message', 'Carousel Created Successfully');
    }
    
    public function destroy($id)
    {
        $cara = Carousel::findOrFail($id);
        $cara->delete();

        return redirect('/carousels')->with('success', 'Carousel is successfully deleted');
    }
}
