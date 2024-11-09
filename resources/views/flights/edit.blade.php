@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h2>Edit Flight Reservation</h2>
        <form action="{{ route('flights.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="input-row">
                <div class="input-group">
                    <label for="title">Title</label>
                    <select id="title" name="title" required>
                        <option value="Mr" {{ $reservation->title === 'Mr' ? 'selected' : '' }}>Mr</option>
                        <option value="Mrs" {{ $reservation->title === 'Mrs' ? 'selected' : '' }}>Mrs</option>
                        <option value="Ms" {{ $reservation->title === 'Ms' ? 'selected' : '' }}>Ms</option>
                        <option value="Dr" {{ $reservation->title === 'Dr' ? 'selected' : '' }}>Dr</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" value="{{ $reservation->first_name }}" required>
                </div>
                <div class="input-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="{{ $reservation->last_name }}" required>
                </div>
            </div>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" value="{{ $reservation->dob }}" required>

            <div class="input-row">
                <div class="input-group">
                    <label for="contact_title">Contact Person Title</label>
                    <select id="contact_title" name="contact_title" required>
                        <option value="Mr" {{ $reservation->contact_title === 'Mr' ? 'selected' : '' }}>Mr</option>
                        <option value="Mrs" {{ $reservation->contact_title === 'Mrs' ? 'selected' : '' }}>Mrs</option>
                        <option value="Ms" {{ $reservation->contact_title === 'Ms' ? 'selected' : '' }}>Ms</option>
                        <option value="Dr" {{ $reservation->contact_title === 'Dr' ? 'selected' : '' }}>Dr</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="contact_first">Contact First Name</label>
                    <input type="text" id="contact_first" name="contact_first" value="{{ $reservation->contact_first }}" required>
                </div>
                <div class="input-group">
                    <label for="contact_last">Contact Last Name</label>
                    <input type="text" id="contact_last" name="contact_last" value="{{ $reservation->contact_last }}" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ $reservation->email }}" required>
                </div>
                <div class="input-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="{{ $reservation->phone }}" required>
                </div>
            </div>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{ $reservation->address }}" required>
            <input type="text" id="address2" name="address2" value="{{ $reservation->address2 }}" placeholder="Street Address Line 2">

            <div class="input-row">
                <div class="input-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" value="{{ $reservation->city }}" required>
                </div>
                <div class="input-group">
                    <label for="region">Region</label>
                    <input type="text" id="region" name="region" value="{{ $reservation->region }}">
                </div>
            </div>

            <label for="postal_code">Postal/Zip Code</label>
            <input type="text" id="postal_code" name="postal_code" value="{{ $reservation->postal_code }}" required>

            <label for="country">Country</label>
            <input type="text" id="country" name="country" value="{{ $reservation->country }}" required>

            <div class="input-row">
                <div class="input-group">
                    <label for="departure_date">Departure Date</label>
                    <input type="date" id="departure_date" name="departure_date" value="{{ $reservation->departure_date }}" required>
                    <input type="time" id="departure_time" name="departure_time" value="{{ $reservation->departure_time }}" required>
                </div>
                <div class="input-group">
                    <label for="return_date">Return Date</label>
                    <input type="date" id="return_date" name="return_date" value="{{ $reservation->return_date }}" required>
                    <input type="time" id="return_time" name="return_time" value="{{ $reservation->return_time }}" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label for="departing_city">Departing From (City)</label>
                    <input type="text" id="departing_city" name="departing_city" value="{{ $reservation->departing_city }}" required>
                </div>
                <div class="input-group">
                    <label for="departing_country">Departing From (Country)</label>
                    <input type="text" id="departing_country" name="departing_country" value="{{ $reservation->departing_country }}" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-group">
                    <label for="destination_city">Destination City</label>
                    <input type="text" id="destination_city" name="destination_city" value="{{ $reservation->destination_city }}" required>
                </div>
                <div class="input-group">
                    <label for="destination_country">Destination Country</label>
                    <input type="text" id="destination_country" name="destination_country" value="{{ $reservation->destination_country }}" required>
                </div>
            </div>

            <label for="airline">Airline</label>
            <input type="text" id="airline" name="airline" value="{{ $reservation->airline }}" required>

            <label for="fare">Fare Type</label>
            <select id="fare" name="fare" required>
                <option value="One Way" {{ $reservation->fare === 'One Way' ? 'selected' : '' }}>One Way</option>
                <option value="Round Trip" {{ $reservation->fare === 'Round Trip' ? 'selected' : '' }}>Round Trip</option>
            </select>

            <button type="submit">Update Reservation</button>
        </form>
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
