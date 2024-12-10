<h1>Edit Penerbangan</h1>
<form method="POST" action="{{ route('flights.update', $flight->id) }}">
    @csrf
    <label>Flight Number:</label><input type="text" name="flight_number" value="{{ $flight->flight_number }}"><br>
    <label>Airline:</label><input type="text" name="airline" value="{{ $flight->airline }}"><br>
    <label>Origin:</label><input type="text" name="origin" value="{{ $flight->origin }}"><br>
    <label>Destination:</label><input type="text" name="destination" value="{{ $flight->destination }}"><br>
    <label>Departure Time:</label><input type="datetime-local" name="departure_time" value="{{ $flight->departure_time }}"><br>
    <label>Arrival Time:</label><input type="datetime-local" name="arrival_time" value="{{ $flight->arrival_time }}"><br>
    <button type="submit">Update</button>
</form>
