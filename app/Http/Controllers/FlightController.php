namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view('flights.index', compact('flights'));
    }

    public function create()
    {
        return view('flights.create');
    }

    <!-- public function store(Request $request)
    {
        Flight::create($request->all());
        return redirect()->route('flights.index');
    } -->
    public function store(Request $request)
    {
    $validated = $request->validate([
        'column_name' => 'required|string|max:255',  // Gantilah 'column_name' dengan kolom yang sesuai
        // Tambahkan validasi lain sesuai kebutuhan
    ]);

    Flight::create($validated);
    return redirect()->route('flights.index');
    }

    public function edit($id)
    {
        $flight = Flight::findOrFail($id);
        return view('flights.edit', compact('flight'));
    }

    public function update(Request $request, $id)
    {
        $flight = Flight::findOrFail($id);
        $flight->update($request->all());
        return redirect()->route('flights.index');
    }

    public function destroy($id)
    {
        Flight::findOrFail($id)->delete();
        return redirect()->route('flights.index');
    }
}
