@extends('home')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Barang</h3>
                <p class="text-subtitle text-muted">Barang Tersedia di EasyBorrow</p>
            </div>
        </div>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action={{ url('barang') }} method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-2">
            <a href={{ route('barang.create') }} class="btn btn-primary">+ Tambah Barang</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-1">Nama</th>
                        <th class="col-1">Kondisi</th>
                        <th class="col-1">Status</th>
                        <th class="col-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $barang)
                        <tr>
                            <td>{{ $barang->id_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->kondisi }}</td>
                            <td>
                                @if ($barang->tersedia == 1)
                                    Tersedia
                                @else
                                    Tidak Tersedia
                                @endif
                            </td>
                            <td>
                                <a href='{{ url('barang/' . $barang->id_barang . '/edit') }}'
                                    class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form class='d-inline' action="{{ url('barang/' . $barang->id_barang) }}" method="POST">
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
