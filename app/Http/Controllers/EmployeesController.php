<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeesController extends Controller
{
    public function index()
    {
        return response()->json(Employee::all(), 200); 
    }

    public function create()
    {
        $employee = Employee::create($_GET);
        return response()->json($employee,  201); 
    }


    public function store(Request $request)
    {
        $employee = Employee::create($request->all());
        return response()->json($employee,  201); 
    }

    public function show($id)
    {
        return response()->json(Employee::find($id), 200); 
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        $employee->update($_GET());
        return response()->json($employee, 200);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->update($request->all());
        return response()->json($employee, 200);
    }

    public function destroy($id)
    {
        Employee::find($id)->delete();
        return response()->json('', 204);
    }
}
