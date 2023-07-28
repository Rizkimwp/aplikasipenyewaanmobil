<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\RentalReturn;

class ReturnController extends Controller
{
    public function showReturnForm()
    {
        return view('returns.return');
    }
    public function returnCar(Request $request)
    {
        $request->validate([
            'nomor_plat' => 'required|string|exists:cars,nomor_plat',
        ]);

        $rental = Rental::where('car_id', $request->nomor_plat)
            ->where('user_id', auth()->user()->id)
            ->whereNull('return_date')
            ->first();

        if (!$rental) {
            return redirect()->back()->with('error', 'Mobil tidak ditemukan atau Anda tidak memiliki peminjaman mobil yang aktif.');
        }

        $returnDate = now()->toDateString();
        $totalDays = $rental->start_date->diffInDays(now()) + 1;
        $totalCost = $totalDays * $rental->car->tarif_sewa_per_hari;

        RentalReturn::create([
            'rental_id' => $rental->id,
            'return_date' => $returnDate,
            'total_days' => $totalDays,
            'total_cost' => $totalCost,
        ]);

        return redirect()->back()->with('success', 'Mobil berhasil dikembalikan. Total biaya sewa: Rp ' . number_format($totalCost, 2));
    }
}
