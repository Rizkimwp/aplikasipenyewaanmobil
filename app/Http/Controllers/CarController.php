<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('car.index', compact('cars'));
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merek' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'nomor_plat' => 'required|string|unique:cars|max:20',
            'tarif_sewa_per_hari' => 'required|numeric|min:0',
        ]);

        Car::create($request->all());

        return redirect()->route('car.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function edit(Car $car)
    {
        return view('car.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'merek' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'nomor_plat' => 'required|string|unique:cars,nomor_plat,' . $car->id . '|max:20',
            'tarif_sewa_per_hari' => 'required|numeric|min:0',
        ]);

        $car->update($request->all());

        return redirect()->route('car.index')->with('success', 'Mobil berhasil diperbarui.');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $cars = Car::where('merek', 'like', "%$keyword%")
            ->orWhere('model', 'like', "%$keyword%")
            ->orWhere('nomor_plat', 'like', "%$keyword%")
            ->get();

        return view('car.index', compact('cars'));
    }
}

