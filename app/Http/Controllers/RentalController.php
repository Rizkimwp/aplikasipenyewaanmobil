<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Car;

class RentalController extends Controller
{
    public function index()
    {
        $userRentals = Rental::where('user_id', auth()->user()->id)->get();
        return view('car.index', compact('userRentals'));
    }

    public function create(Request $request)
    {
        $availableCars = Car::whereDoesntHave('rentals', function ($query) use ($request) {
            $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                ->orWhereBetween('end_date', [$request->start_date, $request->end_date]);
        })->get();

        return view('car.create', compact('availableCars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Rental::create([
            'car_id' => $request->car_id,
            'user_id' => auth()->user()->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('rental.index')->with('success', 'Peminjaman berhasil dilakukan.');
    }
}

