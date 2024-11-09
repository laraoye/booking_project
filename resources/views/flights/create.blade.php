{{-- resources/views/flights/create.blade.php --}}
@extends('layouts.user') {{-- Use your layout file name --}}

@section('content') {{-- This section will be injected into the layout --}}

<div class="form-container">
    <h1>Create a Flight Reservation</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <form action="{{ route('flights.store') }}" method="POST">
            @csrf
            <div class="input-row">
                <div class="input-group">
                    <label for="title">Title</label>
                    <select id="title" name="title" required>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div class="input-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
            </div>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>

            <div class="input-row">
                <div class="input-group">
                    <label for="contact_title">Contact Person Title</label>
                    <select id="contact_title" name="contact_title" required>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="contact_first">Contact First Name</label>
                    <input type="text" id="contact_first" name="contact_first" required>
                </div>
                <div class="input-group">
                    <label for="contact_last">Contact Last Name</label>
                    <input type="text" id="contact_last" name="contact_last" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
            </div>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>
            <input type="text" id="address2" name="address2" placeholder="Street Address Line 2">

            <div class="input-row">
                <div class="input-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="input-group">
                    <label for="region">Region</label>
                    <input type="text" id="region" name="region" required>
                </div>
            </div>

            <label for="postal_code">Postal/Zip Code</label>
            <input type="text" id="postal_code" name="postal_code" required>

            <label for="country">Country</label>
            <input type="text" id="country" name="country" required>

            <div class="input-row">
                <div class="input-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" id="departure_date" name="departure_date" required>
                    <input type="time" id="departure_time" name="departure_time" required>
                </div>
                <div class="input-group">
                    <label for="return_date">Return Date</label>
                    <input type="date" id="return_date" name="return_date" required>
                    <input type="time" id="return_time" name="return_time" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label for="departing_city">Departing From (City)</label>
                    <input type="text" id="departing_city" name="departing_city" required>
                </div>
                <div class="input-group">
                    <label for="departing_country">Departing From (Country)</label>
                    <input type="text" id="departing_country" name="departing_country" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label for="destination_city">Destination City</label>
                    <input type="text" id="destination_city" name="destination_city" required>
                </div>
                <div class="input-group">
                    <label for="destination_country">Destination Country</label>
                    <input type="text" id="destination_country" name="destination_country" required>
                </div>
            </div>

            <label for="airline">Airline</label>
            <input type="text" id="airline" name="airline" required>

            <label for="fare">Fare Type</label>
            <select id="fare" name="fare" required>
                <option value="One Way">One Way</option>
                <option value="Round Trip">Round Trip</option>
            </select>
            @csrf
            <!-- Your form fields here -->
            <button type="submit">Submit</button>
        </form>

        <footer>
            <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
        </footer>
    </div>

@endsection

@section('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 50%;
            margin: 2rem auto;
            background: #fff;
            padding: 2rem;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 1rem;
        }

        p {
            text-align: center;
            font-size: 0.9rem;
            color: #666;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 0.5rem 0 0.3rem;
        }

        input, textarea, select {
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        input[type="radio"] {
            width: auto;
        }

        button {
            padding: 1rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .input-row {
            display: flex;
            justify-content: space-between;
        }

        .input-group {
            width: 48%;
        }

        @media screen and (max-width: 768px) {
            .form-container {
                width: 90%;
            }

            .input-row {
                flex-direction: column;
            }

            .input-group {
                width: 100%;
            }
        }
    </style>

@endsection
