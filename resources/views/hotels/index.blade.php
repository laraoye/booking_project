@extends('layouts.guest')

@section('content')
    <h1>HotelReservations</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->title }}</td>
                    <td>{{ $reservation->first_name }}</td>
                    <td>{{ $reservation->last_name }}</td>
                    <td>{{ $reservation->email }}</td>
                    <td>
                        <a href="{{ route('flights.edit', $reservation->id) }}">Edit</a>
                        <form action="{{ route('flights.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
