<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishesController extends Controller
{
    public function index()
    {
        return response()->json(dish::all(), 200); 
    }

    public function create()
    {
        $dish = dish::create($_GET);
        return response()->json($dish,  201); 
    }


    public function store(Request $request)
    {
        $dish = dish::create($request->all());
        return response()->json($dish,  201); 
    }

    public function show($id)
    {
        return response()->json(dish::find($id), 200); 
    }

    public function edit($id)
    {
        $dish = dish::find($id);
        $dish->update($_GET());
        return response()->json($dish, 200);
    }

    public function update(Request $request, $id)
    {
        $dish = dish::find($id);
        $dish->update($request->all());
        return response()->json($dish, 200);
    }

    public function destroy($id)
    {
        dish::find($id)->delete();
        return response()->json('', 204);
    }
}
