<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    function index(){
        // @dd(Cars::all() -> toJson());
        return view('cars.index',[
            'cars' => Cars::all(),
        ]);
    }
    function create(){
        return view('cars.create');
    }
    function store(Request $request)
    {
        $request->validate([
            'car_name' => 'required',
            'day_rate' => 'required',
            'month_rate' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $path_name = date('Y-m-d H:i:s').$request->image->getClientOriginalName();

        $request->image->StoreAs('public/images', $path_name);

        $cars = new Cars();
        $cars->car_name = $request->car_name;
        $cars->day_rate = $request->day_rate;
        $cars->month_rate = $request->month_rate;
        $cars->image = $path_name;

        $cars->save();

        return redirect('/cars');
    }


    function edit($id){
        $cars = Cars::find($id);
        return view('cars.edit', compact(['cars']));
    }

    function update(Request $request, $id)
    {
        $path_name = date('Y-m-d H:i:s').$request->image->getClientOriginalName();

        $validatedData = $request->validate([
            'car_name' => 'required',
            'day_rate' => 'required',
            'month_rate' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' 
        ]);

        $car = Cars::find($id);

        if ($request->hasFile('image')) {
            Storage::delete($car->image); 
            $request->file('image')->StoreAs('public/images', $path_name); 
            $validatedData['image'] = $path_name;
        }

        $car->update($validatedData);

        return redirect('/cars');
    }
    function destroy($id){
        Cars::destroy($id);
        return redirect('/cars');
    }
}
