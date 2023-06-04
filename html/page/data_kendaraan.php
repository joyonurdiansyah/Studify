<div class="container">
    <div class="">
        <div class="row">
            <div class="col-6 mt-2">
                <h2> table kendaraan </h2>
            </div>
            <div class="col-6 mt-2">
                <?php

                $link_to_add_data = "html/page/tambah_data_kendaraan.php";

                echo "<a href='".$link_to_add_data."' type='button' class='btn btn-success'>tambah data kendaraan</a>";
                ?>
            </div>
        </div>
    </div>
    <table id="dataKendaraan" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Warna</th>
                <th>Tahun</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#dataKendaraan').DataTable({
            processing: true,
            ajax: 'http://localhost/web_bengkel/API/server.php?dbs=data_kendaraan',
            columns: [{
                    data: 'ID'
                },
                {
                    data: 'Merk'
                },
                {
                    data: 'Tipe'
                },
                {
                    data: 'Harga'
                },
                {
                    data: 'Warna'
                },
                {
                    data: 'Tahun'
                },
                {
                    data: ''
                },

            ],
            columnDefs:[{
                targets : -1,
                render: function(data,type,row){
                    let tombol;
                    tombol = '<a href="html/page/ubah_data_kendaraan.php?id_kendaraan='+row.ID+'" class="btn btn-success">Ubah</a>'
                    tombol += '<button type="button" class="btn btn-danger">Danger</button>'
                    return tombol
                },
            }],
        });
    });
</script>