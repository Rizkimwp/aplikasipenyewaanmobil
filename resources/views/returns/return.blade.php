@extends('layout.pengembalian')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pengembalian Mobil</div>

                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('return.car') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nomor_plat">Nomor Plat Mobil</label>
                                <input type="text" name="nomor_plat" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Kembalikan Mobil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
