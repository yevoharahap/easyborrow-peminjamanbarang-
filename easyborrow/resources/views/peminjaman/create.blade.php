@extends('home')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pinjam Barang?</h3>
                <p class="text-subtitle text-muted">EasyBorrow Solusinya!</p>
            </div>
        </div>
    </div>
    <form action="{{ route('peminjaman.store') }}" method="post">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('peminjaman') }}" class="btn btn-secondary">
                &lt;&lt; Kembali
            </a>
            <div class="mb-3 row">
                <label for="role" class="col-sm-3 col-form-label">Nama Peminjam</label>
                <div class="col-sm-5">
                    <select class="form-control" name="id_user">
                        <option value="">Pilih Akun Anda -></option>
                        @foreach ($user as $item)
                            <option value="{{ $item->id_user }}">{{ $item->nama_user }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="role" class="col-sm-3 col-form-label">Nama Peminjam</label>
                <div class="col-sm-5">
                    <select class="form-control" name="id_barang">
                        <option value="">Pilih Barang Yang Akan Dipinjam -></option>
                        @foreach ($barang as $item)
                            <option value="{{ $item->id_barang }}">{{ $item->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal_peminjaman" class="col-sm-3 col-form-label">Tanggal Peminjaman</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tanggal_peminjaman" id="tanggal_peminjaman">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal_pengembalian" class="col-sm-3 col-form-label">Tanggal Pengembalian</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tanggal_pengembalian" id="tanggal_pengembalian">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                </div>
            </div>
        </div>
    </form>
@endsection
