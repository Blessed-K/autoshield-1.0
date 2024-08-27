<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Models\Booking;


class MaintenanceController extends Controller
{
    // Display a listing of the car maintenance schedules
    // public function index()
    // {
    //     $maintenanceTasks = Maintenance::all();
    //     return view('maintenance.index', compact('maintenanceTasks'));
    // }

    public function index()
    {
        // Retrieve all maintenance tasks from the database
        $bookings = booking::all();
    
        // Pass the maintenance tasks to the view
        return view('maintenance', compact('bookings'));
    }
    

    // Store a newly created maintenance task in the database
    public function store(Request $request)
    {
        $request->validate([
            'c_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date_of_appointment' => 'required|date',
            'time_of_appointment' => 'required|time',
            'service' => 'required',
        ]);

        Maintenance::create($request->all());
        return redirect()->route('maintenance.index')->with('success', 'Maintenance task created successfully.');
    }

    // Update the specified maintenance task in the database
    public function update(Request $request, Maintenance $maintenance)
    {
        $request->validate([
            'c_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date_of_appointment' => 'required|date',
            'time_of_appointment' => 'required|time',
            'service' => 'required',
        ]);

        $maintenance->update($request->all());
        return redirect()->route('maintenance.index')->with('success', 'Maintenance task updated successfully.');
    }

    // Remove the specified maintenance task from the database
    public function destroy(Maintenance $maintenance)
    {
        $maintenance->delete();
        return redirect()->route('maintenance.index')->with('success', 'Maintenance task deleted successfully.');
    }
}
