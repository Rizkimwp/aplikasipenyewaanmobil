@extends('layout.app')

@section('content')
    <h1>Hasil Pencarian Mobil</h1>
    <a href="{{ route('car.index') }}" class="btn btn-secondary mb-3">Kembali</a>

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
                        <td>{{ $car->no_plat }}</td>
                        <td>{{ $car->merek }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->tarif_sewa }}</td>
                        <td>
                            <a href="{{ route('car.show', $car->id) }}" class="btn btn-primary btn-sm">Detail</a>
                            <a href="{{ route('car.edit', $car->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('car.destroy', $car->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada mobil yang ditemukan.</p>
    @endif

@endsection
