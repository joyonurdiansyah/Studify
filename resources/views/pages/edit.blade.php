@extends('layouts.app')

@section('title', 'Edit Data User')

@section('content')
    <div class="container" style="padding-bottom: 4rem; position: relative; z-index: 1;">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('image/profile.png') }}" alt="User Icon" style="width: 100px; height: 100px;">
                </div>
                <h1 class="card-title text-center mt-2 mb-2">Edit User</h1>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form id="form-edit" action="{{ url('/update-user') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="text" name="id" value="{{ $user->id }}" type="">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor Handphone</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $user->no_hp }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="4" required>{{ $user->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                            required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
