@extends('Dashboard.Layouts.layout')
@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Daftar Pegawai</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <div class="app-content">
            <div class="container-fluid">
                @if (session('status'))
                    <div class="mb-4 text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <h1>Data Pengguna</h1>
                <a href="/dashboard/pegawai/tambah" type="button" class="btn btn-success mb-2">Tambah</a>
                <table id="myTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akan ditambahkan di sini menggunakan Laravel blade -->
                        @foreach ($pegawai as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nip }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>
                                    <a href="{{route('pegawai.edit', $p->id)}}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('pegawai.destroy', $p->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
