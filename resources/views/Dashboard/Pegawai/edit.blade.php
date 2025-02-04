@extends('Dashboard.Layouts.layout')
@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Tambah Pegawai</h3>
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
            <div class="container">
                <form method="POST" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{$pegawai->nama}}">
                            @error('nama')
                            <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" name="nip" class="form-control" id="nip" value="{{$pegawai->nip}}">
                            @error('nip')
                            <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Jabatan</label>
                            <input type="text" name="position" class="form-control" id="position" value="{{$pegawai->position}}">
                            @error('position')
                            <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Departemen</label>
                            <input type="text" name="department" class="form-control" id="department" value="{{$pegawai->department}}">
                            @error('department')
                            <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="salary" class="form-label">Gaji</label>
                            <input type="number" name="salary" class="form-control" id="salary" value="{{$pegawai->salary}}">
                            @error('salary')
                            <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                    <!--end::Footer-->
                </form>
            </div>
        </div>
    </main>
@endsection
