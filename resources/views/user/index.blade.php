@extends('home')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data User</h3>
                <p class="text-subtitle text-muted">User EasyBorrow</p>
            </div>
        </div>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('user') }}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-2">
            <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah User</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-2">Nama</th>
                        <th class="col-2">Email</th>
                        <!-- Exclude Password Column -->
                        <th class="col-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $user)
                        <tr>
                            <td>{{ $user->id_user }}</td>
                            <td>{{ $user->nama_user }}</td>
                            <td>{{ $user->email }}</td>
                            <!-- Exclude Password Column -->
                            <td>
                                <a href="{{ url('user/' . $user->id_user . '/edit') }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form class='d-inline' action="{{ url('user/' . $user->id_user) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash-fill"></i>
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
