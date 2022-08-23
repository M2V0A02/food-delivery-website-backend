<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderFood;

class OrderFoodController extends Controller
{
    public function index()
    {
        return response()->json(OrderFood::all(), 200); 
    }

    public function create()
    {
        $orderFood = OrderFood::create($_GET);
        return response()->json($orderFood,  201); 
    }


    public function store(Request $request)
    {
        $orderFood = OrderFood::create($request->all());
        return response()->json($orderFood,  201); 
    }

    public function show($id)
    {
        return response()->json(OrderFood::find($id), 200); 
    }

    public function edit($id)
    {
        $orderFood = OrderFood::find($id);
        $orderFood->update($_GET());
        return response()->json($orderFood, 200);
    }

    public function update(Request $request, $id)
    {
        $orderFood = OrderFood::find($id);
        $orderFood->update($request->all());
        return response()->json($orderFood, 200);
    }

    public function destroy($id)
    {
        OrderFood::find($id)->delete();
        return response()->json('', 204);
    }
}
