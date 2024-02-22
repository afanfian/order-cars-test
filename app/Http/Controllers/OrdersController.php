<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    function index(){
        return view('orders.index',[
            'orders' => Orders::all(),
        ]);
    }
    function create(){
        return view('orders.create',[
            'cars' => Cars::all(),
        ]);
    }
    function store(Request $request){
        Orders::create($request->except('_token', 'submit'));
        return redirect('/orders');
    }
    function edit($id){
        $orders = Orders::with('cars')->find($id);
        return view('orders.edit', [
            'cars'=> Cars::all(), 
            'orders' => $orders
        ]);
    }
    function update(Request $request, $id){
        Orders::find($id)->update($request->except('_token', 'submit', '_method'));
        return redirect('/orders');
    }
    function destroy($id){
        Orders::destroy($id);
        return redirect('/orders');
    }
}
