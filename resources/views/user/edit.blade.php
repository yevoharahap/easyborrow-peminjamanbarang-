@extends('home')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Data User</h3>
                <p class="text-subtitle text-muted">User EasyBorrow</p>
            </div>
        </div>
    </div>
    <form action="{{ url('user/' . $data->id_user) }}" method="post">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('user') }}" class="btn btn-secondary">
                &lt;&lt; Kembali
            </a>
            <div class="mb-3 row">
                <label for="nama_user" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_user" value="{{ $data->nama_user }}"
                        id="nama_user">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="email" value="{{ $data->email }}" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" name="password" id="password">
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
