
@extends('layout.sewa')

@section('content')
    <h1>Daftar Mobil yang Sedang Disewa</h1>
    <a href="{{ route('rental.create') }}" class="btn btn-primary mb-3">Peminjaman Mobil Baru</a>

    @if(count($userRentals) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No Plat</th>
                    <th>Merek</th>
                    <th>Model</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userRentals as $rental)
                    <tr>
                        <td>{{ $rental->car->no_plat }}</td>
                        <td>{{ $rental->car->merek }}</td>
                        <td>{{ $rental->car->model }}</td>
                        <td>{{ $rental->start_date }}</td>
                        <td>{{ $rental->end_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada mobil yang sedang Anda sewa.</p>
    @endif

@endsection
