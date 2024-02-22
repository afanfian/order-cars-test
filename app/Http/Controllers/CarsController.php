<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    function index(){
        return view('cars.index',[
            'cars' => Cars::all(),
        ]);
    }
    function create(){
        return view('cars.create');
    }
    function store(Request $request){
        Cars::create($request->except('_token', 'submit'));
        return redirect('/cars');
    }
    function edit($id){
        $cars = Cars::find($id);
        return view('cars.edit', compact(['cars']));
    }
    function update(Request $request, $id){
        Cars::find($id)->update($request->except('_token', 'submit', '_method'));
        return redirect('/cars');
    }
    function destroy($id){
        Cars::destroy($id);
        return redirect('/cars');
    }
}
