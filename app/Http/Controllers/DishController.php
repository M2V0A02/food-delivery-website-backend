<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{
    public function index()
    {
        return response()->json(Dish::all(), 200); 
    }

    public function create()
    {
        $dish = Dish::create($_GET);
        return response()->json($dish,  201); 
    }


    public function store(Request $request)
    {
        $dish = Dish::create($request->all());
        return response()->json($dish,  201); 
    }

    public function show($id)
    {
        return response()->json(Dish::find($id), 200); 
    }

    public function edit($id)
    {
        $dish = Dish::find($id);
        $dish->update($_GET());
        return response()->json($dish, 200);
    }

    public function update(Request $request, $id)
    {
        $dish = Dish::find($id);
        $dish->update($request->all());
        return response()->json($dish, 200);
    }

    public function destroy($id)
    {
        Dish::find($id)->delete();
        return response()->json('', 204);
    }
}
