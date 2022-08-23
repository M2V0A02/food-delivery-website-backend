<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuSection;

class MenuSectionController extends Controller
{
    public function index()
    {
        return response()->json(MenuSection::all(), 200); 
    }

    public function create()
    {
        $menuSection = MenuSection::create($_GET);
        return response()->json($menuSection,  201); 
    }


    public function store(Request $request)
    {
        $menuSection = MenuSection::create($request->all());
        return response()->json($menuSection,  201); 
    }

    public function show($id)
    {
        return response()->json(MenuSection::find($id), 200); 
    }

    public function edit($id)
    {
        $menuSection = MenuSection::find($id);
        $menuSection->update($_GET());
        return response()->json($menuSection, 200);
    }

    public function update(Request $request, $id)
    {
        $menuSection = MenuSection::find($id);
        $menuSection->update($request->all());
        return response()->json($menuSection, 200);
    }

    public function destroy($id)
    {
        MenuSection::find($id)->delete();
        return response()->json('', 204);
    }
}
