{{-- dashboard --}}

@extends('home')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Eassy Borrow Dashboard</h3>
                <p class="text-subtitle text-muted">Pinjam
                    Barang? Kami Solusinya!</p>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="d-flex flex-wrap justify-content-around">
                <div class="card">
                    <div class="card-body px-4 py-4-5 text-center">
                        <h5>Data Peminjaman</h5>
                        <h6 class="text-muted font-semibold">Data
                            barang yang dipinjam</h6>
                        <h1 class="font-extrabold mb-0">{{ $peminjaman }}</h1>
                        <a href="{{ route('peminjaman.index') }}" class="btn btn-primary">Lihat
                            Data Peminjaman</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body px-4 py-4-5 text-center">
                        <h5>Data Barang</h5>
                        <h6 class="text-muted font-semibold">Jumlah
                            barang saat ini</h6>
                        <h1 class="font-extrabold mb-0">{{ $barang }}</h1>
                        <a href="{{ route('barang.index') }}" class="btn btn-primary">Lihat
                            Data Barang</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body px-4 py-4-5 text-center">
                        <h5>Data User</h5>
                        <h6 class="text-muted font-semibold">Jumlah
                            User Saat ini</h6>
                        <h1 class="font-extrabold mb-0">{{ $user }}</h1>
                        <a href="{{ route('user.index') }}" class="btn btn-primary">Lihat
                            Data User</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="font-extrabold mb-0">Data Peminjaman</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pinjams as $pinjam)
                                <tr>
                                    <td>{{ $start++ }}</td>
                                    <td>{{ $pinjam->user->nama_user }}</td>
                                    <td>{{ $pinjam->barang->nama_barang }}</td>
                                    <td>{{ $pinjam->tanggal_peminjaman }}</td>
                                    <td>{{ $pinjam->tanggal_pengembalian }}</td>
                                    <td>
                                        <span class="badge bg-success">{{ $pinjam->status_peminjaman }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
