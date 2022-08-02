<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\Drive;
use App\Models\Image;
use App\Models\Makes;
use App\Models\Models;
use App\Models\Vehicle;
use App\Models\Transmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\VehicleFormRequest;

class VehiclesController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicles.index', compact('vehicles'));
    }
    public function create()
    {
        $transmissions = Transmission::all();
        $bodies = Body::all();
        $drives = Drive::all();
        $makes = Makes::all();
        $models = Models::all();
        return view('admin.vehicles.create-vehicle', compact('transmissions', 'bodies', 'drives', 'models', 'makes'));
    }
    public function store(VehicleFormRequest $request)
    {
        $validatedData = $request->validated();

        if($request->hasFile('main_image')){
            $file = $request->file('main_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() .'.'.$ext;
            $file->move('uploads/main/', $filename);
            $validatedData['main_image'] = "uploads/main/$filename";
        }

        $transmission = Transmission::findOrFail($validatedData['transmission_id']);
        $body = Body::findOrFail($validatedData['body_id']);
        $drive = Drive::findOrFail($validatedData['drive_id']);

        $vehicle = $transmission->vehicles()->create([
            'transmission_id' => $validatedData['transmission_id'],
            'makes_id' => $validatedData['makes_id'],
            'models_id' => $validatedData['models_id'],
            'year' => $validatedData['year'],
            'color' => $validatedData['color'],
            'capacity' => $validatedData['capacity'],
            'description' => $validatedData['description'],
            'fuel' => $validatedData['fuel'],
            'features' => implode(',', $request->features),
            'body_id' => $validatedData['body_id'],
            'drive_id' => $validatedData['drive_id'],
            'main_image' => $validatedData['main_image'],

        ]);
        if($request->hasFile('image')){
            $uploadPath = 'uploads/vehicles/';

            $i = 1;
            foreach($request->file('image') as $imageFile){
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile->move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;

                $vehicle->vehicleImages()->create([
                    'vehicle_id' => $vehicle->id,
                    'image' => $finalImagePathName,
                   ]);
            }
        }
       return redirect('/vehicles')->with('message', 'Vehicle Added Succesfully');

    }


    public function edit(int $vehicle_id)
    {
        $transmissions = Transmission::all();
        $bodies = Body::all();
        $drives = Drive::all();
        $makes = Makes::all();
        $models = Models::all();
        $vehicle = Vehicle::findOrFail($vehicle_id);
        return view('admin.vehicles.edit', compact('transmissions', 'bodies', 'drives', 'vehicle', 'makes', 'models'));
    }
    public function update(VehicleFormRequest $request, int $vehicle_id)
    {
        $validatedData = $request->validated();

        $vehicle = Transmission::findOrFail($validatedData['transmission_id'])
                                ->vehicles()->where('id',$vehicle_id)->first();

        $vehicle = Makes::findOrFail($validatedData['makes_id'])
                                ->vehicles()->where('id',$vehicle_id)->first();

        $vehicle = Models::findOrFail($validatedData['models_id'])
                                ->vehicles()->where('id',$vehicle_id)->first();

        $vehicle = Body::findOrFail($validatedData['body_id'])
                                ->vehicles()->where('id',$vehicle_id)->first();

        $vehicle = Drive::findOrFail($validatedData['drive_id'])
                                ->vehicles()->where('id',$vehicle_id)->first();

        if ($vehicle) {
            $vehicle->update([
                'transmission_id' => $validatedData['transmission_id'],
                'makes_id' => $validatedData['makes_id'],
                'models_id' => $validatedData['models_id'],
                'year' => $validatedData['year'],
                'color' => $validatedData['color'],
                'capacity' => $validatedData['capacity'],
                'fuel' => $validatedData['fuel'],
                'description' => $validatedData['description'],
                'features' => implode(',', $request->features),
                'body_id' => $validatedData['body_id'],
                'drive_id' => $validatedData['drive_id'],
                'main_image' => $validatedData['main_image'],

            ]);
            if($request->hasFile('image')){
                $uploadPath = 'uploads/vehicles/';

                $i = 1;
                foreach($request->file('image') as $imageFile){
                    $extention = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extention;
                    $imageFile->move($uploadPath,$filename);
                    $finalImagePathName = $uploadPath.$filename;

                    $vehicle->vehicleImages()->create([
                        'vehicle_id' => $vehicle->id,
                        'image' => $finalImagePathName,
                       ]);
                }
            }
            return redirect('/vehicles')->with('message', 'Vehicle Updated Succesfully');
        }
        else {
            return redirect('/vehicles')->with('message', 'No such Vehicle ID Found');
        }

    }
    public function show(Vehicles $vehicle)
    {
        return view('admin.vehicles.show', compact('vehicle'));
    }

    public function destroyImage(int $v_images_id)
    {
        $vehicleImages = Image::findOrFail($v_images_id);
        if(File::exists($vehicleImages->image))
        {
            File::delete($vehicleImages->image);
        }
        $vehicleImages -> delete();
        return redirect()->back()->with('message', 'Vehicle Image Deleted');
    }
    public function destroy(int $vehicle_id)
    {
        $vehicle = Vehicle::findOrFail($vehicle_id);
        if($vehicle->vehicleImages)
        {
            foreach ($vehicle->vehicleImages as $image) {
                if(File::exists($image->image)){
                    File::delete($image->image);
                }
            }
        }
        $vehicle->delete();
        return redirect()->back()->with('message', 'Vehicle Deleted Successfully');
    }
}
