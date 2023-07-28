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
                    <tr
