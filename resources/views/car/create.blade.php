@extends('layout.create')

@section('content')
    <h1>Tambah Mobil Baru</h1>

    <form action="{{ route('car.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomor_plat" class="form-label">Nomor Plat</label>
            <input type="text" name="nomor_plat" class="form-control">
        </div>
        <div class="mb-3">
            <label for="merek" class="form-label">Merek</label>
            <input type="text" name="merek" class="form-control">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" name="model" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tarif_sewa_per_hari" class="form-label">Tarif Sewa per Hari</label>
            <input type="number" name="tarif_sewa_per_hari" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
