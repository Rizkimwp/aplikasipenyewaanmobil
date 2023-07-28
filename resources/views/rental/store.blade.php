
@extends('layout.available')

@section('content')
<section id="rentalList" class="py-5">
    <div class="container">
        <h2>Daftar Mobil yang Sedang Anda Sewa</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Merek</th>
                    <th>Model</th>
                    <th>Nomor Plat</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userRentals as $rental)
                <tr>
                    <td>{{ $rental->car->merek }}</td>
                    <td>{{ $rental->car->model }}</td>
                    <td>{{ $rental->car->nomor_plat }}</td>
                    <td>{{ $rental->tanggal_mulai }}</td>
                    <td>{{ $rental->tanggal_selesai }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
