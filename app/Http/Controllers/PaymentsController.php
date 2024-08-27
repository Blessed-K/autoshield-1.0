<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment');

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $payment = new Payment();
        $payment->customer_name = $request->customer_name; 
        $payment->email = $request->email; 
        $payment->phone = $request->phone;
        $payment->vehicle_info = $request->vehicle_info;
        $payment->parts_cost = $request->parts_cost;
        $payment->services_cost = $request->services_cost;
        $payment->total_amount = $request->total_amount;
        $payment->save();
       
         // Redirect to the 'new-payment' route
    return redirect()->route('new-payment');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function newPayment()
    {
        // Logic for the new-payment page
        return view('new-payment');
    }
}