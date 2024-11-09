<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightReservationController extends Controller
{
    public function index()
    {
        // Fetch all flight reservations
        $flights = Flight::all();
        return view('flights.create', compact('flights'));
    }

    public function create()
    {
        return view('flights.create'); // Your view for creating a flight
    }

    public function store(Request $request)
    {
        // Validate and store the flight reservation
        $request->validate([
            'title' => 'required|string|max:10',
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'dob' => 'required|date',
            'contact_title' => 'nullable|string|max:10',
            'contact_first' => 'nullable|string|max:30',
            'contact_last' => 'nullable|string|max:30',
            'email' => 'required|email|max:50',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:100',
            'address2' => 'nullable|string|max:100',
            'city' => 'required|string|max:50',
            'region' => 'nullable|string|max:50',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:50',
            'departure_date' => 'required|date',
            'departure_time' => 'required|date_format:H:i',
            'return_date' => 'required|date',
            'return_time' => 'required|date_format:H:i',
            'departing_city' => 'required|string|max:50',
            'departing_country' => 'required|string|max:50',
            'destination_city' => 'required|string|max:50',
            'destination_country' => 'required|string|max:50',
            'airline' => 'required|string|max:50',
            'fare' => 'required|string|max:20',
            // Add other fields as needed
        ]);

        Flight::create($request->all());

        return redirect()->route('flights.create')->with('success', 'Flight created successfully!');
    }
}
