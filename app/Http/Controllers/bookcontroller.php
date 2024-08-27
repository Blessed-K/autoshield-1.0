<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookController extends Controller
{
    /**
     * Display the booking form.
     */
    public function create()
    {
        return view('booking');
    }

    /**
     * Store a newly created booking in storage.
     */
    public function store(Request $request)
    {
       
        // Create a new booking
        $booking = new Booking();
        $booking->c_name = $request->c_name; //$validatedData['name'];
        $booking->email =  $request->email; //$validatedData['email'];
        $booking->phone =  $request->phone;//$validatedData['phone'];
        $booking->date_of_appointment =  $request->date_of_appointment;//$validatedData['date'];
        $booking->time_of_appointment =  $request->time_of_appointment;//$validatedData['time'];
        $booking->service =  $request->service;//$validatedData['service'];
        $booking->save();
        die();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your booking has been successfully submitted!');
    }

    // Other methods remain unchanged
    public function index()
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
