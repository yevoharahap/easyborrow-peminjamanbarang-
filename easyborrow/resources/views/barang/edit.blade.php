@extends('home')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Data Barang</h3>
                <p class="text-subtitle text-muted">User EasyBorrow</p>
            </div>
        </div>
    </div>
    <form action="{{ url('barang/' . $data->id_barang) }}" method="post">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('user') }}" class="btn btn-secondary">
                &lt;&lt; Kembali
            </a>
            <div class="mb-3 row">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name='nama_barang' value="{{ $data->nama_barang }}"
                        id="nama_barang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name='kondisi' value="{{ $data->kondisi }}" id="kondisi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                </div>
            </div>
        </div>
    </form>
@endsection
