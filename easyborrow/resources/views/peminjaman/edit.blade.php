@extends('home')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Data Peminjaman</h3>
                <p class="text-subtitle text-muted">Data Peminjaman EasyBorrow</p>
            </div>
        </div>
    </div>
    <form action="{{ url('peminjaman/' . $data->id_peminjaman) }}" method="post">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('peminjaman') }}" class="btn btn-secondary">
                &lt;&lt; Kembali
            </a>
            <div class="mb-3 row">
                <label for="id_user" class="col-sm-3 col-form-label">Nama Peminjam</label>
                <div class="col-sm-5">
                    <select class="form-control" name="id_user" id="id_user">
                        <option value="">Pilih Akun Anda -></option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id_user }}" @if ($user->id_user == $data->id_user) selected @endif>
                                {{ $user->nama_user }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="id_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                <div class="col-sm-5">
                    <select class="form-control" name="id_barang" id="id_barang">
                        <option value="">Pilih Barang Yang Akan Dipinjam -></option>
                        @foreach ($barang as $item)
                            <option value="{{ $item->id_barang }}" @if ($item->id_barang == $data->id_barang) selected @endif>
                                {{ $item->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal_peminjaman" class="col-sm-3 col-form-label">Tanggal Peminjaman</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tanggal_peminjaman"
                        value="{{ $data->tanggal_peminjaman }}" id="tanggal_peminjaman">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal_pengembalian" class="col-sm-3 col-form-label">Tanggal Pengembalian</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="tanggal_pengembalian"
                        value="{{ $data->tanggal_pengembalian }}" id="tanggal_pengembalian">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </div>
        </div>
    </form>
@endsection
