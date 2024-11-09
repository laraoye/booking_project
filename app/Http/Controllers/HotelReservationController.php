<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelReservationController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all(); // Fetch all hotel reservations
        return view('hotels.index', compact('hotels')); // Return the view
    }

    public function create()
    {
        return view('hotels.create'); // Return the view for creating a new hotel reservation
    }

    public function store(Request $request)
    {
        // Validate and store the hotel reservation
        $validatedData = $request->validate([
            'title' => 'required|string|max:10',
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'dob' => 'required|date',
            'email' => 'required|email|max:50',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:100',
            'city' => 'required|string|max:50',
            'region' => 'nullable|string|max:50',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:50',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date',
            'room_type' => 'required|string|max:50',
            'adults' => 'required|integer|min:1',
            'children' => 'nullable|integer|min:0',
            'special_requests' => 'nullable|string',
        ]);

        Hotel::create($validatedData); // Save the data

        return redirect()->route('hotels.index')->with('success', 'Hotel reserved successfully!');
    }

    public function show($id)
    {
        $hotel = Hotel::findOrFail($id); // Fetch a specific hotel reservation
        return view('hotels.show', compact('hotel')); // Return the view for showing a specific hotel reservation
    }

    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id); // Fetch the hotel for editing
        return view('hotels.edit', compact('hotel')); // Return the view for editing the hotel reservation
    }

    public function update(Request $request, $id)
    {
        // Validate and update the hotel reservation
        $validatedData = $request->validate([
            'title' => 'required|string|max:10',
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'dob' => 'required|date',
            'email' => 'required|email|max:50',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:100',
            'city' => 'required|string|max:50',
            'region' => 'nullable|string|max:50',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:50',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date',
            'room_type' => 'required|string|max:50',
            'adults' => 'required|integer|min:1',
            'children' => 'nullable|integer|min:0',
            'special_requests' => 'nullable|string',
        ]);

        $hotel = Hotel::findOrFail($id);
        $hotel->update($validatedData); // Update with validated data

        return redirect()->route('hotels.index')->with('success', 'Hotel updated successfully!');
    }

    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete(); // Delete the hotel reservation

        return redirect()->route('hotels.index')->with('success', 'Hotel deleted successfully!');
    }
}
