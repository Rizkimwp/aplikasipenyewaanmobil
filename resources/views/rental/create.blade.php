
@extends('layout.app')

@section('content')
    <section id="rentalForm" class="py-5">
        <div class="container">
            <h2>Peminjaman Mobil</h2>
            <form action="{{ route('rental.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mobil_id">Pilih Mobil</label>
                    <select name="mobil_id" class="form-control" required>
                        @foreach($availableCars as $car)
                        <option value="{{ $car->id }}">{{ $car->merek }} {{ $car->model }} ({{ $car->nomor_plat }})</option>
                        @endforeach
                    </select>
                </div>
                <button name="" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    @endsection
