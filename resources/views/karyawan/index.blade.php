@extends('layouts.app')

@section('title', 'Data Users')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <div class="container">
        @if (session('berhasil'))
        <div class="alert alert-success">
            {{ session('berhasil') }}
        </div>
        @endif
        <div style="margin-bottom: 20px;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                + Tambah data
            </button>
        </div>
        <table id="userstable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telpon</th>
                    <th>Kota</th>
                    <th>Status</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- isi di jquery --}}
            </tbody>
        </table>
    </div>
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Karyawan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/data-karyawan/simpan-data" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama-karyawan" placeholder="masukkan nama anda"
                                name="nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email-karyawan" placeholder="masukkan email anda"
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Nomor Telpon:</label>
                            <input type="number" class="form-control" id="telpon-karyawan"
                                placeholder="masukkan nomor telpon" name="nomor_telepon">
                        </div>
                        <div class="form-group">
                            <label for="kota">kota:</label>
                            <input type="text" class="form-control" id="kota-karyawan" placeholder="masukkan nama kota"
                                name="kota">
                        </div>
                        <div class="form-group">
                            <label for="foto">pilih foto anda:</label>
                            <input type="file" id="myfile" name="foto">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Karyawan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/data-karyawan/simpan-data" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id_karyawan">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama-karyawan" placeholder="masukkan nama anda"
                                name="nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email-karyawan" placeholder="masukkan email anda"
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Nomor Telpon:</label>
                            <input type="number" class="form-control" id="telpon-karyawan"
                                placeholder="masukkan nomor telpon" name="nomor_telepon">
                        </div>
                        <div class="form-group">
                            <label for="kota">kota:</label>
                            <input type="text" class="form-control" id="kota-karyawan" placeholder="masukkan nama kota"
                                name="kota">
                        </div>
                        <div class="form-group">
                            <label for="foto">pilih foto anda:</label>
                            <input type="file" id="myfile" name="foto">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

@endsection

@push('after-script')
    {{-- data tables --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script> --}}
  


        $(document).ready(function() {
            console.log('test')
            $('#userstable').DataTable({
                processing: true,
                serverSide: false,
                ajax: '/data-karyawan',
                columns: [{
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'nomor_telepon',
                        name: 'nomor_telepon'
                    },
                    {
                        data: 'kota',
                        name: 'kota'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row) {
                            var badgeClass = data === 'Aktif' ? 'badge-success' : 'badge-danger';
                            return '<span class="badge ' + badgeClass + '">' + data + '</span>';
                        }
                    },
                    {
                        data: 'foto',
                        name: 'foto',
                    },
                    {
                        render: function(data, type, row) {
                            var btn = '<button class="btn btn-success btn-sm" onclick="myBtnUpdateData(' +
                            row.id + ')" style="border-radius: 5px;font-size:11px"" id="' + row.id_karyawan +
                            '" href="#"><i class="bi bi-pencil-square"></i> Ubah</button>';   
                            btn += '<button type="button" class="btn btn-danger ml-2">Delete</button>';
                            return btn;
                        }
                    }
                ]
            });
        });

        function myBtnUpdateData(id) {
            $.ajax({
                url: "/manajemen_user/" + id,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    console.log('cekdata', res.data)
                    $('#id').val(res.data.id);
                    $('#name_up').val(res.data.name);
                    $('#email_up').val(res.data.email);
                    $('#no_hp_users_up').val(res.data.no_hp_users);
                    $('#alamat_users_up').val(res.data.alamat_
                    // belum selesai
            }
    </script>
@endpush
