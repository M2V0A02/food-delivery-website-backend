<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ListDishesOfOrder;

class ListDishOfOrdersController extends Controller
{
    public function index()
    {
        return response()->json(ListDishesOfOrder::all(), 200); 
    }

    public function create()
    {
        $listDishesOfOrder = ListDishesOfOrder::create($_GET);
        return response()->json($listDishesOfOrder,  201); 
    }


    public function store(Request $request)
    {
        $listDishesOfOrder = ListDishesOfOrder::create($request->all());
        return response()->json($listDishesOfOrder,  201); 
    }

    public function show($id)
    {
        return response()->json(ListDishesOfOrder::find($id), 200); 
    }

    public function edit($id)
    {
        $listDishesOfOrder = ListDishesOfOrder::find($id);
        $listDishesOfOrder->update($_GET());
        return response()->json($listDishesOfOrder, 200);
    }

    public function update(Request $request, $id)
    {
        $listDishesOfOrder = ListDishesOfOrder::find($id);
        $listDishesOfOrder->update($request->all());
        return response()->json($listDishesOfOrder, 200);
    }

    public function destroy($id)
    {
        ListDishesOfOrder::find($id)->delete();
        return response()->json('', 204);
    }
}
