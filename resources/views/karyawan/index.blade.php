@extends('layouts.app')

@section('title', 'Data Users')

@section('content')

    <div class="container">
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
                    <th>Nomol Telpon</th>
                    <th>Kota</th>
                    <th>Foto Karyawan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
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
                    <form action="/action_page.php">
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
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#userstable').DataTable();
        });
    </script>
@endpush
