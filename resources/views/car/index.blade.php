@extends('layout.index')

@section('content')
    <h1>Daftar Mobil</h1>
    <a href="{{ route('car.create') }}" class="btn btn-primary mb-3">Tambah Mobil</a>

    <form action="{{ route('car.search') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="Cari mobil...">
            <button type="submit" class="btn btn-outline-secondary">Cari</button>
        </div>
    </form>
    @if(count($cars) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No Plat</th>
                    <th>Merek</th>
                    <th>Model</th>
                    <th>Tarif Sewa/Hari</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car->nomor_plat }}</td>
                        <td>{{ $car->merek }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->tarif_sewa_per_hari }}</td>
                        <td>
                            <a href="{{ route('car.edit', $car->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada mobil yang tersedia.</p>
    @endif
@endsection
