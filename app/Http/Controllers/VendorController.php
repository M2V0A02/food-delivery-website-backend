<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function index()
    {
        return response()->json(Vendor::all(), 200); 
    }

    public function create()
    {
        $vendor = Vendor::create($_GET);
        return response()->json($vendor,  201); 
    }


    public function store(Request $request)
    {
        $vendor = Vendor::create($request->all());
        return response()->json($vendor,  201); 
    }

    public function show($id)
    {
        return response()->json(Vendor::find($id), 200); 
    }

    public function edit($id)
    {
        $vendor = Vendor::find($id);
        $vendor->update($_GET());
        return response()->json($vendor, 200);
    }

    public function update(Request $request, $id)
    {
        $vendor = Vendor::find($id);
        $vendor->update($request->all());
        return response()->json($vendor, 200);
    }

    public function destroy($id)
    {
        Vendor::find($id)->delete();
        return response()->json('', 204);
    }
}
