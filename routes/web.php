use App\Http\Controllers\FlightController;

Route::get('/', [FlightController::class, 'index'])->name('flights.index');
Route::get('/create', [FlightController::class, 'create'])->name('flights.create');
Route::post('/store', [FlightController::class, 'store'])->name('flights.store');
Route::get('/edit/{id}', [FlightController::class, 'edit'])->name('flights.edit');
Route::post('/update/{id}', [FlightController::class, 'update'])->name('flights.update');
Route::get('/delete/{id}', [FlightController::class, 'destroy'])->name('flights.delete');
