@extends('layouts.app')

@section('title', 'Tambah Data')

@section('content')
    <section class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title">Tambah Data Karyawan</h5>
                    {{-- ganti route ke pages.users --}}
                    <a href="{{ url('/datauser') }}" class="btn btn-secondary ml-auto">Kembali</a>
                </div>
                {{-- set error --}}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- success message --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- sucess blm --}}

                <form action="{{ route('tambah.users') }}" method="POST" class="was-validated"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="masukkan nama"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="handphone">Nomor Handphone</label>
                        <input type="text" class="form-control" id="no_hp" placeholder="Enter password"
                            name="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" placeholder="masukkan alamat" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="masukkan email"
                            name="email">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </section>
@endsection
