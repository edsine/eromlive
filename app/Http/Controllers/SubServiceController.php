<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\SubService;

class SubServiceController extends Controller
{
    //
    public function index()
    {
        $employees = SubService::all();

        return view('sub_services.index', compact('employees'));
    }

    public function create()
    {
        $services = Employee::all();
    return view('sub_services.create', compact('services'));
    }

    public function store(Request $request)
{
    $request->validate([
        'service_id' => 'required|exists:employees,id',
        'name' => 'required|string|max:255',
    ]);

    SubService::create([
        'service_id' => $request->input('service_id'),
        'name' => $request->input('name'),
        'status' => 1,
    ]);

    return redirect()->route('sub-services.index')->with('success', 'Sub-Service added successfully.');
}

    public function edit($id)
    {
        $subservices = SubService::findOrFail($id);
        $services = Employee::all();
        return view('sub_services.edit', compact(['services', 'subservices']));
    }

    public function update(Request $request, SubService $subService)
{
    $request->validate([
        'service_id' => 'required|exists:employees,id',
        'name' => 'required|string|max:255',
    ]);

    $subService = SubService::findOrFail($subService->id);
    $subService->update([
        'service_id' => $request->input('service_id'),
        'name' => $request->input('name'),
    ]);

    return redirect()->route('sub-services.index')->with('success', 'Sub-Service updated successfully.');
}

    public function destroy(SubService $subService)
    {
        if ($subService->delete())
            return redirect()->back()->with('success', 'Sub-Service deleted successfully!');
        return redirect()->back()->with('error', 'Sub-Service could not be deleted!');
    }
}