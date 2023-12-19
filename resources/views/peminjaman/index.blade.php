@extends('home')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Peminjaman</h3>
                <p class="text-subtitle text-muted">Daftar Peminjaman di EasyBorrow</p>
            </div>
        </div>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('peminjaman') }}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-2">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-primary">+ Pinjam Barang</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-2">Nama Peminjam</th>
                        <th class="col-2">Nama Barang</th>
                        <th class="col-1">Tanggal Peminjaman</th>
                        <th class="col-1">Tanggal Pengembalian</th>
                        <th class="col-1">Status</th>
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $peminjaman)
                        <tr>
                            <td>{{ $peminjaman->id_peminjaman }}</td>
                            <td>{{ $peminjaman->user->nama_user }}</td>
                            <td>{{ $peminjaman->barang->nama_barang }}</td>
                            <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                            <td>{{ $peminjaman->tanggal_pengembalian }}</td>
                            <td>{{ $peminjaman->status_peminjaman }}</td>
                            <td>
                                <a href="{{ url('peminjaman/' . $peminjaman->id_peminjaman . '/edit') }}"
                                    class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>

                                <form class='d-inline' action="/pengembalian/{{ $peminjaman->id_peminjaman }}"
                                    method="POST">
                                    @csrf
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm"><i
                                            class="bi bi-arrow-return-left"></i>
                                    </button>
                                </form>

                                <form class='d-inline' action="{{ url('peminjaman/' . $peminjaman->id_peminjaman) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- AKHIR DATA -->
@endsection
