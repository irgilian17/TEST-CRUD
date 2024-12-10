<h1>Tambah Penerbangan</h1>
<form method="POST" action="{{ route('flights.store') }}">
    @csrf
    <label>Flight Number:</label><input type="text" name="flight_number"><br>
    <label>Airline:</label><input type="text" name="airline"><br>
    <label>Origin:</label><input type="text" name="origin"><br>
    <label>Destination:</label><input type="text" name="destination"><br>
    <label>Departure Time:</label><input type="datetime-local" name="departure_time"><br>
    <label>Arrival Time:</label><input type="datetime-local" name="arrival_time"><br>
    <button type="submit">Submit</button>
</form>
