<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penerbangan</title>
</head>
<body>
    <h1>Daftar Penerbangan</h1>
    <a href="{{ route('flights.create') }}">Tambah Penerbangan</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Flight Number</th>
                <th>Airline</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($flights as $flight)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->airline }}</td>
                    <td>{{ $flight->origin }}</td>
                    <td>{{ $flight->destination }}</td>
                    <td>
                        <a href="{{ route('flights.edit', $flight->id) }}">Edit</a>
                        <a href="{{ route('flights.delete', $flight->id) }}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No flights available.</td>
                </tr>
            @endforelse
        </tbody>

    </table>
</body>
</html>
