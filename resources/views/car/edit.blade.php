@extends('layout.app')

@section('content')
    <h1>Edit Mobil</h1>

    <form action="{{ route('car.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nomor_plat" class="form-label">Nomor Plat</label>
            <input type="text" name="nomor_plat" class="form-control" value="{{ $car->nomor_plat }}">
        </div>
        <div class="mb-3">
            <label for="merek" class="form-label">Merek</label>
            <input type="text" name="merek" class="form-control" value="{{ $car->merek }}">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" name="model" class="form-control" value="{{ $car->model }}">
        </div>
        <div class="mb-3">
            <label for="tarif_sewa_per_hari" class="form-label">Tarif Sewa per Hari</label>
            <input type="number" name="tarif_sewa_per_hari" class="form-control" value="{{ $car->tarif_sewa_per_hari }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
