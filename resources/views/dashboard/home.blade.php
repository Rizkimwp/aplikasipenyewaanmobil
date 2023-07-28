@extends('layout/home')

@section('content')
<section id="hero" class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1>Selamat Datang di Aplikasi Penyewaan Mobil</h1>
        <p>Sebuah solusi praktis untuk menyewa mobil dengan mudah.</p>
        <a href="{{ route('rental.create') }}" class="btn btn-light btn-lg">Mau Rental?</a>
        <a href="{{ route('car.store') }}" class="btn btn-light btn-lg">Punya Mobil?</a>

    </div>
</section>

<section id="carList" class="py-5">
        <div class="container">
            <h2>Daftar Mobil Tersedia untuk Disewa</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Avanza</h5>
                            <p class="card-text">Nomor Plat: B 1234 XYZ</p>
                            <p class="card-text">Status: Tersedia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Honda CRV</h5>
                            <p class="card-text">Nomor Plat: D 5678 ABC</p>
                            <p class="card-text">Status: Tersedia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Honda CRV</h5>
                            <p class="card-text">Nomor Plat: D 5678 ABC</p>
                            <p class="card-text">Status: Tersedia</p>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan card untuk mobil lainnya -->
            </div>
        </div>
    </section>

@endsection
