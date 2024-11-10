<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight; // Import FlightReservation model
use App\Models\Hotel;  // Import HotelReservation model
use App\Models\Booking;       // Import Reservation model, or adjust to your model

class AdminController extends Controller
{
    // Dashboard method to fetch flight and hotel counts and list of flights
    public function dashboard()
    {
        // Fetch flight and hotel counts
        $flightCount = Flight::count();  // Ensure FlightReservation model exists
        $hotelCount = Hotel::count();    // Ensure HotelReservation model exists

        // Fetch all flights (you can paginate this if needed)
        $flights = Flight::all(); // Or use paginate() for large datasets

        // Return the dashboard view with the fetched data
        return view('admin.dashboard', compact('flightCount', 'hotelCount', 'flights'));
    }

    // Example page method for showing a specific reservation
    public function somePage() {
        // Fetch a specific reservation by its ID (in this case, ID 1)
        $reservation = Booking::find(1); // Make sure the Reservation model exists

        // Check if the reservation was found
        if (!$reservation) {
            // Handle case where no reservation is found, maybe return an error page
            return redirect()->back()->withErrors(['msg' => 'Reservation not found']);
        }

        // Return the view with the reservation data
        return view('somePage', compact('reservation'));
    }

    public function viewHotel()
    {
        // Fetch all hotel reservations
        $hotelReservations = Hotel::all(); // Ensure HotelReservation model exists

        // Pass the variable to the view
        return view('admin.view-hotel', compact('hotel')); // Correct variable name here
    }
    public function viewUserHotel($id)
    {
        // Fetch the hotel reservation by ID
        $reservation = Hotel::find($id);

        // Check if the reservation exists
        if (!$reservation) {
            return redirect()->back()->withErrors(['msg' => 'Hotel reservation not found']);
        }

        // Pass the reservation to the view
        return view('admin.view-user-hotel', compact('reservation'));
    }

    public function viewUserFlight($id)
    {
        // Fetch the reservation by ID
        $reservation = Flight::find($id);

        // Check if the reservation exists
        if (!$reservation) {
            return redirect()->back()->withErrors(['msg' => 'Flight reservation not found']);
        }

        // Pass the reservation to the view
        return view('admin.view-user-flight', compact('reservation'));
    }

    public function viewFlight()
    {
        $reservations = Flight::all();
        return view('admin.view-flight', compact('reservations'));
    }

    public function sidebar()
    {
        return view('admin.sidebar');
    }
}
