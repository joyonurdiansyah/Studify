@extends('layouts.app')

@section('title', 'Data Users')

@section('content')
    <div class="container">
        <h1>Table Data Users</h1>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <a href="{{ route('tambah.users') }}" class="btn btn-success" title="Add Data"><i class="fa fa-plus"></i> Tambah
                    data karyawan</a>
            </div>
            <div class="d-flex">
                <form action="{{ route('search.users') }}" method="GET" class="d-flex">
                    <input type="text" class="form-control" placeholder="Cari data karyawan" name="keyword">
                    <button class="btn btn-primary ml-2" title="Search"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="table-responsive mb-5">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $no => $val)
                        <tr>
                            <th scope="row">{{ $no + 1 }}</th>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->no_hp }}</td>
                            <td>{{ $val->alamat }}</td>
                            <td>{{ $val->email }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="User Actions">
                                    <a href="{{ route('edit.user', ['id' => $val->id]) }}" class="btn btn-primary"
                                        title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('hapus.data.user', ['id' => $val->id]) }}" class="btn btn-danger"
                                        title="hapus"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
